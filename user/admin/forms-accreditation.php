<?php 
session_start();
require 'security.php';

$role = $_SESSION['role'];
$username = $_SESSION['username'];
require '../conn/conn.php';
$id_akre = '';
$nama = '';
$akreditasi = '';
$min = '';
$max = '';
$kategori = '';
$kode = '';

if (isset($_GET['ubah'])) {
  $id_akre = $_GET['ubah'];

  $query = "SELECT * from akreditasi WHERE id = '$id_akre';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql); 

  $nama = $result['nama'];
  $akreditasi = $result['akreditasi'];
  $kategori = $result['kategori'];
  $min = $result['min'];
  $max = $result['max'];
  $kode = $result['kode'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Accreditation - LPM Admin Web</title>
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
  <?php include('sidebar.php'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Accreditation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Accreditation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Accreditation</h5>

              <!-- Form Accreditation -->
              <form action="prosesAkre.php" method="POST" enctype="multipart/form-data" class="row g-3">
                <input type="hidden" value="<?php echo $id_file ?>" name="id_akre">
                <div class="col-md-12">
                  <label for="file" class="form-label">Upload File</label>
                  <input class="form-control" type="file" id="file" name="file" <?php if (!isset($_GET['ubah'])) {echo "required";} ?>>
                </div>
                <div class="col-md-12">
                  <label for="nama" class="form-label">File Name</label>
                  <input type="text" required class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Masukan nama file">
                </div>
                <div class="col-md-10">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" required class="form-control" id="kode" name="kode" value="<?php echo $kode; ?>" placeholder="Max 6 karakter">
                </div>
                <div class="col-md-2">
                  <label for="akreditasi" class="form-label">Akreditasi</label>
                  <select id="akreditasi" name="akreditasi" class="form-select">
                    <option <?php if($akreditasi == 'A'){echo "selected";} ?> value="A" selected>A</option>
                    <option <?php if($akreditasi == 'B'){echo "selected";} ?> value="B">B</option>
                    <option <?php if($akreditasi == 'C'){echo "selected";} ?> value="C">C</option>
                    <option <?php if($akreditasi == 'D'){echo "selected";} ?> value="D">D</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="kategori" class="form-label">Category</label>
                  <select id="kategori" name="kategori" class="form-select">
                    <option <?php if($kategori == '1'){echo "selected";} ?> value="1" selected>Perguruan Tinggi</option>
                    <option <?php if($kategori == '2'){echo "selected";} ?> value="2">Program Magister</option>
                    <option <?php if($kategori == '3'){echo "selected";} ?> value="3">Program Sarjana</option>
                    <option <?php if($kategori == '4'){echo "selected";} ?> value="4">Program D4 dan D3</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="min" class="form-label">Awal Masa Berlaku</label>
                  <input type="text" required class="form-control" id="min" name="min" value="<?php echo $min; ?>">
                </div>
                <div class="col-md-6">
                  <label for="max" class="form-label">Akhir Masa Berlaku</label>
                  <input type="text" required class="form-control" id="max" name="max" value="<?php echo $max; ?>">
                </div>
                
                <div class="text-center">
                    <?php  
                      if (isset($_GET['ubah'])) {
                    ?>
                    <button type="submit" class="btn btn-primary" name="aksi" value="edit">
                          <i class="fa fa-floppy-o"></i>
                        Simpan Perubahan
                    </button>
                    <?php
                      } else {
                    ?>
                    <button type="submit" class="btn btn-primary" name="aksi" value="add">
                          <i class="fa fa-floppy-o"></i>
                        Tambahkan
                    </button>
                    <?php 
                      }
                    ?>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="documents-accreditation.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply"></i>Batal</a>
                </div>
              </form><!-- End Form Accreditation -->

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
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>