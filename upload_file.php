<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=belum_login");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_file = basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa jika file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Periksa ukuran file
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Perbolehkan jenis file tertentu
    $allowed_types = array("pdf", "doc", "docx", "txt");
    if (!in_array($fileType, $allowed_types)) {
        echo "Maaf, hanya file PDF, DOC, DOCX, & TXT yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk bernilai 0 karena ada kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak terunggah.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["file"]["name"])) . " telah berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unggah File</title>
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
        .upload-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        input[type="file"] {
            margin: 20px 0;
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
    <div class="upload-container">
        <h2>Unggah File</h2>
        <form method="post" action="upload_file.php" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <input type="submit" value="Unggah File">
        </form>
        <a href="tampil.php">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>
