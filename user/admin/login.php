<?php
session_start();
include_once('conn/conn.php');
// Cek Username & Password
if ( isset($_POST["submit"]) ) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $_SESSION['login'] = $_POST['submit'];

  $result = mysqli_query($conn, "SELECT * FROM siswa WHERE nama = '$username'");
  // Username : Edward Pakpahan Password : 1234567890
  // Cek Username 
  if ( mysqli_num_rows($result) === 1 ) {
    // Cek Password
    $row = mysqli_fetch_assoc($result);
    if ( $password = $row["password"] ) {
      $_SESSION['username'] = $row['username'];
      $_SESSOIN['kelas'] = $row['kelas'];
      header("Location: index.php");
      exit;
    } else {
      echo "<script>
          alert('Password anda salah');
          document.location.href = 'login.php';
          </script>";
    }
  } else {
    echo "<script>
         alert('Username anda salah');
          document.location.href = 'login.php';
          </script>";
  }
}

// Warning: Undefined array key "kelas" in C:\xampp\htdocs\seminar\seminar2023\index.php on line 3

// Warning: Undefined array key "username" in C:\xampp\htdocs\seminar\seminar2023\index.php on line 4

// Warning: Undefined array key "username" in C:\xampp\htdocs\seminar\seminar2023\index.php on line 4
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Siswa</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div class="center">
    <div class="header">LOGIN SISWA</div>
    <form action="" method="POST">
      <input type="username" class="form-control" name="username" id="username" placeholder="Username">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">


      <button class="login" type="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>