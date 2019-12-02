$(function () {
    loginValidate();
    registrationValidate();
    loginAccount();
    registerAccount();
});

var resultName;
var resultEmail;
var resultPassword;
var resultRole;

function registrationValidate() {
    $('.user-registration').on('input', function() {        
        var firstName = $('#exampleFirstName').val();
        var lastName = $('#exampleLastName').val();
        var email = $('#exampleInputEmail').val();
        var password = $('#exampleInputPassword').val();
        var isValidEmail = false;

        if(isEmail(email)){
            $("#email-valid").css({"display": "none"});

            $.ajax({
                url: 'api/user/validate_email.php',
                type: 'POST',
                contentType: "application/json",
                dataType: "json",
                data: JSON.stringify({ email: email }),
            }).done(function(data){
                var result = JSON.stringify(data.message)
                if(result == '"Email Exists"'){
                    isValidEmail = false;
                    $("#email-error").css({"display": ""});
                } else{
                    isValidEmail = true;
                    $("#email-error").css({"display": "none"});
                    if(isValidEmail && firstName.length > 0 && lastName.length > 0 && password.length > 5 ){
                        $('.btn-register-account').prop("disabled", false);
                    } else {
                        $('.btn-register-account').prop("disabled", true);
                    }
                }
            });
        } else{
            if(email.length > 0){
                $("#email-valid").css({"display": ""});
                $("#email-error").css({"display": "none"});
                $('.btn-register-account').prop("disabled", true);
            }
        }

        if(password.length > 0 && password.length < 6){
            $("#password-error").css({"display": ""});
            $('.btn-register-account').prop("disabled", true);
        } else if(password.length > 5){
            $("#password-error").css({"display": "none"});
        }
    }); 

    var input = $('#exampleInputEmail');
    input.on('keydown', function() {
      var key = event.keyCode || event.charCode;
  
      if( key == 8 || key == 46 || key == 88 ) {
        $("#email-valid").css({"display": ""});
        $("#email-error").css({"display": "none"});
        $('.btn-register-account').prop("disabled", true);
      }
        
    });
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function registerAccount() {
    $('.btn-register-account').click(function(e) {
        var firstName = $('#exampleFirstName').val();
        var lastName = $('#exampleLastName').val();
        var name = firstName + ' ' + lastName;
        var email = $('#exampleInputEmail').val();
        var password = $('#exampleInputPassword').val();
        
        $.ajax({
            url: 'api/user/create.php',
            type: 'POST',
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({ name: name, email: email, password: password }),
        }).done(function(data){
            var result = JSON.stringify(data.message)
            if(result == '"User Created"'){
                location.href = "/bmm/login.php"
            }
        });
    })
}

function loginValidate() {
    $('.user-login').on('input', function() {
        var email = $('#exampleInputEmailLogin').val();
        var password = $('#exampleInputPasswordLogin').val();

        if(isEmail(email)){
            $("#email-valid").css({"display": "none"});

            $.ajax({
                url: 'api/user/validate_email.php',
                type: 'POST',
                contentType: "application/json",
                dataType: "json",
                data: JSON.stringify({ email: email }),
            }).done(function(data){
                resultName = JSON.stringify(data.name)
                resultEmail = JSON.stringify(data.email)
                resultPassword = JSON.stringify(data.password)
                resultRole = JSON.stringify(data.role)
                var result = JSON.stringify(data.message)
                if(result != '"Email Exists"'){
                    $("#email-error").css({"display": ""});
                    $('.btn-login-account').prop("disabled", true);
                } else{
                    $("#email-error").css({"display": "none"});
                    if(password.length > 5){
                        $('.btn-login-account').prop("disabled", false);
                    } else {
                        $('.btn-login-account').prop("disabled", true);
                    }
                }
            });
        } else{
            if(email.length > 0){
                $("#email-valid").css({"display": ""});
                $("#email-error").css({"display": "none"});
                $('.btn-register-account').prop("disabled", true);
            }
        }

        if(password.length > 0 && password.length < 6){
            $("#password-error").css({"display": ""});
        } else if(password.length > 5){
            $("#password-error").css({"display": "none"});
        }
    });
}

function loginAccount() {
    $('.btn-login-account').click(function(e) {
        var email = $('#exampleInputEmailLogin').val();
        var password = $('#exampleInputPasswordLogin').val();
        
        $.ajax({
            url: 'api/user/login.php',
            type: 'POST',
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({ email: email, password: password }),
            error: function (request, status, error) {
                alert("Password won't match to email.");
            }
        }).done(function(data){
            var status = JSON.stringify(data.status)
            var role = JSON.stringify(data.role)
            
            if(status == '"success"'){
                if(role == '"Administrator"'){
                    location.href = "/bmm/assessment_info.php"
                } else {
                    location.href = "/bmm/index.php"
                }
            } else {
                alert("Password won't match to email.");
            }
        });
    })
}