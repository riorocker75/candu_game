<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PENDETEKSI KECANDUAN BERMAIN GAME ONLINE MENGGUNAKAN FUZZY TSUKAMOTO BERBASIS WEB</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/datatables/datatable.css">

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>

	

</head>
<body style="background: #f0f0f0">
	

	<!-- menu navigasi -->
	<nav class="navbar navbar-default" style="border-radius: 0px">
		<div class="container-fluid">			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Candu Game</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> &nbsp; DASHBOARD</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th-large"></i> &nbsp; MASTER DATA <span class="caret"></span></a>
						<ul class="dropdown-menu">							
							<li><a href="variabel.php"><i class="glyphicon glyphicon-folder-open"></i> &nbsp; Variabel</a></li>
							<li><a href="v_output.php"><i class="glyphicon glyphicon-folder-open"></i> &nbsp; Output </a></li>

							<li><a href="rule.php"><i class="glyphicon glyphicon-folder-open"></i> &nbsp; Rule / Konsekuen</a></li>
						</ul>
					</li>
					<!-- <li><a href="hitung.php"><i class="glyphicon glyphicon-retweet"></i> &nbsp; HITUNG</a></li> -->
					<li><a href="data_uji.php"><i class="glyphicon glyphicon-bookmark"></i> &nbsp; DATA UJI</a></li>

					<li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> &nbsp; GANTI PASSWORD</a></li>
					<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> &nbsp; LOG OUT</a></li>
				</ul>				
				<ul class="nav navbar-nav navbar-right">
					<li><p class="navbar-text">Halo, <b><?php echo $_SESSION['username']; ?></b> !</p></li>					
				</ul>
			</div>
		</div>
	</nav>
	<!-- akhir menu navigasi -->