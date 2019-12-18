<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    // var_dump($_POST);

    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href='index.php';
        </script>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <br>

            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>

            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <br>

            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>

            <br>

            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>

            <br>

            <li>
                <button type="submit" name="submit">
                    Tambah Data
                </button>
            </li>

        </ul>

    </form>


</body>

</html>