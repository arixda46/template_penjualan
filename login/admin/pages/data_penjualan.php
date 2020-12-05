<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Penjualan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-success" href="?page=tambah_penjualan">Tambah Penjualan</a>
                </div>
                <?php
                $penjualan = mysqli_query($koneksi, "SELECT * from tbl_penjualan a join tbl_member b on a.id_member=b.id_member join tbl_barang c on a.id_barang=c.id_barang");
                $no = 1;
                ?>
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Member</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Jual</th>
                                <th>Harga Jual</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $total_penjualan = 0;
                        while ($data = mysqli_fetch_array($penjualan)) {
                            $total_harga = $data['jumlah_jual'] * $data['harga_jual'];
                            $total_penjualan += $total_harga;
                        ?>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['tanggal_jual']; ?></td>
                                    <td><?php echo $data['nama_member']; ?></td>
                                    <td><?php echo $data['kode_barang']; ?></td>
                                    <td><?php echo $data['nama_barang']; ?></td>
                                    <td><?php echo $data['jumlah_jual']; ?></td>
                                    <td>Rp. <?php echo number_format($data['harga_jual']); ?></td>
                                    <td>Rp. <?php echo number_format($total_harga); ?></td>
                                    <td><a class="fa fa-edit" href="?page=edit_penjualan&id=<?php echo $data['id_member'] ?>"></a>|<a class="fa fa-trash" href="?page=hapus_penjualan&id=<?php echo $data['id_penjualan'] ?>"></a></td>
                                </tr>
                            </tbody>
                        <?php   }   ?>
                        <td colspan="7" align="center"><b>Total Penjualan</b></td>
                        <td>Rp. <?php echo number_format($total_penjualan); ?></td>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->