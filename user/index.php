<?php include "header.php" ?>
<?php 
// koneksi database
include '../koneksi.php'; 
?>

<div class="container" >
		<div class="col-lg-8 col-lg-offset-2">
        <?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger'>Kode Unik Tidak Ditemukan</div>";
				}
			}
			?>	
        <div class="judul-user">
            <h3>
            APLIKASI PENDETEKSI KECANDUAN BERMAIN GAME ONLINE MENGGUNAKAN FUZZY TSUKAMOTO BERBASIS WEB
            </h3>
        </div>
	<div class="stepwizard" style="margin-top:70px">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
				<p>Langkah 1</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				<p>Langkah 2</p>
			</div>
		</div>
   </div>
<form role="form" method="post" action="uji_act.php">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
            <div style="margin-bottom:20px">
                <h3 > Langkah 1</h3>
                <small style="font-size:13px">Isi nama dan umur anda untuk melanjutkan ke langkah berikutnya</small>
            </div>
            
              
                <div class="form-group">
                    <label class="control-label">Nama</label>
                    <input  maxlength="100" name="nama" type="text" required="required" class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Umur</label>
                    <input maxlength="100" name="umur" type="number" required="required" class="form-control"/>
                </div>
                <button class="btn btn-primary nextBtn btn-md pull-right" type="button" >Selanjutnya </button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div style="margin-bottom:20px">
                    <h3 > Langkah 2</h3>
                    <small style="font-size:13px">Isi pertanyaan dibawah ini dengan angka yang anda rasa cukup sama pengalaman anda. </small>
                </div>
               <!-- start pertanyaan -->

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
								<div class="form-group col-lg-5">
									<input type="hidden" class="form-control" name="variabel[]" value="<?php echo $v['variabel_id']; ?>">
									<input type="hidden" class="form-control" name="nama_variabel[]" value="<?php echo $v['variabel_nama']; ?>">
									<!-- <input type="number" class="form-control" name="nilai[]" placeholder="Masukkan nilai .." required="required" min="<?php echo $d['batas_awal'] ?>" max="<?php echo $d['batas_akhir']; ?>"> -->
                                    <input type="range"  min="<?php echo $d['batas_awal'] ?>" max="<?php echo $d['batas_akhir']; ?>" step="1" name="nilai[]" required>
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

                <!-- end pertanyaan-->
                </div>
            <button type="submit" class="btn btn-primary pull-right">Mulai Analisa</button>	
           
        </div>
    </div>

</form>
		</div>
	</div>
<?php include "footer.php"?>
