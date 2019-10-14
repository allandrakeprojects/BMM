<?php include 'shared/_Header.php';?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Assessment Information</h1>
    </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Scores</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="assessmentScores" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Score (16 points)</th>
                        <th>No. of Takes</th>
                    </tr>
                    </thead>
                </table>
            </div>
          </div>
  </div>
  <!-- End of Main Content -->
  <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id'];?>" />
<?php include 'shared/_Footer.php';?>