<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$variabel = $_POST['variabel'];
$linguistik = $_POST['linguistik'];
$nama = $_POST['nama'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];

// input data ke tabel variabel linguistik

mysqli_query($koneksi,"update variabel_linguistik set vl_nama='$nama', vl_batas_awal='$awal', vl_batas_akhir='$akhir' where vl_variabel='$variabel' and vl_id='$linguistik'");


header("location:variabel.php");

?>