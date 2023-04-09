<?php
$host="localhost";
$user="root";
$pass="";
$db="siswa";

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn==false){
    echo "Connection Gagal";
    die();
}else{
    // echo "Connection Berhasil";
}
?>