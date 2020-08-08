<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PENDETEKSI KECANDUAN BERMAIN GAME ONLINE MENGGUNAKAN FUZZY TSUKAMOTO BERBASIS WEB</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body style="background: #f0f0f0">

<form>
  <div class="form-group">
    <label >Example Range input</label>
    <input type="range" class="form-control-range" id="hasil">
    <div class="keluar">xx</div>
  </div>
</form>

<br/>
perhitungan dulu

<?php
$hitung =array(
	0.2,0.33,0.5,0,0.5,0,0.67,0,0.5,0.67
	);
echo max($hitung);

?>
<script>
	$(document).ready(function(){
	var kartu= "keluar";
	$("#hasil").change(function() {
 	  $('.keluar').hide();
	});
});

</script>
</body>	