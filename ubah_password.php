<!DOCTYPE html>
<html>
<head>
	<title>UBAH PASSWORD</title>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background-image: url(2uas.jpeg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			color: #333;
		}
		.container {
			background: rgba(255, 255, 255, 0.9);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			width: 80%;
			max-width: 400px;
			text-align: center;
		}
		h2 {
			margin-bottom: 20px;
			color: #007bff;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		input[type="password"] {
			padding: 15px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
		input[type="submit"] {
			padding: 15px;
			border: none;
			border-radius: 5px;
			background-color: #007bff;
			color: white;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
		.message {
			color: red;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>UBAH PASSWORD</h2>
		<?php
			if (isset($_GET['pesan'])) {
				if ($_GET['pesan'] == "berhasil") {
					echo "<div class='message' style='color:green;'>Password berhasil diubah!</div>";
				} else if ($_GET['pesan'] == "password_tidak_sesuai") {
					echo "<div class='message'>Konfirmasi password baru tidak sesuai!</div>";
				} else if ($_GET['pesan'] == "password_lama_salah") {
					echo "<div class='message'>Password lama salah!</div>";
				}
			}
		?>
		<form method="post" action="proses_ubah_password.php">
			<input type="password" name="password_lama" placeholder="Password Lama" required>
			<input type="password" name="password_baru" placeholder="Password Baru" required>
			<input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password Baru" required>
			<input type="submit" value="Ubah Password">
		</form>
	</div>
</body>
</html>
