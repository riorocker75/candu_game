<?php 

include '../koneksi.php';

$kelompok = rand();

$variabel = $_POST['variabel'];
$linguistik = $_POST['linguistik'];

$output_variabel= $_POST['output_variabel'];
$output_lingu = $_POST['output_lingu'];

for($a=0;$a<count($variabel);$a++){
	$v = $variabel[$a];
	$l = $linguistik[$a];

	// $ov=$output_variabel[$a];
	// $ovl=$output_lingu[$a];

	mysqli_query($koneksi,"insert into rule values(null,'$kelompok','$v','$l','$output_variabel','$output_lingu')");

}


header("location:rule.php");

?>