<?php 

include '../koneksi.php';

$kelompok = $_GET['kelompok'];

mysqli_query($koneksi,"delete from rule where rule_kelompok='$kelompok'");

header("location:rule.php");
?>