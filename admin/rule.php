<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Rule & Konsekuen</h4>
		</div>
		<div class="panel-body">

			<a href="rule_tambah.php" class="btn btn-sm btn-success pull-right">Tambah Rule</a>
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="13%">Kode Prediket</th>
					<th width="1%">IF</th>
					<th>Anteseden</th>
					<th width="1%">THEN</th>
					<th>Kecanduan Level</th>
					<th>OPSI</th>
				</tr>

				<?php 
				include '../koneksi.php';

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

							$rule = mysqli_query($koneksi,"select * from rule,variabel,variabel_linguistik,output,output_linguistik where rule_kelompok='$kelompok' and rule_variabel=variabel_id and rule_linguistik=vl_id and rule_output=output_id and rule_outli=ol_id");

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
						<td>
						<?php
							$ovx=$d['rule_outli'];
							$output_check = mysqli_query($koneksi, "select * from output_linguistik where ol_id='$ovx' "); 
							while($ovl=mysqli_fetch_array($output_check)){
								echo $ovl['ol_nama'];
							}
						?>
							
						</td>
						<td>
							<a href="rule_edit.php?kelompok=<?php echo $d['rule_kelompok']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="rule_hapus.php?kelompok=<?php echo $d['rule_kelompok']; ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php 
				}
				?>
			</table>

			
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>