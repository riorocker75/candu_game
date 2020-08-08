<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit variabel linguistik</h4>
			</div>
			<div class="panel-body">

				<?php 
				include '../koneksi.php';
				$variabel = $_GET['variabel'];
				$linguistik = $_GET['linguistik'];

				$v = mysqli_query($koneksi,"select * from variabel where variabel_id='$variabel'");
				$vv = mysqli_fetch_assoc($v);

				$l = mysqli_query($koneksi,"select * from variabel_linguistik where vl_variabel='$variabel' and vl_id='$linguistik'");
				$ll = mysqli_fetch_assoc($l);
				
				?>

				<div class="form-group">
					<label>Nama Variabel</label>
					<br/>
					<?php echo $vv['variabel_kode']; ?> - <?php echo $vv['variabel_nama']; ?>
				</div>

				<hr>

				<form method="post" action="linguistik_update.php">
					<div class="form-group">
						<label>Nama Variabel Linguistik</label>
						<input type="hidden" name="variabel" value="<?php echo $vv['variabel_id']; ?>">
						<input type="hidden" name="linguistik" value="<?php echo $ll['vl_id']; ?>">
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama variabel linguistik .." required="required" autocomplete="off" value="<?php echo $ll['vl_nama']; ?>">
					</div>	

					<div class="form-group">
						<label>Nilai Batas Awal</label>
						<input type="number" class="form-control" name="awal" placeholder="Masukkan nilai batas awal .." required="required" value="<?php echo $ll['vl_batas_awal']; ?>">
					</div>	

					<div class="form-group">
						<label>Nilai Batas Akhir</label>
						<input type="number" class="form-control" name="akhir" placeholder="Masukkan nilai batas akhir .." required="required" value="<?php echo $ll['vl_batas_akhir']; ?>">
					</div>	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>