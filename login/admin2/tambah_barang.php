<?php
	include "koneksi.php";
?>
<html>
<head>
	<title>Input Data Barang</title>
	</head>
	<body>
	<center>
	<form action="" method="POST">
	<table border="0" cellpadding="3">
	<tr>
		<td colspan="3"><center>Input Data Barang</center></td>
	</tr>
<tr>
	<td>Kode Barang</td>
	<td>:</td>
	<td><input width="" type="text" name="kode_barang"></td>
</tr>
<tr>
	<td>Nama Barang</td>
	<td>:</td>
	<td><input width="" type="text" name="nama_barang"></td>
</tr>
<tr>
	<td>Nama Kategori</td>
	<td>:</td>
	<td><select name="id_kategori">
		<?php
			$query = mysqli_query($koneksi,"select * from tbl_kategori");
		
		while($data = mysqli_fetch_assoc($query)) {
			echo "<option value=\"$data[id_kategori]\">$data[nama_kategori]</option>";
		}
		?>
		</select>
	</td>
	<br></br>
</tr>
<tr>
	<td>Satuan</td>
	<td>:</td>
	<td><input type="text" name="satuan"></td>
</tr>
<tr>
	<td>Harga Beli</td>
	<td>:</td>
	<td><input type="text" name="harga_beli"></td>
</tr>
<tr>
	<td>Harga Jual</td>
	<td>:</td>
	<td><input type="text" name="harga_jual"></td>
</tr>
<tr>
	<td>Tanggal</td>
	<td>:</td>
	<td><input type="date" name="tanggal"></td>
</tr>
<tr>
	<td>Stok</td>
	<td>:</td>
	<td><input type="text" name="stok"></td>
</tr>
</table>
<br>
<input type="submit" name="simpan" value="SIMPAN">
	</form>
		<?php 
			if(isset($_POST['simpan'])){
				$query = mysqli_query($koneksi,"INSERT INTO tbl_barang 
					set id_barang='', 
					kode_barang='$_POST[kode_barang]', 
					nama_barang='$_POST[nama_barang]', 
					id_kategori='$_POST[id_kategori]', 
					satuan='$_POST[satuan]', 
					harga_beli='$_POST[harga_beli]', 
					harga_jual='$_POST[harga_jual]', 
					tanggal='$_POST[tanggal]', 
					stok='$_POST[stok]'");
				echo "<script>alert('Data Berhasil Di Simpan')
						window.location='barang.php';
						</script>";
			}
		?>
	</body>
</html>
