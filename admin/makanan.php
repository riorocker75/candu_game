<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Makanan Balita</h4>
		</div>
		<div class="panel-body">

			<a href="makanan_tambah.php" class="btn btn-sm btn-success pull-right">Tambah makanan</a>
			
			<br/>
			<br/>

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Usia / Umur Balita</th>
					<th>Jenis Makanan</th>
					<th width="15%">OPSI</th>
				</tr>

				<?php 
				include '../koneksi.php';

				$no = 1;
				$data = mysqli_query($koneksi,"select * from makanan");
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['makanan_umur']; ?></td>
						<td><?php echo $d['makanan']; ?></td>
						<td>
							<a href="makanan_edit.php?id=<?php echo $d['makanan_id']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="makanan_hapus.php?id=<?php echo $d['makanan_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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