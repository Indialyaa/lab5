<?php
include "form.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form =new Form("","input Form");
$form->addField("txtnim","NIM");
$form->addField("txtnama","Nama");
$form->addField("txtalamat","Alamat");
echo"<h3>Silahkan isi Form berikut ini:</h3>";
$form->displayForm();
echo"</body></html>";
?>