<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
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
        <h2>Edit Data Mahasiswa</h2>
        <?php
        include 'koneksi.php';

        // Pastikan id disanitasi dengan benar
        $id = mysqli_real_escape_string($koneksi, $_GET['id']);

        // Ambil data mahasiswa dari database
        $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id='$id'");

        if ($data && mysqli_num_rows($data) > 0) {
            $d = mysqli_fetch_array($data);
        ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($d['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($d['nama'], ENT_QUOTES, 'UTF-8'); ?>" required>
                <label for="nipd">NIPD:</label>
                <input type="number" id="nipd" name="nipd" value="<?php echo htmlspecialchars($d['nipd'], ENT_QUOTES, 'UTF-8'); ?>" required>
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" value="<?php echo htmlspecialchars($d['kelas'], ENT_QUOTES, 'UTF-8'); ?>" required>
                <label for="proli">Prodi:</label>
                <input type="text" id="proli" name="proli" value="<?php echo htmlspecialchars($d['proli'], ENT_QUOTES, 'UTF-8'); ?>" required>
                <input type="submit" value="Update">
            </form>
            <a href="tampil.php">Kembali ke Data Mahasiswa</a>
        <?php
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
        ?>
    </div>
</body>
</html>
