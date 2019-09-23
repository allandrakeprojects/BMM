<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BMM - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/bmm.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center" style="min-height: 98%; min-height: 98vh; display: flex; align-items: center;">
      <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user user-registration">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group" style="position: relative">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                    <div id="email-error" style="color: red; position: absolute; right: 20px; bottom: -18px; font-size: 12px; display: none">Email exists</div>
                    <div id="email-valid" style="color: red; position: absolute; right: 20px; bottom: -18px; font-size: 12px; display: none">Enter valid email</div>
                  </div>
                  <div class="form-group row" style="position: relative">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      <div id="password-error" style="color: red; position: absolute; right: 20px; bottom: -18px; font-size: 12px; display:none ">Enter valid password</div>
                    </div>
                    <!-- <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                    </div> -->
                  </div>
                  <button type="button" class="btn btn-primary btn-user btn-block btn-register-account" disabled>
                    Register Account
                  </button>
                  <!-- <hr>
                  <a href="index.php" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.php" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a> -->
                </form>
                <hr>
                <!-- <div class="text-center">
                  <a class="small" href="forgot-password.php">Forgot Password?</a>
                </div> -->
                <div class="text-center">
                  <a class="small" href="login.php">Already have an account? Login!</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/landing.js"></script>
  <script src="js/bmm.min.js"></script>

</body>

</html>
