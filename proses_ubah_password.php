<?php
	session_start();
	include 'koneksi.php';

	$username = $_SESSION['username'];
	$password_lama = $_POST['password_lama'];
	$password_baru = $_POST['password_baru'];
	$konfirmasi_password = $_POST['konfirmasi_password'];

	// Cek password lama
	$data = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username' AND password='$password_lama'");
	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		if ($password_baru == $konfirmasi_password) {
			// Update password
			mysqli_query($koneksi, "UPDATE tb_login SET password='$password_baru' WHERE username='$username'");
			header("location:ubah_password.php?pesan=berhasil");
		} else {
			header("location:ubah_password.php?pesan=password_tidak_sesuai");
		}
	} else {
		header("location:ubah_password.php?pesan=password_lama_salah");
	}
?>
