<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<br>
	
	<center>
		<form action="proses_belanja.php" method="POST">
			<table>
				<tr>
					<td>
						<label>DAFTAR BARANG BELANJAAN</label>
					</td>
					<td>
						<input type="checkbox" name="barang[]" value="Minyak">Minyak<br>
						<input type="checkbox" name="barang[]" value="Sabun">Sabun<br>
						<input type="checkbox" name="barang[]" value="Pasta Gigi">Pasta Gigi<br>
						<input type="checkbox" name="barang[]" value="Parfum">Parfum<br>
						<input type="checkbox" name="barang[]" value="Lada">Lada<br>
						<input type="checkbox" name="barang[]" value="Cabai">Cabai<br>
						<input type="checkbox" name="barang[]" value="Bayam">Bayam
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td>
						<label>JENIS PENGIRIMAN</label>
					</td>
					<td>
						<input type="radio" name="jenis_pengiriman" value="Tiki">Tiki<br>
						<input type="radio" name="jenis_pengiriman" value="JNE">JNE<br>
						<input type="radio" name="jenis_pengiriman" value="SiCepat">SiCepat<br>
						<input type="radio" name="jenis_pengiriman" value="Pos">Pos<br>
						
					</td>
				</tr>
				<tr>
					<td>
						<label>ALAMAT</label>
					</td>
					<td>
						<textarea name="alamat" placeholder="Alamat"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
</body>
</html>