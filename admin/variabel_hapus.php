<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus variabel
mysqli_query($koneksi,"delete from variabel where variabel_id='$id'");

mysqli_query($koneksi,"delete from variabel_linguistik where vl_variabel='$id'");



$rule = mysqli_query($koneksi,"select * from rule where rule_variabel='$id'");
while($r = mysqli_fetch_array($rule)){
	$k = $r['rule_kelompok'];
	mysqli_query($koneksi,"delete from rule where rule_kelompok='$k'");
}


// alihkan halaman ke halaman variabel
header("location:variabel.php");
?>