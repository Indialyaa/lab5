<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = 'UPDATE input SET ';
    $sql .= "nama = '{$nama}', alamat = '{$alamat}', ";
    $sql .= "WHERE nim = '{$nim}'";
    $result = mysqli_query($conn, $sql);

    header('location: home.php');
}

$sql = "SELECT * FROM input WHERE nim = '{$nim}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);
function is_select($var, $val)
{
    if ($var == $val) return 'selected="selected"';
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <h1>Ubah Data</h1>
            <form method="post" action="ubah.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama</label>
                    <input type="text" name="nama" />
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="alamat" />
                </div>
                <br>
                <div class="submit">
                    <input type="submit" name="submit" value="Simpan" />
                </div>
            </form>
        </div>
    </div>