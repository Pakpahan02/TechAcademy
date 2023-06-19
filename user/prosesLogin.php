<?php
require 'conn/conn.php';

session_start();

// Fungsi escape string untuk mencegah SQL Injection
function escapeString($conn, $string) {
  return mysqli_real_escape_string($conn, $string);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = escapeString($conn, $_POST['username']);
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if ($result) {
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);

      if (password_verify($password, $row["password"])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['login'] = $_POST['login_btn'];
        $_SESSION['role'] = $row['role'];
        header("Location: admin/index.php");
        exit();
      } else {
        $_SESSION['error'] = "Password yang dimasukkan salah.";
        echo "<script>
        alert('Password yang dimasukkan salah.');
        document.location.href = 'index.php';
        </script>";
        //header('Location: index.php');
        exit();
      }
    } else {
      $_SESSION['error'] = "Username tidak ditemukan.";
      echo "<script>
      alert('Username tidak ditemukan.');
      document.location.href = 'index.php';
      </script>";
      //header('Location: index.php');
      exit();
    }
  } else {
    $_SESSION['error'] = "Terjadi kesalahan dalam mengambil data pengguna.";
    echo "<script>
    alert('Terjadi kesalahan dalam mengambil data pengguna.');
    document.location.href = 'index.php';
    </script>";
    //header('Location: index.php');
    exit();
  }
} else {
  $_SESSION['error'] = "Metode permintaan tidak valid.";
  echo "<script>
  alert('Metode permintaan tidak valid.');
  document.location.href = 'index.php';
  </script>";
  //header('Location: index.php');
  exit();
}
?>
