<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$role = $_SESSION['role'];
$username = $_SESSION['username'];
require '../conn/conn.php';
// username : admin2, password : 12345

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Course</title>
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
    <link href="assets/css/content.css" rel="stylesheet">

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
                    <ul id="documents-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-calendar-check"></i><span>Webinar</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <?php
                        include('sidebar-webinar.php');
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
        <?php $jenis = 2;
        $sql = mysqli_query($conn, "SELECT * FROM materi WHERE jenis = '$jenis';");
        while ($result = mysqli_fetch_assoc($sql)) {
        ?>
            <div class="card">
                <img src="imgModul/<?php echo $result['gambar']; ?>">
                <div class="card-content">
                    <h4><b><?php echo $result['judul']; ?></b></h4>
                    <p><?php $description = $result['course'];
                        echo substr($description, 0, 100) . "..."; ?></p>
                </div>
                <div class="text-center">
                    <a href="course.php?lihat=<?php echo $result['id']; ?>" type="button" class="ml-3 btn btn-success btn-sm">Lihat Course</a>
                </div>
            </div>
        <?php } ?>
    </main>
    <!-- End #main -->

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