
<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PENDETEKSI KECANDUAN BERMAIN GAME ONLINE MENGGUNAKAN FUZZY TSUKAMOTO BERBASIS WEB</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">

	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/custom.js"></script>

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

					<li><a data-toggle="modal" data-target="#analisa"><i class="glyphicon glyphicon-retweet"></i> &nbsp; Laman Hasil Uji</a></li>
				</ul>		

			</div>
		</div>
	</nav>
	<!-- akhir menu navigasi -->

	<!-- modal cek user -->

<!-- Modal -->
<div class="modal fade" id="analisa" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Lihat Detail Analisis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="cek_user.php" method="post">
		<div class="modal-body">
			<div class="form-group">
			  <label for="">Kode Unik</label>
			  <input type="text"
				class="form-control" name="kode" required>
			</div>
			
			<button class="btn btn-md btn-primary ">Lihat Selengkapnya</button>
		</div>
		
				
	  </form>
    </div>
  </div>
</div>

	<!-- end modal -->