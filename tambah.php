<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        a {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Data Mahasiswa</h2>
		<?php
        include 'koneksi.php';
		?>

        <form method="post" action="tambah_aksi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
            <label for="nipd">NIPD:</label>
            <input type="number" id="nipd" name="nipd" placeholder="Masukkan NIPD" required>
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas" required>
            <label for="proli">Prodi:</label>
            <input type="text" id="proli" name="proli" placeholder="Masukkan Proli" required>
            <input type="submit" value="Tambah Mahasiswa">
        </form>
        <a href="tampil.php">Kembali ke Data Mahasiswa</a>
		
    </div>
</body>
</html>
