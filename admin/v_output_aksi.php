<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$kode = $_POST['kode'];


// input data ke tabel variabel
mysqli_query($koneksi,"insert into output values(null,'$nama','$kode')");

header("location:v_output.php");

?>