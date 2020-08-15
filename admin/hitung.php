<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading text-center">
			<h3>Hasil Hitung Kecanduan Bermain Game Online Fuzzy TSUKAMOTO</h3>
		</div>
		<div class="panel-body">

			<br/>
			<div class="row">
				<div class="col-lg-offset-2 col-lg-8">
					<form method="post" action="hitung_hasil.php">

						<?php 
						include '../koneksi.php';
						$variabel = mysqli_query($koneksi,"select * from variabel");
						while($v = mysqli_fetch_array($variabel)){

							$id_variabel = $v['variabel_id'];
							$data = mysqli_query($koneksi,"select min(vl_batas_awal) as batas_awal,max(vl_batas_akhir) as batas_akhir from variabel_linguistik where vl_variabel='$id_variabel'");
							$d = mysqli_fetch_array($data);

							?>
							<div class="form-group row">
								<label class="col-lg-12"><?php echo $v['variabel_nama']; ?></label>
								<div class="form-group col-lg-4">
									<input type="hidden" class="form-control" name="variabel[]" value="<?php echo $v['variabel_id']; ?>">
									<input type="hidden" class="form-control" name="nama_variabel[]" value="<?php echo $v['variabel_nama']; ?>">
									<input type="number" class="form-control" name="nilai[]" placeholder="Masukkan nilai .." required="required" min="<?php echo $d['batas_awal'] ?>" max="<?php echo $d['batas_akhir']; ?>">
								</div>
								<div class="col-lg-6">
									

									<span style="color: blue">
										[
										<?php 
										echo $d['batas_awal'];
										echo " - ";
										echo $d['batas_akhir'];
										?>
										]
									</span>
									
								</div>
							</div>	
							<?php 
						}
						?>

						
						<br/>

						<input type="submit" class="btn btn-primary" value="Hitung">	
					</form>
				</div>
			</div>

			<br/>
			<br/>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>