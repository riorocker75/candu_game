<?php include 'header.php'; ?>

<?php 
// koneksi database
include '../koneksi.php'; 
?>

<div class="container">
	<div class="alert alert-info text-center">
		<br/>
		<br/>
		<h4 style="margin-bottom: 0px;text-transform: uppercase;"><b>Selamat datang!</b><br/> di <br/><br/>APLIKASI PERHITUNGAN Pendeteksi Kecanduan Bermain Game Online MENGGUNAKAN  <b>Fuzzy Tsukamoto </b> <br/> BERBASIS WEB.</h4>			
		<br/>
		<br/>
	</div>

	<div class="panel">
		<div class="panel-heading">
			<h4>Dashboard</h4>
		</div>
		<div class="panel-body">
			
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-folder-close"></i> 
								<span class="pull-right">
									
									<?php 
									$variabel = mysqli_query($koneksi,"select * from variabel");
									echo mysqli_num_rows($variabel);
									?>
								</span>
							</h1>
							Jumlah Variabel
						</div>						
					</div>				
				</div>		

				<div class="col-md-4">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-retweet"></i> 
								<span class="pull-right">
									<?php 
									$variabel_linguistik = mysqli_query($koneksi,"select * from variabel_linguistik");
									echo mysqli_num_rows($variabel_linguistik);
									?>
								</span>
							</h1>
							Jumlah Variabel Linguistik
						</div>						
					</div>				
				</div>		

				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-list"></i> 
								<span class="pull-right">
									<?php 
									$rule = mysqli_query($koneksi,"select distinct rule_kelompok from rule");
									echo mysqli_num_rows($rule);
									?>
								</span>
							</h1>
							Jumlah Rule
						</div>						
					</div>				
				</div>				

			</div>		

		</div>
	</div>

</div>

<?php include 'footer.php'; ?>