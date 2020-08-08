<?php 

include '../koneksi.php';

$linguistik = $_GET['linguistik'];

mysqli_query($koneksi,"delete from variabel_linguistik where vl_id='$linguistik'");


$rule = mysqli_query($koneksi,"select * from rule where rule_linguistik='$linguistik'");
while($r = mysqli_fetch_array($rule)){
	$k = $r['rule_kelompok'];
	mysqli_query($koneksi,"delete from rule where rule_kelompok='$k'");
}

header("location:variabel.php");
?>