<?php include "header.php"?>
<?php include '../koneksi.php'; ?>
<div class="container" style="background:#fff">
    <div class="col-lg-10 col-lg-offset-1">
        <h3>Semua Data Uji</h3>
        <div class="table-responsive"  style="margin:60px 0">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Hasil</th>
                            <th width="12%" style="text-align: center;">Opsi</th>
                        </tr>
                    </thead>
                     <tbody>
                         <?php
                            $no=1;
                            $data=mysqli_query($koneksi,"select * from user");
                            while($u =mysqli_fetch_array($data)){
                         ?>
                         <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $u['kode_user']?></td>
                                <td><?php echo $u['nama']?></td>
                                <td><?php echo $u['umur']?> tahun</td>
                                <td><?php echo $u['hasil']?></td>
                                <td>
                                    <center>
                                        <a href="data_uji_detail.php?id=<?php echo $u['kode_user']; ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        &nbsp;
                                        <a href="data_uji_hapus.php?id=<?php echo $u['kode_user']; ?>" onclick="return confirm('Anda yakin menghapus data ini ?')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </center>
                                </td>

                         </tr>
                            <?php }?>
                    </tbody>
                </table>
        </div>        
    </div>
</div>
<?php include "footer.php"?>
