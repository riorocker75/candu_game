<?php 

include '../koneksi.php';

$kelompok = $_POST['kelompok'];

$variabel = $_POST['variabel'];
$linguistik = $_POST['linguistik'];

$nilai = $_POST['nilai'];

$a = 0;
$x = mysqli_query($koneksi,"select * from rule where rule_kelompok='$kelompok'");
while($xx = mysqli_fetch_array($x)){


	$id_rule = $xx['rule_id'];

	$v = $variabel[$a];
	$l = $linguistik[$a];

	mysqli_query($koneksi,"update rule set rule_variabel='$v', rule_linguistik='$l', rule_nilai='$nilai' where rule_id='$id_rule'");
	

	$a++;
}


header("location:rule.php");

?>