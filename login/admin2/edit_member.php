<?php
    include "koneksi.php"
?>
<html>
   <head>
      <title>Edit Member</title>
   </head>
   <body>
   <?php
        $member = mysqli_query($koneksi, "SELECT * from tbl_member WHERE id_member='$_GET[id]'");
    ?>
      <center>
        <form action="" method="POST">
        <table>
        <tr>
            <td>Edit Data Member</td>
         </tr>
        <?php   
            while ($data = mysqli_fetch_array($member)) {
        ?>
        <input type="hidden" name="id_member" value="<?php echo $data['id_member']; ?>">
        <tr><td>Nama member</td> 
            <td>:</td> 
            <td><input type="text" name="nama_member" value="<?php echo $data['nama_member']; ?>"></td>
        </tr>
        <tr><td>No HP</td> <td>:</td> 
            <td><input type="text" name="nohp" value="<?php echo $data['nohp']; ?>"></td>
        </tr>     
        <tr>
            <td>Alamat</td> <td>:</td> 
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td> <td>:</td> 
            <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td> <td>:</td> 
            <td><select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select></td>
         </tr>
        <tr>
            <td>Status</td> <td>:</td> 
            <td><select name="status" value="<?php echo $data['status']; ?>">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
                </select></td>
         </tr>
            <?php }
        ?>    
         </table>
         <br>
         <tr><td><input type="submit" name ="edit" value="EDIT"></td></tr>
         </form>
         <?php 
			if(isset($_POST['edit'])){
				$query = mysqli_query($koneksi,"UPDATE tbl_member 
					set nama_member='$_POST[nama_member]', 
					nohp='$_POST[nohp]', 
					alamat='$_POST[alamat]', 
					email='$_POST[email]', 
					status='$_POST[status]'
                    WHERE id_member='$_POST[id_member]'");
                    echo "<script>alert('Data Berhasil Di Edit')
                    window.location='member.php';
                    </script>";
			}
		?>
      </center>
   </body>
</html>