<?php include 'header.php'; ?>

<div class="container">	
	<br/>

	<div class="col-md-6 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Rule</h4>
			</div>
			<div class="panel-body">
				
				<label>IF</label>

				<?php 
				include '../koneksi.php';
				$kelompok = $_GET['kelompok'];
				$data = mysqli_query($koneksi,"select * from rule where rule_kelompok='$kelompok' limit 1");
				while($d = mysqli_fetch_array($data)){
					?>

					<form method="post" action="rule_update.php">

						<input type="hidden" name="kelompok" value="<?php echo $kelompok ?>">

						<?php 
						include '../koneksi.php';
						$variabel = mysqli_query($koneksi,"select * from variabel,rule where variabel_id=rule_variabel and rule_kelompok='$kelompok'");
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

										<option <?php if($v['rule_linguistik'] == $l['vl_id']){echo "selected='selected'";} ?> value="<?php echo $l['vl_id']; ?>"><?php echo $l['vl_nama'] ?></option>

										<?php 
									}
									?>
								</select>
							</div>

							<?php 
						}
						?>

						<label>THEN</label>

						<div class="form-group">
							<label>Nilai Hasil</label><?php echo $v['rule_nilai']; ?>
							<input type="number" class="form-control" name="nilai" placeholder="Masukkan Nilai Hasil .." required="required" value="<?php echo $d['rule_nilai']; ?>">
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