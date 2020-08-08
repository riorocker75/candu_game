<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Buat variabel linguistik</h4>
			</div>
			<div class="panel-body">

				<?php 
				include '../koneksi.php';
				$variabel = $_GET['variabel'];
				$v = mysqli_query($koneksi,"select * from variabel where variabel_id='$variabel'");
				$vv = mysqli_fetch_assoc($v);
				
				?>

				<div class="form-group">
					<label>Nama Variabel</label>
					<br/>
					<?php echo $vv['variabel_kode']; ?> - <?php echo $vv['variabel_nama']; ?>
				</div>

				<hr>

				<form method="post" action="linguistik_aksi.php">
					<div class="form-group">
						<label>Nama Variabel Linguistik</label>
						<input type="hidden" name="variabel" value="<?php echo $vv['variabel_id']; ?>">
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama variabel linguistik .." required="required">
					</div>	

					<div class="form-group">
						<label>Nilai Batas Awal</label>
						<input type="number" class="form-control" name="awal" placeholder="Masukkan nilai batas awal .." required="required">
					</div>	

					<div class="form-group">
						<label>Nilai Batas Akhir</label>
						<input type="number" class="form-control" name="akhir" placeholder="Masukkan nilai batas akhir .." required="required">
					</div>	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>