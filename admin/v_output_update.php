<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];

// update data
mysqli_query($koneksi,"update output set nama_output='$nama', kode_output='$kode' where output_id='$id'");

// mengalihkan halaman kembali ke halaman variabel
header("location:v_output.php");

?>