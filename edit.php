<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Tambah Produk</h2>
	</div>
	
	<br/>

	<a href="index.php">Kembali</a>

	<br/>
	<h3>Edit data produk baru</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from produk where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama Produk</td>
				<td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
                </td>					
			</tr>	
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>					
			</tr>
            <tr>
                <td>jumlah</td>
                <td><input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>	
            </tr>

       			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>					
			</tr>				
		</table>
	</form>
    <?php 
    }
    ?>
</body>
</html>
