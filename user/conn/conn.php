<?php
date_default_timezone_set('Asia/Jakarta');

$host = "localhost";
$username = "root";
$password = "";
$database = "techacademy";

$conn = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
