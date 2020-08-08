<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$variabel = $_POST['variabel'];
$nama = $_POST['nama'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];

// input data ke tabel variabel linguistik
mysqli_query($koneksi,"insert into output_linguistik values(null,'$variabel','$nama','$awal','$akhir')");

header("location:v_output.php");

?>