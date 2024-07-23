<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$proli = $_POST['proli'];

mysqli_query($koneksi, "UPDATE tb_siswa SET nama='$nama', nipd='$nipd', kelas='$kelas', proli='$proli' WHERE id='$id'");

header("location:tampil.php");
?>
