<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PERHITUNGAN KECUKUPAN KALORI HARIAN BALITA MENGGUNAKAN  METODE FUZZY TSK(TAKAGI-SUGENO-KANG) BERBASIS WEB</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>
	<br/>
	<br/>
	<br/>

	<center>
		<h3 style="text-transform: uppercase">APLIKASI PERHITUNGAN <br/> Pendeteksi Kecanduan Bermain Game Online  <br/> MENGGUNAKAN  <b>Fuzzy Tsukamoto </b> <br/> BERBASIS WEB</h3>
	</center>

	<br/>
	<br/>
	
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
				}
			}
			?>			
			
			<form action="login.php" method="post">
				<div class="panel">
					<br/>
					<div class="panel-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>	

						<input type="submit" class="btn btn-primary btn-block" value="LOG IN">				
					</div>
					<br/>
				</div>
			</form>

		</div>
	</div>
</body>
</html>