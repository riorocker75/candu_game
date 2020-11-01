<?php include 'header.php'; ?>

<style>
	.pencarian_manual{
		display: none;
	}
</style>

<div class="container">
	<div class="panel">
		<div class="panel-heading text-center">
			<h4>Hasil Hitung Kecanduan Bermain Game Online Fuzzy TSUKAMOTO</h4>
        </div>
        
		<div class="panel-body">
       
			<?php 
			include '../koneksi.php';
			$variabel = $_POST['variabel'];
			$nama_variabel = $_POST['nama_variabel'];
            $nilai = $_POST['nilai'];
            $kode_user="U-".rand(1000,9999);
            // ini untuk simpan ke database 
            for($y=0;$y<count($variabel);$y++){
                mysqli_query($koneksi,"insert into uji values(null,'$kode_user','$variabel[$y]','$nilai[$y]')");

            }    

			?>

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
                <div class="alert alert-info">
                    <center>
                        <h4 style="margin: 10px">
                        Simpan Kode Unik ini <b><?php echo $kode_user?></b>
                        </h4>
                    </center>
                </div>
					<h5>Inputan</h5>
					<table class="table table-bordered">
						<?php 
						for($x=0;$x<count($variabel);$x++){
							?>
							<tr>
								<th ><?php echo $nama_variabel[$x]; ?></th>
								<td width="1%">:</td>
								<td><?php echo $nilai[$x]; ?></td>
							</tr>
							<?php
						}
						?>
					</table>
				</div>
			</div>

		</div>
	</div>



	<div class="panel pencarian_manual">
		<div class="panel-heading">
			<h3>Hasil Perhitungan</h3>
			<p class="text-muted">Hasil Perhitungan Manual Kecanduan Bermain Game Online Fuzzy TSUKAMOTO</p>
		</div>
		<div class="panel-body">

			<table class="table table-bordered">

				<?php 
				$himpunan = array();
				$kumpul_input = array();

				for($x=0;$x<count($variabel);$x++){

					?>
					<tr>

						<th width="38%">Himpunan [ <?php echo $nama_variabel[$x]; ?> ] </th>
						<td width="1%">=</td>
						<td>
							<table class="table table-bordered" style="margin-bottom:0px">

								<?php 

								$vv = $variabel[$x];
								$linguistik = mysqli_query($koneksi,"select * from variabel_linguistik where vl_variabel='$vv'");
								while($l = mysqli_fetch_array($linguistik)){

									$nilai_c = mysqli_query($koneksi,"select max(vl_batas_akhir) as nilai_c from variabel_linguistik where vl_variabel='$vv'");
									$nc = mysqli_fetch_assoc($nilai_c);

									$a = $l['vl_batas_awal'];
									$b = $l['vl_batas_akhir'];
									$c = $nc['nilai_c'];

									$variab = $l['vl_variabel'];
									$lingui = $l['vl_id'];

									$b1=$b+1;
									$amin=$a-1;
									// nilai[$x] itu sama dengan inputan dari post['nilai']	
									// variabel[$x] itu vl_variabel di tabel variabel_linguistik 
									// $a itu nilai batas awal di variabel lingustik
									// $b itu nilai batas akhir di variabel lingustik
									// $c itu nilai batas max dari  variabel linguistik
									// $a <= $nilai[$x]  || $nilai[$x] <= $b
									 ?> 
									<!-- klasifikasi antara terkadang sama sering	 -->
									<?php switch($l['vl_nama']){
										 case "Tidak Pernah":
									 ?>
											<tr>
												<td width="14%"><?php echo $l['vl_nama']; ?></td>
												<td width="1%">=</td>
												<td>
												
													nilai input: <?php echo $nilai[$x]?>
													<br/>
													<!--
													nilai a:<?php echo $a;?> || nilai b: <?php echo $b;?> <br/>
													<br> -->
												<!-- disini tulis logika rumus nya -->
												<!-- variabel start tidak pernah -->
												<?php
													$tp1=1;
													$tp0=0;
													$nb1= $b+1;
												?>
												<!-- bandingkan dulu nilai atas antara 3 dan 2 -->
												<br>
													<!-- ini pengecekan jika nilai atas 3 -->
													
														<?php if($nilai[$x] <= 1){
																$rumusTP1=$tp1;
																$himpunan[$variab][$lingui] = $rumusTP1;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "x <= 1";
																echo "<br><b>Hasil = $rumusTP1</b>";
																
															}elseif($nilai[$x] <= 4){
																$rumusTP2=(4 - $nilai[$x]) / (4 - 1);
																$himpunan[$variab][$lingui] = $rumusTP2;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "1 <= x <= $nb1";
																echo "<br>(4 - $nilai[$x] ) / (4 - 1)";
																echo "<br><b>Hasil = $rumusTP2</b>";

																
															}elseif($nilai[$x] >= 4){
																$rumusTP0=$tp0;
																$himpunan[$variab][$lingui] = $rumusTP0;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "x >= 4";
																echo "<br><b>Hasil = $rumusTP0</b>";

															}
														?>


													
												</td>
										
											</tr>
 										
 									<?php	break;case "Terkadang": ?>
 										<tr>
												<td width="14%"><?php echo $l['vl_nama']; ?></td>
												<td width="1%">=</td>
												<td>
												
													nilai input: <?php echo $nilai[$x]?>
													 <br/>
													<!-- nilai a:<?php echo $a;?> || nilai b: <?php echo $b;?> <br/> -->
													<!-- disini tulis logika rumus nya -->
													<!-- variabel start terkadang -->
													<?php
														$td0=0;
														$na_1= $a-1;
														$nb1= $b+1;
														$na1=$a+1;
													// echo "nilai na1=$na1<br>";
													?>

												<!-- bandingkan dulu nilai atas antara 3 dan 2 -->
												<br>
											
														
														<?php if($nilai[$x] <= 3 || $nilai[$x] >= 6){
																$rumusTD0=$td0;
																$himpunan[$variab][$lingui] = $rumusTD0;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "x <= 3 atau x >= 6";
																echo "<br><b>Hasil = $rumusTD0</b>";
																
															}elseif($nilai[$x] == 4){
																$rumusTD1=($nilai[$x] - 3) / (4 - 3);
																$himpunan[$variab][$lingui] = $rumusTD1;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "3 <= x <= 4";
																echo "<br>($nilai[$x] -  3) / (4 - 3)";
																echo "<br><b>Hasil = $rumusTD1</b>";
																
															}elseif(4 <= $nilai[$x] || $nilai[$x] <= 6){
																$rumusTD2=(6 - $nilai[$x]) / (6 - 4);
																$himpunan[$variab][$lingui] = $rumusTD2;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "4 <= x <= 6";
																echo "<br>(6 - $nilai[$x]) / (6 - 4)";
																echo "<br><b>Hasil = $rumusTD2</b>";
															}
														?>


												
												</td>
												

											</tr>

 									<?php	break; case "Sering": ?>
 										<tr>
												<td width="14%"><?php echo $l['vl_nama']; ?></td>
												<td width="1%">=</td>
												<td>
												
													nilai input: <?php echo $nilai[$x]?>
													<br/>
													<!-- nilai a:<?php echo $a;?> || nilai b: <?php echo $b;?> <br/> -->
												
											
													<!-- disini tulis logika rumus nya -->
													<!-- variabel start sering -->
													<?php
														$ts0=0;
														
													?>
												<!-- bandingkan dulu nilai atas antara 3 dan 2 -->
												<br>
												<!-- ini pengecekan jika nilai atas 3 -->
												
														
														<?php if($nilai[$x] <= 4 ){
																$rumusSR0=$ts0;
																$himpunan[$variab][$lingui] = $rumusSR0;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "x <= 4";
																echo "<br><b>Hasil = $rumusSR0</b>";
																
															}elseif(4 <= $nilai[$x] || $nilai[$x] <= 9 ){
																$rumusSR1=($nilai[$x] - 4) / (9 - 4);
																$himpunan[$variab][$lingui] = $rumusSR1;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "4 <= x <= 9";
																echo "<br>($nilai[$x] - 4) / (9 - 4)";
																echo "<br><b>Hasil = $rumusSR1</b>";
																
															}elseif($nilai[$x] >= 9){
																$rumusSR2=1;
																$himpunan[$variab][$lingui] = $rumusSR2;
																$kumpul_input[$variab][$lingui]=$nilai[$x];

																echo "x >= $b";
																echo "<br><b>Hasil = $rumusSR2</b>";
															}
														?>



											
												</td>
											

											</tr>

 									<?php	break;default: echo"kosong"; } ?>
 									
 										
										
								

									
							<!-- end untuk while  -->
							<?php } ?>
							</table>
						</td>
					</tr>
					<?php
				}
				?>
			</table>


