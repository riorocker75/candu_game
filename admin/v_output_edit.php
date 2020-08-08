<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Output Baru</h4>
			</div>
			<div class="panel-body">
				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';

				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

				// megambil data variabel yang ber id di atas dari tabel variabel
				$data = mysqli_query($koneksi,"select * from output where output_id='$id'");
				while($d=mysqli_fetch_array($data)){
					?>

				<form method="post" action="v_output_update.php">
					<div class="form-group">
						<label>Kode</label>
						<input type="text" class="form-control" name="kode" placeholder="Masukkan kode Output .." value="<?php echo $d['kode_output']; ?>" required="required">
					</div>	
					<input type="hidden" name="id" value="<?php echo $d['output_id']; ?>">

					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama Output .." value="<?php echo $d['nama_output']; ?>" required="required">
					</div>
	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>
			<?php } ?>

			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>