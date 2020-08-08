<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$satuan = $_POST['satuan'];

// input data ke tabel variabel
mysqli_query($koneksi,"insert into variabel values(null,'$kode','$nama','$satuan')");

header("location:variabel.php");

?>