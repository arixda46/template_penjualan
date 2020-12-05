<?php
    include "koneksi.php"
?>
<html>
   <head>
      <title>Tambah Member</title>
   </head>
   <body>
      <center>
         <form action="" method="POST">
         <table>
         <tr>
             <td>Input Data Member</td>
         </tr>
         <tr>
            <td>Nama Member</td> <td>:</td> 
            <td><input type="text" name="nama_member"></td>
         </tr>
         <tr>
            <td>No HP</td> <td>:</td> 
            <td><input type="text" name="nohp"></td>
         </tr>
         <tr>
            <td>Alamat</td> <td>:</td> 
            <td><input type="text" name="alamat"></td>
         </tr>
         <tr>
            <td>Email</td> <td>:</td> 
            <td><input type="text" name="email"></td>
         </tr>
         <tr>
            <td>Jenis Kelamin</td> <td>:</td> 
            <td><select name="jenis_kelamin">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
            </td>
        <tr>
            <td>Status</td> <td>:</td> 
            <td><select name="status">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
                </select></td>
         </tr>
         </tr>         
         </table>
         <br>
         <tr>
            <td><input type="submit" name ="simpan" value="SIMPAN"></td>
         </tr>
        </form>
        <?php 
			if(isset($_POST['simpan'])){
				$query = mysqli_query($koneksi,"INSERT INTO tbl_member 
					set id_member='', 
					nama_member='$_POST[nama_member]', 
					nohp='$_POST[nohp]', 
					alamat='$_POST[alamat]', 
					email='$_POST[email]', 
					jenis_kelamin='$_POST[jenis_kelamin]', 
					status='$_POST[status]'");
				echo "<script>alert('Data Berhasil Di Simpan')
						window.location='member.php';
						</script>";
			}
		?>
      </center>
   </body>
</html>