<!-- <pre>
<?php 
// print_r($himpunan);
?>
</pre> -->



<br/>
<hr>
<br/>

<h4>Rule :</h4>



<table class="table table-bordered table-striped">
	<tr>
		<th width="1%">Kode</th>
		<th width="1%">IF</th>
		<th>Anteseden</th>
		<th width="1%">THEN</th>
		<th>Kecanduan Level</th>
	</tr>

	<?php 
	$no = 1;
	$data = mysqli_query($koneksi,"select distinct rule_kelompok,rule_outli from rule");

	while($d=mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo "R" . $no++; ?></td>
			<td>IF</td>
			<td>
				<?php
				$kelompok = $d['rule_kelompok'];

				$rule = mysqli_query($koneksi,"select * from rule,variabel,variabel_linguistik where rule_kelompok='$kelompok' and rule_variabel=variabel_id and rule_linguistik=vl_id");

				while($r=mysqli_fetch_array($rule)){

					$id_rule = $r['rule_id'];
					$cek = mysqli_query($koneksi,"select * from rule where rule_kelompok='$kelompok' and rule_id > $id_rule");

					if(mysqli_num_rows($cek) > 0){
						$rr = "<b>" . $r['variabel_nama'] . "</b> " . $r['vl_nama'] . " <i>AND</i> ";
					}else{
						$rr = "<b>" . $r['variabel_nama'] . "</b> " . $r['vl_nama'];

					}
					echo $rr; 
				}
				?>

			</td>
			<td>THEN</td>
			<td><?php 
				// echo $d['rule_outli']; 
				$ol_id=$d['rule_outli']; 
				$data_level = mysqli_query($koneksi,"select * from output_linguistik where ol_id='$ol_id' ");
				$level = mysqli_fetch_array($data_level);
				echo $level['ol_nama'];
			?></td>
		</tr>
		<?php 
	}
	?>
