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
			?>

			<div class="row">
				<div class="col-lg-4 col-lg-offset-4">

					<h5>Inputan</h5>
					<table class="table table-bordered">
						<?php 
						for($x=0;$x<count($variabel);$x++){
							?>
							<tr>
								<th width="40%"><?php echo $nama_variabel[$x]; ?></th>
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


			<h4>Rumus</h4>

			<table class="table table-bordered">
				<tr>
					<th>himpunan[x]</th>
					<td>
						<table class="table table-bordered" style="margin-bottom:0px">
							<tr>
								<td>1</td>
								<td>x < a atau x > c</td>
							</tr>
							<tr>
								<td>( x - a ) / ( b - a )</td>
								<td>a <= x <= b</td>
							</tr>
							<tr>
								<td>( c - x ) / ( c - b )</td>
								<td>b <= x <= c</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>



			<br/>
			<hr>
			<br/>


			<table class="table table-bordered">

				<?php 
				$himpunan = array();
				for($x=0;$x<count($variabel);$x++){

					?>
					<tr>

						<th width="18%">Himpunan [ <?php echo $nama_variabel[$x]; ?> ] </th>
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
													<?php 
													$himpunan[$variab][$lingui] = 1;
													?>
													nilai input: <?php echo $nilai[$x]?>
													<!-- <br/>
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
													<?php if($b > 2){ ?>
														<?php if($nilai[$x] <= 1){
																$rumusTP1=$tp1;
																echo "x <= 1";
																echo "<br><b>Hasil = $rumusTP1</b>";
																
															}elseif($nilai[$x] <= $nb1){
																$rumusTP2=($nb1 - $nilai[$x]) / ($nb1 - 1);
																echo "1 <= x <= $nb1";
																echo "<br>($nb1 - $nilai[$x] ) / ($nb1 - 1)";
																echo "<br><b>Hasil = $rumusTP2</b>";

																
															}elseif($nilai[$x] >= $nb1){
																$rumusTP0=$tp0;
																echo "x >= $nb1";
																echo "<br><b>Hasil = $rumusTP0</b>";

															}
														?>


													<?php }else{?>	
													<!-- ini pengecekan jika nilai atas 2 -->
													<?php if($nilai[$x] <= 1){
																$rumusTP1=$tp1;
																echo "x <= 1";
																echo "<br><b>Hasil = $rumusTP1</b>";
															}elseif($nilai[$x] <= $nb1){
																$rumusTP2=($nb1 - $nilai[$x]) / (10 - $nb1);
																echo "1 <= x <= $nb1";
																echo "<br>($nb1 - $nilai[$x] ) / (10 - $nb1)";
																echo "<br><b>Hasil = $rumusTP2</b>";
																
															}elseif($nilai[$x] >= $nb1){
																$rumusTP0=$tp0;
																echo "x >= $nb1";
																echo "<br><b>Hasil = $rumusTP0</b>";
															}
														?>

													<?php } ?>
												</td>
												<!-- <td width="1%">=</td>
												<td></td>
												<td width="1%">=</td>
												<td width="1%"></td> -->

											</tr>
 										
 									<?php	break;case "Terkadang": ?>
 										<tr>
												<td width="14%"><?php echo $l['vl_nama']; ?></td>
												<td width="1%">=</td>
												<td>
													<?php 
													$himpunan[$variab][$lingui] = 1;
													?>
													nilai input: <?php echo $nilai[$x]?>
													<!-- <br/>
													nilai a:<?php echo $a;?> || nilai b: <?php echo $b;?> <br/>
													Rumus terkadang<br/> -->
													<!-- disini tulis logika rumus nya -->
													<!-- variabel start terkadang -->
													<?php
														$td0=0;
														$na_1= $a-1;
														$nb1= $b+1;
														$na1=$a+1;
													?>
												<!-- bandingkan dulu nilai atas antara 3 dan 2 -->
												<br>
												<!-- ini pengecekan jika nilai atas 3 -->
													<?php if($b > 2){ ?>
														<?php if($nilai[$x] <= $na_1 || $nilai[$x] > $b){
																$rumusTD0=$td0;
																echo "x <= $na_1 atau x >= $b";
																echo "<br><b>Hasil = $rumusTD0</b>";
																
															}elseif($nilai[$x] == $na_1 ){
																$rumusTD1=($nilai[$x] - $na_1) / ($a - $na_1);
																echo "$na_1 <= x <= $a";
																echo "<br>($nilai[$x] -  $na_1) / ($a - $na_1)";
																echo "<br><b>Hasil = $rumusTD1</b>";
																
															}elseif($a <= $nilai[$x] || $nilai[$x] <= $nb1){
																$rumusTD2=($nb1 - $nilai[$x]) / ($nb1 - $a);
																echo "$nb1 <= x <= $a";
																echo "<br><b>Hasil = $rumusTD2</b>";
															}
														?>


													<?php }else{?>	
													<!-- ini pengecekan jika nilai atas 2 -->
													<?php if($nilai[$x] <= $na_1 || $nilai[$x] >= $b){
																$rumusTD0=$td0;
																echo "x <= $na_1 atau x >= $b";
																echo "<br><b>Hasil = $rumusTD0</b>";
															}elseif($na_1 <= $nilai[$x] || $nilai[$x] <= $a){
																$rumusTD1=($nilai[$x] - $na_1) / ($a - $na_1);
																echo "$na_1 <= x <= $a";
																echo "<br>($nilai[$x] -  $na_1) / ($a - $na_1)";
																echo "<br><b>Hasil = $rumusTD1</b>";
																
															}elseif($a <= $nilai[$x] || $nilai[$x] <= $nb1){
																$rumusTD2=($na1 - $nilai[$x]) / ($na1 - $na_1);
																echo "$na_1 <= x <= $nb1";
																echo "<br><b>Hasil = $rumusTD2</b>";
															}
														?>

													<?php } ?>
												</td>
												

											</tr>

 									<?php	break; case "Sering": ?>
 										<tr>
												<td width="14%"><?php echo $l['vl_nama']; ?></td>
												<td width="1%">=</td>
												<td>
													<?php 
													$himpunan[$variab][$lingui] = 1;
													?>
													nilai input: <?php echo $nilai[$x]?>
													<br/>
													nilai a:<?php echo $a;?> || nilai b: <?php echo $b;?> <br/>
													Sering<br/>
												
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
		<th>Nilai Kalori</th>
	</tr>

	<?php 
	$no = 1;
	$data = mysqli_query($koneksi,"select distinct rule_kelompok,rule_nilai from rule");

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
			<td><?php echo $d['rule_nilai']; ?></td>
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

	$data = mysqli_query($koneksi,"select distinct rule_kelompok,rule_nilai from rule");
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
					$kelompok = $d['rule_kelompok'];
					$rule = mysqli_query($koneksi,"select * from rule,variabel,variabel_linguistik where rule_kelompok='$kelompok' and rule_variabel=variabel_id and rule_linguistik=vl_id");
					while($r=mysqli_fetch_array($rule)){

						$rr = $himpunan[$r['rule_variabel']][$r['rule_linguistik']];

						$id_rule = $r['rule_id'];
						$cek = mysqli_query($koneksi,"select * from rule where rule_kelompok='$kelompok' and rule_id > $id_rule");

						if(mysqli_num_rows($cek) > 0){
							$tampil_rr = "<b>" . $himpunan[$r['rule_variabel']][$r['rule_linguistik']] . "</b> &cap; ";

						}else{
							$tampil_rr = "<b>" . $himpunan[$r['rule_variabel']][$r['rule_linguistik']] . "</b>";

						}

						echo $tampil_rr;
						array_push($arr_rule, $rr);
					}
					?>
					&nbsp; )

					=
					<?php echo min($arr_rule); ?>
				</td>
			</tr>


			<tr>
				<td></td>
				<td width="1%"></td>
				<td width="1%"><?php echo "Z" . $nox; ?></td>
				<td>

					<?php 
					$nilai_himpunan_minimal = min($arr_rule);

					$array_rule = 0;
					?>
					<?php 
					echo $nilai_himpunan_minimal . " x " . $d['rule_nilai'] . " = ";

// nilai z
					$nilai_z = $nilai_himpunan_minimal*$d['rule_nilai'];
					echo $nilai_z;


					$arr_nilai[$nox]['z'] = $nilai_z;
					$arr_nilai[$nox]['a'] = min($arr_rule);
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
		// for($m = 1;$m <= count($arr_nilai);$m++){
		// // jumlahkan nilai z
		// 	$hasil_z += $arr_nilai[$m]['z'];

		// // jumlahkan nilai a
		// 	$hasil_a += $arr_nilai[$m]['a'];

		// }
		// $hasil_akhir = $hasil_z/$hasil_a;
		// echo number_format($hasil_akhir,2) . " kkal";
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
									$hasil_z += $arr_nilai[$m]['z'];

									if($m == count($arr_nilai)){
										$tambah = "";
									}else{
										$tambah = " + ";
									}
									echo $hasil_z . $tambah;
								}
								?>
							</td>
						</tr>
						<tr>
							<td style="border-top: 1px solid black">
								<?php
								for($m = 1;$m <= count($arr_nilai);$m++){
									$hasil_a += $arr_nilai[$m]['a'];

									if($m == count($arr_nilai)){
										$tambah = "";
									}else{
										$tambah = " + ";
									}
									echo $hasil_a . $tambah;
								}
								?>
							</td>
						</tr>
					</table>
				</td>

				<td style="padding: 10px"> = </td>

				<td>
					<table>
						<tr>
							<td>
								<?php 
								$hasil_z = 0;
								$hasil_a = 0;
								for($m = 1;$m <= count($arr_nilai);$m++){
									// jumlahkan nilai z
									$hasil_z += $arr_nilai[$m]['z'];

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
						echo number_format($hasil_akhir,2) . " kkal";
						?>
					</span>
				</td>
			</tr>



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
		Hasil Hitung Kecanduan Bermain Game Online Fuzzy TSUKAMOTO Adalah <b><?php echo number_format($hasil_akhir,2); ?> Candu</b>
		</h3>
	</center>
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