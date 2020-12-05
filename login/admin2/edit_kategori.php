<?php
    include "koneksi.php"
?>
<html>
   <head>
      <title>Edit Kategori</title>
   </head>
   <body>
   <?php
        $kategori = mysqli_query($koneksi, "SELECT * from tbl_kategori WHERE id_kategori='$_GET[id]'");
    ?>
      <center>
         <form action="" method="POST">
         <table>
         <tr>
             <td>Edit Data Kategori</td>
         </tr>
         <?php   
            while ($data = mysqli_fetch_array($kategori)) {
        ?>
            <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
         <tr><td>Nama Kategori</td> <td>:</td> 
             <td><input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>"></td></tr>
         <tr><td>Keterangan</td> <td>:</td> 
            <td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td></tr>     
            <?php }
        ?>    
         </table>
         <br>
         <tr><td><input type="submit" name ="edit" value="EDIT"></td></tr>
         </form>
         <?php
         if(isset($_POST['edit'])) {
             $query = mysqli_query($koneksi, "UPDATE tbl_kategori set
             nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]'
            WHERE id_kategori='$_POST[id_kategori]'");

             echo "<script>alert ('Data Berhasil Disimpan!')
             window.location='kategori.php';
             </script>";
         }
         ?>
      </center>
   </body>
</html>