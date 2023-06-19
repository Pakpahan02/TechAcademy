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

    <title>Daftarkan Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="../images/cropped-logon512-180x180.png" />

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

    <!-- CSS for datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

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
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Exam</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <?php
                        include('sidebar-form.php');
                        ?>
                    </ul>
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
                </li>
                <!-- </li>End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Materi</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                        <?php
                        include('sidebar-materi.php');
                        ?>
                    </ul>
                </li>
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
            <h1>Form Registration</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Registration</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Registration</h5>

                            <!-- Form Registration -->
                            <?php
                            $judul = '';
                            $course = '';
                            $jenis = '';

                            if (isset($_GET['ubah'])) {
                                $id = $_GET['ubah'];

                                $query = "SELECT * FROM materi WHERE id = '$id';";
                                $sql = mysqli_query($conn, $query);
                                $result = mysqli_fetch_assoc($sql);

                                $judul = $result['judul'];
                                $course = $result['course'];
                                $jenis = $result['jenis'];
                            }
                            ?>
                            <form action="prosesMateri.php" class="row" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">

                                <div class="col-12">
                                    <label for="pictmodul" class="form-label">Banner Modul</label>
                                    <input type="file" class="form-control mb-3" id="pictmodul" name="gambar" <?php if (!isset($_GET['ubah'])) {
                                    echo "required"; } ?>>
                                </div>
                                <div class="col-12">
                                    <label for="materi" class="form-label">Judul Materi</label>
                                    <input type="text" class="form-control mb-3" id="materi" name="judul" require value="<?php echo $judul; ?>">
                                </div>

                                <div class="col-md-12">
                                    <label for="course" class="form-label">Isi Materi</label>
                                    <textarea cols="50" name="course" class="form-control mb-3" id="course" name="course" required><?php echo $course; ?></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="role" class="form-label">Jenis Modul</label>
                                    <select id="role" name="jenis" class="form-select mb-3" <?php if (!isset($jenis)) {
                                                                                                echo "disabled";
                                                                                            } ?>>
                                        <option <?php if ($jenis == '1') {
                                                    echo "selected";
                                                } ?> value="1" selected>Microsoft Word</option>
                                        <option <?php if ($jenis == '1') {
                                                    echo "selected";
                                                } ?> value="2">Microsoft Excel</option>
                                        <option <?php if ($jenis == '3') {
                                                    echo "selected";
                                                } ?> value="3">Microsoft Power Point</option>
                                        <option <?php if ($jenis == '4') {
                                                    echo "selected";
                                                } ?> value="4">Desain Grafis</option>
                                        <option <?php if ($jenis == '5') {
                                                    echo "selected";
                                                } ?> value="5">Jaringan Komputer</option>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <?php
                                    if (isset($_GET['ubah'])) { ?>
                                        <button type="submit" class="btn btn-primary" name="aksi" value="edit">Simpan Perubahan</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-primary" name="aksi" value="add">Tambahkan</button>
                                    <?php } ?>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="modul.php" type="button" class="btn btn-danger">Batal</a>
                                </div>
                            </form><!-- End Form Registration -->

                        </div>
                    </div>
                </div>

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
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- JS for datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- JavaScript for datatables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>