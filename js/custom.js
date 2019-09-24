$(function () {
    getOrientation();
    setNavigation();
    buttonSubmitAssessment();
    renderAssessmentScores();
});

function setNavigation() {
    $('.navbar-nav li a').click(function(e) {
        var link = $(this);

        var item = link.parent("li");
        
        if (item.hasClass("active")) {
            item.removeClass("active").children("a").removeClass("active");
        } else {
            item.addClass("active").children("a").addClass("active");
        }

        if (item.children("ul").length > 0) {
            var href = link.attr("href");
            link.attr("href", "#");
            setTimeout(function () { 
                link.attr("href", href);
            }, 300);
            e.preventDefault();
        }
    })
    .each(function() {
        var link = $(this);
        if (link.get(0).href === location.href) {
            link.addClass("active").parents("li").addClass("active");
            return false;
        }
    });
}

function getOrientation(){
  if ($(window).width() < 700) {
    switch (window.orientation) {
      case 0:
        // Portrait
        enableRotationNotice();
        break;
      case 180:
        // Portrait (Upside-down)
        enableRotationNotice();
        break;
      case -90:
        // Landscape (Clockwise)
        disableRotationNotice();
        break;  
      case 90:
        // Landscape  (Counterclockwise)
        disableRotationNotice();
        break;
    }

    $(window).on("orientationchange",function(){
      switch (window.orientation) {
        case 0:
          // Portrait
          enableRotationNotice();
          break;
        case 180:
          // Portrait (Upside-down)
          enableRotationNotice();
          break;
        case -90:
          // Landscape (Clockwise)
          disableRotationNotice();
          break;  
        case 90:
          // Landscape  (Counterclockwise)
          disableRotationNotice();
          break;
      }
    });    
  } else {
    disableRotationNotice();
  }











  // $(window).on("deviceorientation", function( event ) {
  //   if (window.matchMedia("(orientation: portrait)").matches) 
  //     alert('0');
  //       // enableRotationNotice();
  //   if (window.matchMedia("(orientation: landscape)").matches)
  //     alert('1');
  //       // disableRotationNotice();
  // });


  // $(window).bind('orientationchange resize', function(event){
  //   alert(event.orientation);
  //   if(event.orientation) {
  //     if(event.orientation == 'portrait') {
  //       alert('portrait');
  //     } else if (event.orientation == 'landscape') {
  //       alert('landscape');
  //     } 
  //   } else {
  //     alert('pc');
  //   }
  // });

  // $(window).trigger('orientationchange');
    //     // window.addEventListener("orientationchange", function() {
    //     //     if(window.orientation == 0) {
    //     //       this.alert();
    //     //       enableRotationNotice();
    //     //     }
    //     //     else {
    //     //       disableRotationNotice();
    //     //     }
    //     //     alert(screen.orientation);
    //     // }, false);


        

    // } else{
}

function enableRotationNotice(){
    $("#rotate-notice").css({"display": ""});
    $("#wrapper").css({"display": "none"});
    $("html, body").css({"background": "black", "height": "100%", "width": "100%", "overflow": "hidden"});
}

function disableRotationNotice(){
    $("#rotate-notice").css({"display": "none"});
    $("#wrapper").css({"display": ""});
    $("html, body").css({"background": "", "height": "", "width": "", "overflow": ""});
}

function renderAssessmentScores() {
  $('#assessmentScores').DataTable( {
    "ajax": {
      url: 'api/assessment/read.php',
      dataSrc: ""
    },
    columns: [
      { "data": "name" },
      { "data": "email" },
      { "data": "score" }
    ]
    
} );
}

/**
 * Global Variables ****************************************
 */
var isSubmit = false;

/**
 * Assessment ****************************************
 */

function buttonSubmitAssessment(){
  $('.btn-submit-assessment').click(function(e) {
    isSubmit = true;
    $(".answer.hide, .score-assessment").css({"visibility": "visible"});
    $('.btn-submit-assessment').prop("disabled", true);
    var user_id =  $('#user_id').val();
    var score = $('.score-assessment').text().replace('Your score is ', '').replace('/16.', '');

    $.ajax({
      url: 'api/assessment/create.php',
      type: 'POST',
      contentType: "application/json",
      dataType: "json",
      data: JSON.stringify({ user_id: user_id, score: score }),
    }).done(function(data){
        // var result = JSON.stringify(data.message)
        // alert(result)
    });
  })
}

