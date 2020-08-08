<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Output Hasil</h4>
		</div>
		<div class="panel-body">

			<a href="v_output_tambah.php" class="btn btn-sm btn-success pull-right">Tambah Output Baru</a>
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th width="20%">Kode</th>
					<th>Nama</th>
					<th>Linguistik</th>

					<th width="12%">OPSI</th>
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data variabel dari database
				$data = mysqli_query($koneksi,"select * from output");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['kode_output']; ?> </td>
						<td><?php echo $d['nama_output']; ?></td>
						
						<!-- linguistik output mulai -->
						<td>

							<a href="v_ol_tambah.php?output=<?php echo $d['output_id']; ?>" class="btn btn-sm btn-success">Buat Variabel Linguistik</a>

							<br/>
							<br/>
							
							<table class="table table-bordered">
								<?php
								$id_output = $d['output_id'];
								$linguistik = mysqli_query($koneksi,"select * from output_linguistik where ol_output_id='$id_output'");
								while($l=mysqli_fetch_array($linguistik)){
									?>
									<tr>
										<td width="50%"><?php echo $l['ol_nama']; ?></td>
										<td><?php echo $l['ol_batas_awal']; ?> - <?php echo $l['ol_batas_akhir']; ?></td>
										<td width="15%">
											<a href="v_ol_edit.php?output=<?php echo $d['output_id']; ?>&linguistik=<?php echo $l['ol_id']; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-wrench"></i></a>
											<a href="v_ol_delete.php?linguistik=<?php echo $l['ol_id']; ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
										</td>
									</tr>
									<?php 
								}
								?>
							</table>

						</td>

						<!-- end linguistik  -->
						
						<td>
							<a href="v_output_edit.php?id=<?php echo $d['output_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="v_output_hapus.php?id=<?php echo $d['output_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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