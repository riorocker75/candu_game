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

mysqli_query($koneksi,"update output_linguistik set ol_nama='$nama', ol_batas_awal='$awal', ol_batas_akhir='$akhir' where ol_output_id='$variabel' and ol_id='$linguistik'");


header("location:v_output.php");

?>