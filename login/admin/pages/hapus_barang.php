<?php
mysqli_query($koneksi, "DELETE FROM tbl_barang WHERE id_barang='$_GET[id]'");

echo "<script>alert ('Data Berhasil Dihapus!')
    window.location='?page=data_barang';
    </script>";
