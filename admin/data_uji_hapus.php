<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus variabel
mysqli_query($koneksi,"delete from uji where kode_user='$id'");

mysqli_query($koneksi,"delete from user where kode_user='$id'");


// alihkan halaman ke halaman variabel
header("location:data_uji.php");
?>