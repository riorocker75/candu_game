<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
    <?php 
	 session_start();
        include '../koneksi.php';
        $kode_user=$_SESSION['kode_user'];
        $data_user=mysqli_query($koneksi,"select * from user where kode_user='$kode_user'");
		$dus=mysqli_fetch_array($data_user);
     ?>   
		<div class="panel-heading text-center">
            <div class="alert alert-info">
                    <center>
                        <h3 style="margin: 10px">
                        Hasil Hitung Kecanduan Bermain Game Online Anda Adalah <b><?php echo $dus['hasil']; ?> </b>
                        </h3>
                </center>
            </div>
		</div>
		<div class="panel-body">

			<br/>
			<div class="row">

            <div class="col-lg-offset-2 col-lg-8">

            <table class="table table-bordered">
                <?php
         
                    $uji = mysqli_query($koneksi,"select * from uji where kode_user='$kode_user'");
                   
                    while($dv = mysqli_fetch_array($uji)){
                        $variabel_id=$dv['variabel_id'];
                        $data_vr = mysqli_query($koneksi,"select * from variabel where variabel_id='$variabel_id'");
                        $dvr = mysqli_fetch_array($data_vr);
                        
                ?>
					
                        <tr>
                            <th ><?php echo $dvr['variabel_nama']; ?></th>
                            <td width="1%">:</td>
                            <td><?php echo $dv['nilai_input']; ?></td>
                        </tr>
					
               <?php }?>
            </table>
            </div>
				<div class="col-lg-offset-2 col-lg-8">
					<form method="post" action="laman_uji.php">
						<?php 
						$variabel = mysqli_query($koneksi,"select * from variabel");
						while($v = mysqli_fetch_array($variabel)){

							$id_variabel = $v['variabel_id'];
							$data = mysqli_query($koneksi,"select min(vl_batas_awal) as batas_awal,max(vl_batas_akhir) as batas_akhir from variabel_linguistik where vl_variabel='$id_variabel'");
							$d = mysqli_fetch_array($data);

							?>
							<div class="form-group row" style="display:none">
								<label class="col-lg-12"><?php echo $v['variabel_nama']; ?></label>
								<div class="form-group col-lg-4">
									<input type="hidden" class="form-control" name="variabel[]" value="<?php echo $v['variabel_id']; ?>">
                                    <input type="hidden" class="form-control" name="nama_variabel[]" value="<?php echo $v['variabel_nama']; ?>">
                                    
                                    <?php 
                                     $input_vid=$v['variabel_id'];
                                     $nilai_input = mysqli_query($koneksi,"select * from uji where variabel_id='$input_vid' and kode_user='$kode_user'");
                                     $niv = mysqli_fetch_array($nilai_input);
                                    ?>
									<input type="number" class="form-control" name="nilai[]" value="<?php echo $niv['nilai_input'] ?>" required="required" min="<?php echo $d['batas_awal'] ?>" max="<?php echo $d['batas_akhir']; ?>">
								</div>
		
							</div>	
							<?php } ?>

						
						<br/>
                        <center>
                        <button class="btn_pencarian_manual btn btn-primary" type="submit">Selengkapnya Pembuktian Manual</button>
                        </center>
					</form>
				</div>
			</div>

			<br/>
			<br/>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>