<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../index.php");
}

$role = $_SESSION['role'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact - LPM Admin Web</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  include('header-admin.php');
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#documents-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="documents-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <?php
          include('sidebar-doc.php');
          ?>
        </ul>
      </li><!-- End Documents Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <?php
          include('sidebar-form.php');
          ?>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
      </li><!-- End Sign Out Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-6">
          <div class="row">

            <!-- Address Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Jl. Raya Pondok Gede No.23-25 Jakarta Timur 13550</p>
              </div>
            </div><!-- End Address Card -->

            <!-- Call Us Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>021-8096411</p>
                <p>0811-131-337 (WA)</p>
                <p> ‎ </p>
              </div>
            </div><!-- End Call Us Card -->

            <!-- Email Us Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@thamrin.ac.id</p>
                <p> ‎ </p>
              </div>
            </div><!-- End Email Us Card -->

            <!-- Open Hours Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>09.00 - 15.00 (WIB)</p>
              </div>
            </div><!-- End Open Hours Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-6">
          <div class="row">

            <!-- Contact Form -->
            <div class="col-md-12">
              <div class="php-email-form">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Contact Form</h5>
                    <form class="row g-3">
                      <div class="col-md-12">
                       <label for="inputName" class="form-label">Name</label>
                       <input type="text" class="form-control" id="inputName">
                     </div>
                     <div class="col-md-12">
                       <label for="inputEmail" class="form-label">Email</label>
                       <input type="text" class="form-control" id="inputEmail">
                     </div>
                     <div class="col-md-12">
                       <label for="inputSubject" class="form-label">Subject</label>
                       <input type="text" class="form-control" id="inputSubject">
                     </div>
                     <div class="col-md-12">
                      <label for="inputMessage" class="form-label">Message</label>
                      <textarea class="form-control" id="inputMessage" style="height: 100px;"></textarea>
                     </div>
                     <div class="text-center">
                      <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                   </form>
                  </div>
                </div>
              </div>
            </div><!-- End Contact Form -->

          </div>
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-php-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

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