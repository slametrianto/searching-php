<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];
// var_dump($id);

//query data mahasiswa berdasarkan id ny
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs[0]["nama"]);

// var_dump($mhs["nama"]);


//cek apakah tombol submit sudah dicek atau blm
if (isset($_POST["submit"])) {
    // var_dump($_POST);


    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
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
    <title>EDIT Data Mahasiswa</title>
</head>

<body>

    <h1>Edit data mahasiswa</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <br>

            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <br>

            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?php echo $mhs["email"]; ?>">
            </li>
            <br>

            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
            </li>

            <br>

            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"]; ?>">
            </li>

            <br>

            <li>
                <button type="submit" name="submit">
                    Edit Data
                </button>
            </li>
        </ul>
    </form>
</body>

</html>