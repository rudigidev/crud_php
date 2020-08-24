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

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data produk baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>					
			</tr>	
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga"></td>					
			</tr>
                        <tr>
                                <td>jumlah</td>
                                <td><input type="number" name="jumlah"></td>	
                        </tr>

       			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
