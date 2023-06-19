<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'user/conn/conn.php';
if (isset($_POST['submit'])) {
  $username = stripcslashes($_POST['username']);
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $role = $_POST['role'];

  $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  $cek_login = mysqli_num_rows($cek_user);

  if ($cek_login > 0) {
    echo "<script>
    alert('Username sudah terdaftar');
    document.location.href = 'index.php';
    </script>";
  } else {
    if ( $password !== $password2 ) {
    echo "<script>
          alert('Konfirmasi password tidak sesuai!');
          document.location.href = 'index.php';
          </script>";
    } else {
      $password = password_hash($password, PASSWORD_DEFAULT);
      mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$email','$password','$role')");
      echo "<script>
            alert('Akun berhasil ditambahkan!');
            document.location.href = 'index.php';
      </script>";
    }
  }
} 


// ini fungsi untuk menghapus user
// if ($_GET['hapus']) {
// 	$id_user = $_GET['hapus'];

// 	$query = "DELETE FROM user WHERE id = '$id_user';";
// 	$sql = mysqli_query($conn, $query);
//     echo "<script>
//     		alert(Akun berhasil dihapus!);
//     	  </script>";
//      header("location: ../../index.html");
// }
?>