<?php
    include "koneksi.php";
    mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kategori='$_GET[id]'");

    echo "<script>alert ('Data Berhasil Dihapus!')
    window.location='kategori.php';
    </script>";
?>