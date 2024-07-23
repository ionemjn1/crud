<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #f2f2f2;
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 0;
			padding: 0;
		}
		h2 {
			color: #007bff;
			margin-top: 30px;
		}
		.container {
			background: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			width: 80%;
			max-width: 1000px;
			margin: 30px 0;
			text-align: center;
		}
		h4 {
			color: #555;
		}
		a {
			text-decoration: none;
			color: #007bff;
			margin: 10px;
		}
		a:hover {
			color: #0056b3;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		table, th, td {
			border: 1px solid #ddd;
		}
		th, td {
			padding: 12px;
			text-align: center;
		}
		th {
			background-color: #007bff;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tr:hover {
			background-color: #ddd;
		}
		.upload-links {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h2>DATA MAHASISWA UNIVERSITAS MUJAHIDIN</h2><br/>

	<?php
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:index.php?pesan=belum_login");
	}
	?>

	<div class="container">
		<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Anda telah berhasil login.</h4><br/>

		<a href="logout.php">LOGOUT</a><br/>
		<br/>
		<a href="tambah.php">+TAMBAH DATA MAHASISWA</a><br/>
		<br/>

		<div class="upload-links">
			<a href="upload_file.php">Unggah File</a>
			<a href="upload_image.php">Unggah Gambar</a>
		</div>

		<table>
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>NIPD</th>
				<th>Kelas</th>
				<th>Prodi</th>
				<th>Pilihan</th>
			</tr>

			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "select * from tb_siswa");
			while ($d = mysqli_fetch_array($data)) {
				?>

				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nipd']; ?></td>
					<td><?php echo $d['kelas']; ?></td>
					<td><?php echo $d['proli']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">HAPUS</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>
