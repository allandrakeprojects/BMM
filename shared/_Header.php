<?php
  session_start();

  if(!isset($_SESSION['name'])){
    header("Location: /bmm/login.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BMM Motors</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/bmm.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="../img/logo-mini.png" />

  <!-- DataTables -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="rotate-notice" style="diplay:none" class="row h-100">
        <div class="col-md-12" style="margin-top: auto; margin-bottom: auto; text-align: center">
            <div class="phone">
            </div>
            <div class="message">
            For better experience please rotate your device!
            </div>
        </div>
    </div>
  <!-- Page Wrapper -->
  <div id="wrapper" style="display:none">

    <!-- Sidebar -->
    <?php include '_SideBar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include '_TopBar.php';?>
        <!-- End of Topbar -->