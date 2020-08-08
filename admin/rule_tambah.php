<?php include 'header.php'; ?>

<div class="container">	
	<br/>

	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Rule Baru</h4>
			</div>
			<div class="panel-body">
				
				<label>IF</label>

				<form method="post" action="rule_aksi.php">


					<?php 
					include '../koneksi.php';
					$variabel = mysqli_query($koneksi,"select * from variabel");
					while($v = mysqli_fetch_array($variabel)){
						?>

						<div class="form-group">
							<label><?php echo $v['variabel_nama']; ?></label>

							<input type="hidden" name="variabel[]" value="<?php echo $v['variabel_id'] ?>">

							<select class="form-control" name="linguistik[]" required="required">
								<option value="">- Pilih</option>
								<?php 
								$id = $v['variabel_id'];
								$linguistik = mysqli_query($koneksi,"select * from variabel_linguistik where vl_variabel='$id'");
								while($l = mysqli_fetch_array($linguistik)){
									?>

									<option value="<?php echo $l['vl_id']; ?>"><?php echo $l['vl_nama'] ?></option>

									<?php 
								}
								?>
							</select>
						</div>

						<?php 
					}
					?>

					<label>THEN</label>
					<?php	
						$output = mysqli_query($koneksi,"select * from output");
						while($op = mysqli_fetch_array($output)){
					?>
					<div class="form-group">
					
						<input type="hidden" name="output_variabel" value="<?php echo $op['output_id'] ?>">

						<label><?php echo $op['nama_output']?></label>
							<select class="form-control" name="output_lingu" required="required">
								<option value="">- Pilih</option>
								<?php 
								$ids = $op['output_id'];
								$output_lingu = mysqli_query($koneksi,"select * from output_linguistik where ol_output_id='$ids'");
								while($olg = mysqli_fetch_array($output_lingu)){
									?>

									<option value="<?php echo $olg['ol_id']; ?>"><?php echo $olg['ol_nama'] ?></option>

								<?php } ?>
							</select>
					</div>	
				    <?php } ?>
					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>