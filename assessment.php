<?php include 'shared/_Header.php';?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Assessment</h1>
    </div>
    
    <?php
      if(!isset($_SESSION['dummy'])){
    ?>
        <div class="row">
          <div class="col-md-6" style="text-align: center">
            <h2 class="mobile-resize">Drop your answer here.</h2>
            <div id="dropzone-holder" class="col-half" style="width: 100%; background-color: white; padding: 5px; border-radius: 10px;">
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-apple" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-bananas" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-carrot" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-cherries" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-grapes" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-lemon" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-pear" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-strawberry" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-tomato" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-watermelon" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-k" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-l" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-m" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-n" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-o" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
              <div class="col-quarter hitbox">
                <img class="answer hide" src="img/Assessment/correct-green.png" />
                <div id="dropzone-p" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6" style="text-align: center">
            <h2 class="mobile-resize">Answers.</h2>
            <div class="hitbox" >
              <div id="dropzone-container" class="dropzone container" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                <img id="icon-apple" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/A.png">
                <img id="icon-bananas" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/B.png">
                <img id="icon-carrot" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/C.png">
                <img id="icon-cherries" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/D.png">
                <img id="icon-grapes" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/E.png">
                <img id="icon-lemon" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/F.png">
                <img id="icon-pear" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/G.png">
                <img id="icon-strawberry" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/H.png">
                <img id="icon-tomato" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/I.png">
                <img id="icon-watermelon" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/J.png">
                <img id="icon-k" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/K.png">
                <img id="icon-l" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/L.png">
                <img id="icon-m" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/M.png">
                <img id="icon-n" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/N.png">
                <img id="icon-o" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/O.png">
                <img id="icon-p" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/Assessment/P.png">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-5" style="text-align:center">
          <button type="button" class="btn btn-primary btn-submit-assessment" style="font-size: 25px; width: 300px;" disabled>SUBMIT</button>
          <h2 class="score-assessment mt-3" style="visibility:hidden">Your score is <span id="score">0</span>/16.</h2>
          </div>
        </div>
    <?php
      } else {
    ?>
    <h5 class="mt-3">You already submitted the assessment.</h5>
    <h5>Your score is <strong>
      <?php
        echo $_SESSION['score']
      ?>/16</strong>.</h5>
    <?php
      }
    ?>
  </div>
  <!-- End of Main Content -->
  <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id'];?>" />
<?php include 'shared/_Footer.php';?>