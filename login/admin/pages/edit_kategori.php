<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Kategori</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Data Kategori
                </div>
                <div class="panel-body">
                    <?php
                    $kategori = mysqli_query($koneksi, "SELECT * from tbl_kategori WHERE id_kategori='$_GET[id]'");
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST" role="form">
                                <?php
                                while ($data = mysqli_fetch_array($kategori)) {
                                ?>
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="keterangan"> <?php echo $data['keterangan']; ?>
                                            </textarea>
                                    <?php }
                                    ?>
                                    </div>
                                    <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
                                    <input type="reset" class="btn btn-danger" value="BATAL">
                            </form>
                            <?php
                            if (isset($_POST['simpan'])) {
                                $query = mysqli_query($koneksi, "INSERT INTO tbl_kategori set id_kategori='',
                                    nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]'");

                                echo "<script>alert ('Data Berhasil Disimpan!')
                                    window.location='?page=data_kategori';
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