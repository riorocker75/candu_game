<?php 

include '../koneksi.php';

$kelompok = rand();

$usia = $_POST['usia'];
$makanan = $_POST['makanan'];

mysqli_query($koneksi,"insert into makanan values(null,'$usia','$makanan')");

header("location:makanan.php");

?>