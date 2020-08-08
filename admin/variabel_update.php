<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$satuan = $_POST['satuan'];

// update data
mysqli_query($koneksi,"update variabel set variabel_nama='$nama', variabel_kode='$kode', variabel_satuan='$satuan' where variabel_id='$id'");

// mengalihkan halaman kembali ke halaman variabel
header("location:variabel.php");

?>