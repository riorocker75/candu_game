<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$kode_user= $_POST['kode'];

$data = mysqli_query($koneksi,"select * from user where kode_user='$kode_user' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
while($l = mysqli_fetch_array($data)){}
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if($cek > 0){
    $_SESSION['kode_user'] = $kode_user;
	$_SESSION['nama_user'] = $l['nama'];
	$_SESSION['status'] = "ulog";
	header("location:laman_hasil_uji.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>