</table>




<br>
<hr>
<br>




<table class="table table-bordered">
	<?php 
	$no = 1;
	$arr_no = 0;
	$arr_rule = array();
	$arr_nilai = array();

	$data = mysqli_query($koneksi,"select distinct rule_kelompok,rule_outli from rule");
	while($d=mysqli_fetch_array($data)){
		$nox = $no++;
		?>
		<tr>
			<td width="1%"><?php echo "R" . $nox; ?></td>
			<td width="1%">=</td>
			<td width="1%">MIN</td>
			<td>
				( &nbsp;
					<?php
					$tes=array();
					$tes_xx=array();

					$kelompok = $d['rule_kelompok'];
					$rule = mysqli_query($koneksi,"select * from rule,variabel,variabel_linguistik where rule_kelompok='$kelompok' and rule_variabel=variabel_id and rule_linguistik=vl_id");
					while($r=mysqli_fetch_array($rule)){

						$rr = $himpunan[$r['rule_variabel']][$r['rule_linguistik']];

						$id_rule = $r['rule_id'];
						$cek = mysqli_query($koneksi,"select * from rule where rule_kelompok='$kelompok' and rule_id > $id_rule");

						if(mysqli_num_rows($cek) > 0){
							$tampil_rr = "<b>" . $himpunan[$r['rule_variabel']][$r['rule_linguistik']] . "</b> &cap; ";
							$tes_rr= $himpunan[$r['rule_variabel']][$r['rule_linguistik']];
							$ii=$kumpul_input[$r['rule_variabel']][$r['rule_linguistik']];
							
						}else{
							$tampil_rr = "<b>" . $himpunan[$r['rule_variabel']][$r['rule_linguistik']] . "</b>";
							$tes_rr= $himpunan[$r['rule_variabel']][$r['rule_linguistik']];
							$ii=$kumpul_input[$r['rule_variabel']][$r['rule_linguistik']];
							
						}

						echo $tampil_rr;
						array_push($arr_rule, $rr);
						array_push($tes, $tes_rr);
						array_push($tes_xx,$ii);

					}
					?>
					&nbsp; )

					<?php 
						$hs=array();
						foreach ($tes as $kr ){
							$hs[] = $kr;
						}

						$hz=array();
						$hk=array();

						// ini untuk nampilin input
						foreach ($tes_xx as $ku ){
							$hk[] = $ku;
						}
						// print_r($hk);

						// ini percobaan dari hs
						foreach ($tes as $ki ){
							// ini isi dari hs sebenarnya
							$hz[] = $ki;
							// $hz[]=$gabungs;
						}
						// echo $fg;
						$gabungs=array_combine($hz,$hk);
						ksort($gabungs);
						$cuax=reset($gabungs);
					?>

					=
					<?php echo min($hs) ?>
				</td>
			</tr>


			<tr>
				<td></td>
				<td width="1%"></td>
				<td width="1%"><?php echo "Z" . $nox; ?></td>
				<td>

					<?php 
					$nilai_himpunan_minimal = min($hs);

					$array_rule = 0;
					?>
					<?php 
						$ol_id1=$d['rule_outli']; 
						$data_level1 = mysqli_query($koneksi,"select * from output_linguistik where ol_id='$ol_id1' ");
						$level1 = mysqli_fetch_array($data_level1);
					?>
					<?php 
					// echo $nilai_himpunan_minimal . " x " . $level1['ol_nama'];
					 

				/*
				---------------------
					nilai z
				---------------------	
				*/ 
					// $nilai_z = $nilai_himpunan_minimal*$d['rule_nilai'];
					// echo $nilai_z;

					// cek dulu dia berat,ringan tidak kecanduan
					if($d['rule_outli'] == "1"){
					  // bagian rumus berat z
					  $nilai_z= 5 + ($nilai_himpunan_minimal * 5);
					  echo "Rumus<br>";
					  echo "5 - ($nilai_himpunan_minimal * 5)<br>";
					  echo "<b>Hasil: $nilai_z</b>";
					}elseif($d['rule_outli'] == "2"){
					  // bagian rumus ringan z

					  $nilai_z= 7 - ($nilai_himpunan_minimal * 2);
					  echo "Rumus<br>";
					  echo "7 - ($nilai_himpunan_minimal * 2)<br>";
					  echo "<b>Hasil: $nilai_z</b>";

					}elseif($d['rule_outli'] == "4"){
					  // bagian rumus tidak kecanduan z
						 if($cuax <= 1){
								$nilai_z= 1;	
								 echo "Rumus x <= 1<br>";
								 echo "<b>Hasil: $nilai_z</b>";
							}elseif($cuax <= 5){
								$nilai_z = 5 - ($nilai_himpunan_minimal * 4);
								 echo "Rumus 1 <= x <= 5<br>";
							 echo "Rumus 5 - ($nilai_himpunan_minimal * 4)<br>";
								 
								 echo "<b>Hasil: $nilai_z</b>";
							}elseif($cuax > 5){
						 		 $nilai_z= 0;
								 echo "Rumus x > 5<br>";
								 echo "<b>Hasil: $nilai_z</b>";
							}
					}



					$arr_nilai[$nox]['z'] = $nilai_z;
					$arr_nilai[$nox]['a'] = min($hs);
					?>

				</td>
			</tr>
			<?php 
		}
		?>
	</table>






	<!-- <pre> -->
		<?php 
		// print_r($arr_nilai); 
		?>
		<!-- </pre> -->

		<br>
		<hr>
		<br>


		<h4>Hasil Akhir</h4>

		<?php 
		$hasil_z = 0;
		$hasil_a = 0;

		?>

		<table>
			<tr>
				<td>Z</td>
				<td style="padding: 10px"> = </td>
				<td>
					<table>
						<tr>
							<td>
								<?php
								for($m = 1;$m <= count($arr_nilai);$m++){
									$hasil_z +=$arr_nilai[$m]['a'] * $arr_nilai[$m]['z'] ;
									// $hasil_a += $arr_nilai[$m]['a'];
									if($m == count($arr_nilai)){
										$tambah = "";
									}else{
										$tambah = " + ";
									}
									// echo $hasil_z . $tambah;
								}
								?>
							</td>
						</tr>
						<tr>
							<td style="border-top: 1px solid black">
								<?php
								$arr_nilai[$nox]['a'];
								for($m = 1;$m <= count($arr_nilai);$m++){
									$hasil_a += $arr_nilai[$m]['a'];
									if($m == count($arr_nilai)){
										$tambah = "";
									}else{
										$tambah = " + ";
									}
									// echo $hasil_a . $tambah;
								}
								?>
							</td>
						</tr>
					</table>
				</td>


				<td>
					<table>
						<tr>
							<td>
								<?php 
								$hasil_z = 0;
								$hasil_a = 0;
								for($m = 1;$m <= count($arr_nilai);$m++){
									// jumlahkan nilai z
									$hasil_z += $arr_nilai[$m]['a'] * $arr_nilai[$m]['z'];

									// jumlahkan nilai a
									$hasil_a += $arr_nilai[$m]['a'];

								}
								$hasil_akhir = $hasil_z/$hasil_a;
								echo $hasil_z;
								?>

							</td>
						</tr>
						<tr>
							<td style="border-top: 1px solid black">
								<?php
								echo $hasil_a;
								?>
							</td>
						</tr>
					</table>
				</td>
				<td style="padding: 10px">=</td>
				<td>
					<span style="color: blue;font-weight: bold;">
						<?php 
                        echo number_format($hasil_akhir,2) ;
                        
						?>
					</span>
				</td>
			</tr>
              <!-- ini untuk hasil user-->
              <?php
              $nama=$_POST['nama'];
              $umur=$_POST['umur'];

              mysqli_query($koneksi,"insert into user values(null,'$kode_user','$nama','$umur','$hasil_akhir')");
              
              ?>                  
              <!-- end user simpan -->

		</table>


	<br/>
	<br/>
	<br/>
	</div>
