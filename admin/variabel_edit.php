<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit variabel</h4>
			</div>
			<div class="panel-body">

				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';

				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

				// megambil data variabel yang ber id di atas dari tabel variabel
				$data = mysqli_query($koneksi,"select * from variabel where variabel_id='$id'");
				while($d=mysqli_fetch_array($data)){
					?>

					<form method="post" action="variabel_update.php">

						<div class="form-group">
							<label>Kode</label>
							<input type="text" class="form-control" name="kode" required="required" placeholder="Masukkan kode variabel .." value="<?php echo $d['variabel_kode']; ?>">
						</div>

						<div class="form-group">
							<label>Nama</label>
							<!-- form id variabel yang di edit, untuk di kirim ke file aksi -->
							<input type="hidden" name="id" value="<?php echo $d['variabel_id']; ?>">
							
							<input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan nama variabel .." value="<?php echo $d['variabel_nama']; ?>">
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