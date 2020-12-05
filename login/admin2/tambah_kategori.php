<?php
    include "koneksi.php"
?>
<html>
   <head>
      <title>Tambah Kategori</title>
   </head>
   <body>
      <center>
         <form action="" method="POST">
         <table>
         <tr>
             <td>Input Data Kategori</td>
         </tr>
         <tr>
            <td>Nama Kategori</td> <td>:</td> 
            <td><input type="text" name="nama_kategori"></td>
         </tr>
         <tr>
            <td>Keterangan</td> <td>:</td> 
            <td><input type="text" name="keterangan"></td>
         </tr>         
         </table>
         <br>
         <tr>
            <td><input type="submit" name ="simpan" value="SIMPAN"></td>
         </tr>
         </form>
         <?php
         if(isset($_POST['simpan'])) {
             $query = mysqli_query($koneksi, "INSERT INTO tbl_kategori set id_kategori='',
             nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]'");

             echo "<script>alert ('Data Berhasil Disimpan!')
             window.location='kategori.php';
             </script>";
         }
         ?>
      </center>
   </body>
</html>