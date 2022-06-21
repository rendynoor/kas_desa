<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION['nama'])) {
  echo "<script>
  alert('anda harus login');
  document.location='login.php';</script>";
 } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="src/logo-djcorp.png" type="image/ico" />

    <title>Aplikasi Kas Desa </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="clearfix"></div>
        <?php include"koneksi.php"; ?>
        <?php include"header.php"; ?>
        <?php include"sidebar.php"; ?>
       <div class="contet-wrapper">
        <section class="contet-header">
          <?php 
          if(isset($_GET['halaman'])){
            if($_GET['halaman']=="user"){
              include"user.php";
            }elseif ($_GET['halaman']=="remove_user") {
              include"remove_user.php";
            }elseif ($_GET['halaman']=="add_user") {
              include"add_user.php";
            }elseif ($_GET['halaman']=="ubah_user") {
              include"ubah_user.php";
            }elseif ($_GET['halaman']=="kas_masuk") {
              include"kas_masuk.php";
            }elseif ($_GET['halaman']=="remove_kas_masuk") {
              include"remove_kas_masuk.php";
            }elseif ($_GET['halaman']=="tambah_kas_masuk") {
              include"tambah_kas_masuk.php";
            }elseif ($_GET['halaman']=="ubah_kas_masuk") {
              include"ubah_kas_masuk.php";
            }elseif ($_GET['halaman']=="kas_keluar") {
              include"kas_keluar.php";
            }elseif ($_GET['halaman']=="tambah_kas_keluar") {
              include"tambah_kas_keluar.php";
            }elseif ($_GET['halaman']=="ubah_kas_keluar") {
              include"ubah_kas_keluar.php";
            }elseif ($_GET['halaman']=="remove_kas_keluar") {
              include"remove_kas_keluar.php";
            }elseif ($_GET['halaman']=="rekapitulasi") {
              include"rekapitulasi.php";
            }else{
            include"home.php";
          }
          }else{
            include"home.php";
          } ?>

        </section>
      </div>
      <?php include"footer.php"; ?>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	 
  </body>
</html>
