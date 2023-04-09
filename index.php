<?php
include("koneksi.php");
$sql='SELECT * from data_siswa';
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <div>
        <h1>Data Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>NIM</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
            </tr>
            <?php if ($result) :?>
                <?php while ($row=mysqli_fetch_array($result)) :?>
                    <tr>
                        <td><?= $row['nim'];?></td>
                        <td><?= $row['nama'];?></td>
                        <td><?= $row['alamat'];?></td>
                    </tr>
                <?php endwhile; else:?>
                    <tr>
                        <td>Belum ada data!</td>
                    </tr>
                <?php endif;?>
        </table>
        <a href="tambah_siswa.php">Tambah Data Mahasiswa</a>
    </div>
<?php require("../lab4_php_modular/footer.php");?>
</body>
</html>