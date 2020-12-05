<?php
    include "koneksi.php";
    mysqli_query($koneksi, "DELETE FROM tbl_barang WHERE id_barang='$_GET[id]'");

    echo "<script>alert ('Data Berhasil Dihapus!')
    window.location='barang.php';
    </script>";
?>