</div>



<br/>
<br/>
<br/>

<div class="alert alert-info">
	<center>
		<h3 style="margin: 10px">
		Hasil Hitung Kecanduan Bermain Game Online Fuzzy TSUKAMOTO Adalah <b><?php echo number_format($hasil_akhir,2); ?>
		<?php 
			if($hasil_akhir <= 3){
				echo "Tidak Kecanduan";
			}elseif($hasil_akhir <= 6){
				echo "Kecanduan Ringan";
			}elseif($hasil_akhir > 6 ){
				echo "Kecanduan Berat";
			}

		 ?>	

		</b>
		</h3>
	</center>
</div>


<div class="alert alert-info">
		<p style="text-align: center;font-weight: 600;font-size: 20px">Solusi</p>
		<h3 style="margin: 10px;font-size:16px!important;text-align: left;line-height: 1.5 ">
		<?php 
		$nasihat= mysqli_query($koneksi,"select * from output_linguistik");
		while($l = mysqli_fetch_array($nasihat)){
			if($hasil_akhir <= 3){
				echo "
					•	Melakukan pencegahan agar tidak mengalami kecanduan Game Online<br>
					•	Meningkatkan pemahaman tentang bahaya kecanduan bermain Game Online<br>
				";
			}elseif($hasil_akhir <= 6){
				echo "
					•	Orang terdekat memberikan nasihat<br>
					•	Melakukan kegiatan positif<br>
					•	Mengembangkan potensi minat dan bakat<br>
					•	Kurangi frekuensi bermain Game Online secara bertahap<br>
					•	Fokus terhadap pendidikan atau pekerjaan yang ditekuni<br>

				";
			
			}elseif($hasil_akhir > 6 ){
			echo "•	Didampingi Psikolog atau Dokter Spesialis Jiwa untuk menjalani terapi <br>
				•	Orang terdekat harus mendammpingi atau memantau seluruh kegiatan yang dilakukan selama proses penyembuhan<br>
				•	Rancang kembali target hidup anda<br>
				•	Bertekat untuk sembuh dari Kecanduan Game Online<br>
				•	Berdo’a mendekatkan diri kepada Allah SWT.<br>
				";
			}
		}		
		 ?>
			
		</b>
		</h3>
	
</div>




<br/>
<br/>

<center>
	
	<button class="btn_pencarian_manual btn btn-primary">Pembuktian / Pencarian Manual</button>

</center>


<br/>
<br/>
<br/>
<br/>
<br/>
</div>


<script>
	$(document).ready(function(){
		$('.btn_pencarian_manual').on("click",function(){
			$('.pencarian_manual').toggle();
		});
	});
</script>

<?php include 'footer.php'; ?>