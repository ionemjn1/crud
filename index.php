<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background-image: url(uas.jpeg);
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
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			text-align: center;
			max-width: 400px;
			width: 100%;
			transition: all 0.3s ease-in-out;
		}
		.container:hover {
			transform: translateY(-5px);
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
		}
		h2 {
			margin-bottom: 20px;
			color: #007bff;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		input[type="text"], input[type="password"] {
			padding: 15px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			transition: all 0.3s ease-in-out;
		}
		input[type="text"]:focus, input[type="password"]:focus {
			border-color: #007bff;
			box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
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
		@media (max-width: 600px) {
			.container {
				padding: 20px;
			}
			h2 {
				font-size: 24px;
			}
			input[type="text"], input[type="password"] {
				padding: 10px;
				font-size: 14px;
			}
			input[type="submit"] {
				padding: 10px;
				font-size: 14px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Selamat Datang di SMK Asgardian Utara</h2>
		<?php 
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<div class='message'>Login gagal! username dan password salah!</div>";
			}else if ($_GET['pesan'] == "logout") {
				echo "<div class='message'>Anda telah berhasil logout</div>";
			}else if ($_GET['pesan'] == "belum_login") {
				echo "<div class='message'>Anda harus login untuk bisa mengakses halaman admin</div>";
			}
		}
		?>
		<form method="post" action="login.php">
			<input type="text" name="username" placeholder="Masukkan Username">
			<input type="password" name="password" placeholder="Masukkan Password">
			<input type="submit" value="LOGIN">
		</form>
	</div>
</body>
</html>
