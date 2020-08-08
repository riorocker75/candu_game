<?php include 'header.php'; ?>

<div class="container">	
	<br/>

	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Makanan</h4>
			</div>
			<div class="panel-body">
				
				<?php 
				include '../koneksi.php';
				$id = $_GET['id'];
				$data = mysqli_query($koneksi,"select * from makanan where makanan_id='$id'");
				while($d = mysqli_fetch_array($data)){
					?>
					<form method="post" action="makanan_update.php">

						<?php 
						include '../koneksi.php';
						?>

						<div class="form-group">
							<label>Usia Balita</label>
							<input type="hidden" name="id" value="<?php echo $d['makanan_id']; ?>">
							<input type="text" class="form-control" name="usia" placeholder="Masukkan kisaran usia .. (Mis : 0 - 10 Bulan)" required="required" value="<?php echo $d['makanan_umur']; ?>">
						</div>

						<div class="form-group">
							<label>Jenis Makanan</label>
							<input type="text" class="form-control" name="makanan" placeholder="Masukkan makanan .. (Mis : ASI, Bubur, DLL)" required="required" value="<?php echo $d['makanan']; ?>">
						</div>	

						<br/>

						<input type="submit" class="btn btn-primary" value="Simpan">	
					</form>
					<?php 
				}
				?>

			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>