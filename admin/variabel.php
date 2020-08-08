<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data variabel & linguistik</h4>
		</div>
		<div class="panel-body">

			<a href="variabel_tambah.php" class="btn btn-sm btn-success pull-right">Tambah Variabel Baru</a>
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th width="1%">Kode</th>
					<th>Nama</th>
					<th>Linguistik</th>
					<th width="12%">OPSI</th>
				</tr>

				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data variabel dari database
				$data = mysqli_query($koneksi,"select * from variabel");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['variabel_kode']; ?></td>
						<td><?php echo $d['variabel_nama']; ?> </td>
						<td>

							<a href="linguistik_tambah.php?variabel=<?php echo $d['variabel_id']; ?>" class="btn btn-sm btn-success">Buat Variabel Linguistik</a>

							<br/>
							<br/>
							
							<table class="table table-bordered">
								<?php
								$id_variabel = $d['variabel_id'];
								$linguistik = mysqli_query($koneksi,"select * from variabel_linguistik where vl_variabel='$id_variabel'");
								while($l=mysqli_fetch_array($linguistik)){
									?>
									<tr>
										<td width="50%"><?php echo $l['vl_nama']; ?></td>
										<td><?php echo $l['vl_batas_awal']; ?> - <?php echo $l['vl_batas_akhir']; ?></td>
										<td width="15%">
											<a href="linguistik_edit.php?variabel=<?php echo $d['variabel_id']; ?>&linguistik=<?php echo $l['vl_id']; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-wrench"></i></a>
											<a href="linguistik_hapus.php?linguistik=<?php echo $l['vl_id']; ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
										</td>
									</tr>
									<?php 
								}
								?>
							</table>

						</td>
						<td>
							<a href="variabel_edit.php?id=<?php echo $d['variabel_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="variabel_hapus.php?id=<?php echo $d['variabel_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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