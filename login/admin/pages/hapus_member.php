<?php
mysqli_query($koneksi, "DELETE FROM tbl_member WHERE id_member='$_GET[id]'");

echo "<script>alert ('Data Berhasil Dihapus!')
    window.location='?page=data_member';
    </script>";
