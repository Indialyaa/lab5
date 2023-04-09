<?php 
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = 'INSERT INTO data_siswa (nim, nama, alamat) ';
    $sql .= "VALUE ('{$nim}', '{$nama}','{$alamat}')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Siswa</h1>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <div class="input">
                <label>NIM</label>
                <input type="text" name="nim">
            </div>
            <div class="input">
                <label >Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="input">
                <label >Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="simpan">
            </div>
        </form>
    </div>
</body>
</html>