<?php include 'header.php'; ?>

<div class="container">	
	<br/>

	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Makanan Baru</h4>
			</div>
			<div class="panel-body">
				

				<form method="post" action="makanan_aksi.php">


					<?php 
					include '../koneksi.php';
					?>

					<div class="form-group">
						<label>Usia Balita</label>
						<input type="text" class="form-control" name="usia" placeholder="Masukkan kisaran usia .. (Mis : 0 - 10 Bulan)" required="required">
					</div>

					<div class="form-group">
						<label>Jenis Makanan</label>
						<input type="text" class="form-control" name="makanan" placeholder="Masukkan makanan .. (Mis : ASI, Bubur, DLL)" required="required">
					</div>	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>