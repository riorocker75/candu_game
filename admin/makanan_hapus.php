<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus makanan
mysqli_query($koneksi,"delete from makanan where makanan_id='$id'");

// alihkan halaman ke halaman makanan
header("location:makanan.php");
?>