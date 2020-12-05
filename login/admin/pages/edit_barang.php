<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Barang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Data Barang
                </div>
                <div class="panel-body">
                    <?php
                    $barang = mysqli_query($koneksi, "SELECT * from tbl_barang WHERE id_barang='$_GET[id]'");
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST" role="form">
                                <?php
                                while ($data = mysqli_fetch_array($barang)) {
                                ?>
                                    <div class="form-group">
                                        <label>Kode Barang</label>
                                        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                                        <input class="form-control" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                <?php
                                                $kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                                while ($m = mysqli_fetch_array($kategori)) {
                                                    if ($pecah['id_kategori'] == $m['id_kategori']) {
                                                        $selected = "selected";
                                                    } else {
                                                        $selected = "";
                                                    }
                                                ?>
                                                    <option value="<?php echo $m['id_kategori']; ?>" <?= $selected ?>><?php echo "$m[nama_kategori]"; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input class="form-control" name="satuan" value="<?php echo $data['satuan']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input class="form-control" name="harga_beli" value="<?php echo $data['harga_beli']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input class="form-control" name="harga_jual" value="<?php echo $data['harga_jual']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" name="stok" value="<?php echo $data['stok']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input class="form-control" name="deskripsi_barang" value="<?php echo $data['deskripsi_barang']; ?>">
                                        <?php }
                                        ?>
                                        </div>
                                        <input type="submit" name="edit" class="btn btn-success" value="EDIT">
                                        <input type="reset" class="btn btn-danger" value="BATAL">
                            </form>
                            <?php
                            if (isset($_POST['edit'])) {
                                $query = mysqli_query($koneksi, "UPDATE tbl_barang 
                                        set kode_barang='$_POST[kode_barang]', 
                                        nama_barang='$_POST[nama_barang]', 
                                        id_kategori='$_POST[id_kategori]', 
                                        satuan='$_POST[satuan]', 
                                        harga_beli='$_POST[harga_beli]', 
                                        harga_jual='$_POST[harga_jual]', 
                                        tanggal='$_POST[tanggal]', 
                                        stok='$_POST[stok]', 
                                        deskripsi_barang='$_POST[deskripsi_barang]' WHERE id_barang='$_POST[id_barang]'");

                                echo "<script>alert('Data Berhasil Di Edit')
                                        window.location='?page=data_barang&id';
                                        </script>";
                            }
                            ?>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>