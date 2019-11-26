<?php include 'shared/_Header.php';?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Motorcycles</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow py-2">
          <img src="img/motorcycle.jpg" class="img-responsive" style="height: 272px; width: auto;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">KTM RC8</div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#manual">MENU</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow py-2">
          <img src="img/motorbike.jpg" class="img-responsive" style="height: 272px; width: auto;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Wave 100</div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#semiManual">MENU</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow py-2">
          <img src="img/scooter.jpg" class="img-responsive" style="height: 272px; width: auto;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800">Vespa</div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#automatic">MENU</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Modal manual -->
    <div class="modal fade" id="manual" tabindex="-1" role="dialog" aria-labelledby="manualLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="manualLabel">Video Tutorial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a href="https://www.youtube.com/watch?v=3VGAhB6pzSc" target="_blank">How to clean Carburetor</a><br>
            <a href="https://www.youtube.com/watch?v=7M3snEUkwH0" target="_blank">How to change Tires</a><br>
            <a href="https://www.youtube.com/watch?v=02JKM1aWmxk" target="_blank">How to change Chain</a><br>
            <a href="https://www.youtube.com/watch?v=62PkWF3fWb0" target="_blank">How to change Oil</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal semiManual -->
    <div class="modal fade" id="semiManual" tabindex="-1" role="dialog" aria-labelledby="semiManualLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="semiManualLabel">Video Tutorial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a href="https://www.youtube.com/watch?v=NqB30Q-rn4o" target="_blank">Clean Carburetor</a><br>
            <a href="https://www.youtube.com/watch?v=oYj16FrkOQs" target="_blank">Head and Tail Bulb Replacement</a><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal automatic -->
    <div class="modal fade" id="automatic" tabindex="-1" role="dialog" aria-labelledby="automaticLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="automaticLabel">Video Tutorial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a href="https://www.youtube.com/watch?v=OwpqfAK3HTM" target="_blank">How to clean Carburetor</a><br>
            <a href="https://www.youtube.com/watch?v=kxqbFHRe6nE" target="_blank">How to change Tires</a><br>
            <a href="https://www.youtube.com/watch?v=MHqlA7k00EM" target="_blank">How to change Chain</a><br>
            <a href="https://www.youtube.com/watch?v=bJ2Y8Ux7E8s" target="_blank">How to change Oil</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
<?php include 'shared/_Footer.php';?>