var pageURL = $(location).attr("href");
if(pageURL.includes('assessment') && !pageURL.includes('assessment_info')){
  var score = document.getElementById('score');
  
  var start = function(e) {
    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setData('iconId', e.target.id);
    e.dataTransfer.setDragImage(e.target, 0, 0);
    return true;
  }

  var enter = function(e) {
    return true;
  }

  var over = function(e) {
    var iconId = e.dataTransfer.getData('iconId');
    var targetId = e.target.id;

    if (targetId.indexOf('icon') > -1) {
      return true;
    }

    return false;
  }

  var drop = function(e) {
    if(!isSubmit){
      var iconId = e.dataTransfer.getData('iconId');
      var icon = document.getElementById(iconId);
      e.target.appendChild(icon);
      e.stopPropagation();
      return false;
    } else{
      alert('You already submitted your assessment.');
    }
  }

  var end = function(e) {
    if(!isSubmit){
      var countDrag = $("#dropzone-container img").length;
      if(countDrag == 0){
        $('.btn-submit-assessment').prop("disabled", false);
      } else{
        $('.btn-submit-assessment').prop("disabled", true);
      }
      e.dataTransfer.clearData('iconId');
      return true;
    }
  }

  var pollResults = function() {
    score.innerHTML = 0;

    var hitboxes = document.getElementById('dropzone-holder').children;

    for (var i = 0; i < hitboxes.length; i++) {
      var hitbox = hitboxes[i];
      var dropzone = hitbox.lastElementChild;

      if (dropzone.children.length > 0) {
        dropzone.style.backgroundSize = '0';

        var dropzoneId = dropzone.id;
        var iconId = dropzone.firstElementChild.id;

        var dropzoneName = dropzoneId.substring(dropzoneId.indexOf('-') + 1);
        var iconName = iconId.substring(iconId.indexOf('-') + 1);

        // dropzone.previousElementSibling.setAttribute('class', 'answer show');

        if (iconName == dropzoneName) {
          dropzone.previousElementSibling.src = 'img/Assessment/correct-green.png';
          score.innerHTML = parseInt(score.innerHTML) + 1;
        } else {
          dropzone.previousElementSibling.src = 'img/Assessment/wrong-red.png';
        }
      } else {
        dropzone.previousElementSibling.setAttribute('class', 'answer hide');
        dropzone.style.backgroundSize = '100% auto';
      }
    }

    // if (score.innerHTML == 10) {
    //   clearInterval(runPoll);
    //   var duration = document.getElementById('hours').innerHTML + ':' + document.getElementById('minutes').innerHTML + ':' + document.getElementById('seconds').innerHTML;
    //   $.ajax({
    //     url: '../../../process/Medium_getScore.php',
    //     type: "POST",
    //     data: {
    //         score: score.innerHTML,
    //         time: duration,
    //         subject: 'English',
    //         level: '1'


    //     },
    //     success: function(data){
    //         console.log(data);

    //     }
    //   }); 
    //   alert('Congratulations! You won the game!\nClick OK to Proceed.');
    //   location.assign("EnglishMediumLevels.php");
    // }

  }

  var runPoll = setInterval(pollResults, 50);

  var shuffleIcons = function() {
    var dropzoneContainer = document.getElementById('dropzone-container');
    var icons = dropzoneContainer.children;
    var fragment = document.createDocumentFragment();
    while (icons.length) {
      fragment.appendChild(icons[Math.floor(Math.random() * icons.length)]);
    }
    dropzoneContainer.appendChild(fragment);
  }

  var shuffleDropzones = function() {
    var dropzoneHolder = document.getElementById('dropzone-holder');
    var dropzones = dropzoneHolder.children;
    var fragment = document.createDocumentFragment();
    while (dropzones.length) {
      fragment.appendChild(dropzones[Math.floor(Math.random() * dropzones.length)]);
    }
    dropzoneHolder.appendChild(fragment);
  }

  window.onload = function() {
    shuffleIcons();
    shuffleDropzones();
  }
}