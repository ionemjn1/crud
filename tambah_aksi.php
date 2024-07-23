<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$proli = $_POST['proli'];

mysqli_query($koneksi, "INSERT INTO tb_siswa (nama, nipd, kelas, proli) VALUES ('$nama', '$nipd', '$kelas', '$proli')");

header("location:tampil.php");
?>
