<?php
include_once 'koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM input WHERE nim = '{$nim}'";
$result = mysqli_query($conn, $sql);
header('location: home.php');
