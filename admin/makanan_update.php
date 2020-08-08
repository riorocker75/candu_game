<?php 

include '../koneksi.php';

$id = $_POST['id'];

$usia = $_POST['usia'];
$makanan = $_POST['makanan'];


mysqli_query($koneksi,"update makanan set makanan_umur='$usia', makanan='$makanan' where makanan_id='$id'");


header("location:makanan.php");

?>