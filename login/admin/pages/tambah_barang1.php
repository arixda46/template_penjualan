<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Barang1</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Data Barang
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input class="form-control" name="kode_barang">
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" name="nama_barang">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <select class="form-control" name="id_kategori">
                                        <?php
                                        $query = mysqli_query($koneksi, "select * from tbl_kategori");

                                        while ($data = mysqli_fetch_assoc($query)) {
                                            echo "<option value=\"$data[id_kategori]\">$data[nama_kategori]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input class="form-control" name="satuan">
                                </div>
                                <div class="form-group">
                                    <label>Harga Beli</label>
                                    <input class="form-control" name="harga_beli">
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <input class="form-control" name="harga_jual">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input class="form-control" name="stok">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
                                <input type="reset" class="btn btn-danger" value="BATAL">
                            </form>
                            <?php
                            if (isset($_POST['simpan'])) {
                                $nama_foto = $_FILES['foto']['name'];
                                $lokasi_foto = $_FILES['foto']['tmp_name'];
                                $tipe_foto = $_FILES['foto']['type'];

                                if ($lokasi_foto == "") {
                                    $query = "INSERT INTO tbl_member 
                    set nama_member='$_POST[nama_member]', 
					nohp='$_POST[nohp]', 
					alamat='$_POST[alamat]', 
					email='$_POST[email]', 
					jenis_kelamin='$_POST[jenis_kelamin]', 
					status='$_POST[status]'";
                                } else {
                                    move_uploaded_file($lokasi_foto, "../images/$nama_foto");
                                    $query = "INSERT INTO tbl_member
					set nama_member='$_POST[nama_member]', 
					nohp='$_POST[nohp]', 
					alamat='$_POST[alamat]', 
					email='$_POST[email]', 
					jenis_kelamin='$_POST[jenis_kelamin]', 
					status='$_POST[status]', 
                    foto='$nama_foto'";

                                    $proses = mysqli_query($koneksi, $query) or die(mysqli_error());
                                }
                                echo "<script>alert('Data Berhasil Di Simpan')
						window.location='?page=data_member';
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