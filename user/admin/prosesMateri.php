<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require '../conn/conn.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $judul = $_POST['judul'];
        $course = $_POST['course'];
        $jenis = $_POST['jenis'];

        $namaFile = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $tmpFile = $_FILES['gambar']['tmp_name'];

        // echo $namaFile;
        // echo $fileSize;
        // echo $tmpFile;
        // die();

        $temp = explode(".", $_FILES["gambar"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);

        $target_dir = "imgModul/";
        $target_file = $target_dir . $newfilename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $jenisFile = array('jpg', 'jpeg', 'png');
        $ekstensi = strtolower(end($temp));
        $ukuran = $_FILES['gambar']['size'];
        if (in_array($ekstensi, $jenisFile)) {

            if ($ukuran <= 3000000) {

                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], "imgModul/" . $newfilename)) {
                    $query2 = "INSERT INTO materi (gambar, judul, course, jenis) value ('$newfilename' ,'$judul', '$course', '$jenis')";
                    $sql = mysqli_query($conn, $query2);

                    if ($sql) {
                        echo "<script>
						  alert('Materi berhasil ditambahkan!');
                          document.location.href = 'modul.php';
							</script>";
                    } else {
                        echo "<script>
						  alert('Materi gagal ditambahkan!');
                          document.location.href = 'forms-materi.php';
							  </script>";
                    }
                }
            } else {
                echo "<script>
						  alert('Ukuran gambar maksimal 3 mb!');
                          document.location.href = 'forms-materi.php';
							  </script>";
            }
        } else {
            echo "<script>
					alert('File gambar harus berupa jpg, jpeg, atau png!');
                    document.location.href = 'forms-materi.php';
					</script>";
        }
    } elseif ($_POST['aksi'] == "edit") {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $course = $_POST['course'];
        $jenis = $_POST['jenis'];


        $queryShow = "SELECT * FROM materi WHERE id = '$id';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($_FILES['gambar']['name'] == "") {
            $newfilename = $result['gambar'];
            //echo "kosong";
        } else {
            //echo "ada file";
            $gambar = $_FILES['gambar']['name'];
            unlink("imgModul/" . $result['gambar']);

            $temp = explode(".", $_FILES["gambar"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);

            move_uploaded_file($_FILES['gambar']['tmp_name'], "imgModul/" . $newfilename);
        }
        // var_dump($_FILES['gambar']['name']);
        // die();
        $query = "UPDATE materi SET gambar='$newfilename', judul='$judul', course='$course', jenis='$jenis' WHERE id ='$id';";
        $sql = mysqli_query($conn, $query);
        echo "<script>
    alert('Materi berhasil diedit!');
    document.location.href = 'modul.php';
    </script>";
    }
}

//ini fungsi untuk meghapus berita
if ($_GET['hapus']) {
    $id = $_GET['hapus'];

    $queryShow = "SELECT * FROM materi WHERE id = '$id';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("imgModul/" . $result['gambar']);

    $query = "DELETE FROM materi WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<script>
          document.location.href = 'modul.php';
		  </script>";
    } else {
        echo $query;
    }
}
