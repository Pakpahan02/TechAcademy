<?php
session_start();
require 'security.php';
$role = $_SESSION['role'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--  Title -->
  <title>Tech Academy</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="../images/cropped-logon512-180x180.png" />
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href="../dist/css/style.min.css" />
  <style>
    #example1 {
      background: url(images/hero-3-bottom-img.png);
      background-repeat: no-repeat;
      background-size: 1000px;
      background-position: center bottom;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="../js/overhang/dist/overhang.min.css" />

  <!-- Favicons -->
  <link href="assets/img/logo-thamrin-3.png" rel="icon">
  <link href="assets/img/logo-thamrin-3.png" rel="logo-thamrin-3">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/lpmadmin.css" rel="stylesheet">

  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
  <script src="conn/firebase.js"></script>



  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include('include/header.php');
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php
      if ($_SESSION['role'] == 1) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#documents-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-earmark"></i><span>Course</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="documents-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <?php
            include('sidebar-doc.php');
            ?>
          </ul>
        </li><!-- End Documents Nav -->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Exam</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <?php
            //include('sidebar-exam.php');
            ?>
          </ul>
        </li> -->
        <!-- </li>End Forms Nav -->
      <?php } ?>
      <?php
      if ($_SESSION['role'] == 2) {
      ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Manajemen Admin</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <?php
            include('sidebar-form.php');
            ?>
          </ul>
          <!-- </li>End Forms Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Materi</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <?php
            include('sidebar-materi.php');
            ?>
          </ul>
          <!-- </li>End Forms Nav -->
        <?php } ?>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li><!-- End Sign Out Page Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">
            <div class="card-body">
              <h5 class="card-title">Selamat datang <?php echo $username; ?></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-12 text-center">
          <div class="row">
            <div class="card-body">
              <h5 class="card-title">

                <!-- Menampilkan Hari, Bulan dan Tahun -->
                <div class="card">
                  <br>
                  <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                      thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                  </script>

                  <!-- Menampilkan Jam (Aktif) -->
                  <div id="clock"></div>
                  <script type="text/javascript">
                    function showTime() {
                      var a_p = "";
                      var today = new Date();
                      var curr_hour = today.getHours();
                      var curr_minute = today.getMinutes();
                      var curr_second = today.getSeconds();
                      if (curr_hour < 12) {
                        a_p = "AM";
                      } else {
                        a_p = "PM";
                      }
                      if (curr_hour == 0) {
                        curr_hour = 12;
                      }
                      if (curr_hour > 12) {
                        curr_hour = curr_hour - 12;
                      }
                      curr_hour = checkTime(curr_hour);
                      curr_minute = checkTime(curr_minute);
                      curr_second = checkTime(curr_second);
                      document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                    }

                    function checkTime(i) {
                      if (i < 10) {
                        i = "0" + i;
                      }
                      return i;
                    }
                    setInterval(showTime, 500);
                  </script>
                  </br>

              </h5>
            </div>
          </div>
        </div>

        <!-- Side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="card-body">

              <!-- News & Updates Traffic -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body pb-0">
                    <h5 class="card-title">Update Kelas Terkini</h5>

                    <div class="news">
                      <div class="post-item clearfix">
                        <img src="assets/img/news-1.jpg" alt="">
                        <h4><a href="#">News 1</a></h4>
                        <p>(...isi berita...)</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="assets/img/news-2.jpg" alt="">
                        <h4><a href="#">News 2</a></h4>
                        <p>(...isi berita...)</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="assets/img/news-3.jpg" alt="">
                        <h4><a href="#">News 3</a></h4>
                        <p>(...isi berita...)</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="assets/img/news-4.jpg" alt="">
                        <h4><a href="#">News 4</a></h4>
                        <p>(...isi berita...)</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="assets/img/news-5.jpg" alt="">
                        <h4><a href="#">News 5</a></h4>
                        <p>(...isi berita...)</p>
                      </div>

                    </div><!-- End sidebar recent posts-->
                  </div>
                </div>
              </div>
            </div><!-- End News & Updates -->

          </div>
        </div><!-- End Side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php include('include/footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>