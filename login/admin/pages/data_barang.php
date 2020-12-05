<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Barang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-success" href="?page=tambah_barang">Tambah Data</a>
                </div>
                <!-- /.panel-heading -->
                <?php
                $barang = mysqli_query($koneksi, "SELECT * from tbl_barang a left join tbl_kategori b ON a.id_kategori=b.id_kategori");
                $no = 1;
                ?>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Nama Kategori</th>
                                <th>Satuan</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Tanggal</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        while ($data = mysqli_fetch_array($barang)) {
                        ?>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['kode_barang']; ?></td>
                                    <td><?php echo $data['nama_barang']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['satuan']; ?></td>
                                    <td><?php echo $data['harga_beli']; ?></td>
                                    <td><?php echo $data['harga_jual']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                    <td><?php echo $data['deskripsi_barang']; ?></td>
                                    <td><img width="100px" src="../../img/<?php echo $data['foto_barang']; ?>"></td>
                                    <td><a class=" fa fa-pencil" href="?page=edit_barang&id=<?php echo $data['id_barang'] ?>"></a>|<a class="fa fa-trash" href="?page=hapus_barang&id=<?php echo $data['id_barang'] ?>""></a></td>
                                    </tr>
                                </tbody>
                                <?php   }   ?>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->