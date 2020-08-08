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


				<form method="post" action="v_output_aksi.php">
					<div class="form-group">
						<label>Kode</label>
						<input type="text" class="form-control" name="kode" placeholder="Masukkan kode Output .." required="required">
					</div>	

					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama Output .." required="required">
					</div>
	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>