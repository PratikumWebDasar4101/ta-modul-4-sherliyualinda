<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><form action="proses.php" method="POST" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<td>
					<label>HOBBY </label>
				</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Menulis">Menulis
					<input type="checkbox" name="hobby[]" value="Membaca">Membaca
					<input type="checkbox" name="hobby[]" value="Makan">Makan
					<input type="checkbox" name="hobby[]" value="Tidur">Tidur
					<input type="checkbox" name="hobby[]" value="Belajar">Belajar<br>
					<input type="checkbox" name="hobby[]" value="Berenang">Berenang
					<input type="checkbox" name="hobby[]" value="Basket">Basket
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton
					<input type="checkbox" name="hobby[]" value="Nonton">Nonton
				</td>
			</tr>
			<tr>
				<td>
					<label>Upload Foto </label>
				</td>
				<td>
					<input type="file" name="foto">
				</td>
			</tr>
			<tr>
				<td>
					<label>GENRE FILM </label>
				</td>
				<td>
					<input type="checkbox" name="genre[]" value="Horor">Horor<br>
					<input type="checkbox" name="genre[]" value="Action">Action<br>
					<input type="checkbox" name="genre[]" value="Anime">Anime<br>
					<input type="checkbox" name="genre[]" value="Thrille">Thrille<br>
					<input type="checkbox" name="genre[]" value="Animasi">Animasi
				</td>
			</tr>
			<tr>
				<td>
					<label>TEMPAT WISATA TUJUAN TRAVELLING  </label>
				</td>
				<td>
					<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
					<input type="checkbox" name="wisata[]" value="Raja  Ampat">Raja Ampat<br>
					<input type="checkbox" name="wisata[]" value="Pulau  Derawan">Pulau Derawan<br>
					<input type="checkbox" name="wisata[]" value="BangkaBelitung">Bangka Belitung<br>
					<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo
				</td>
			</tr>
			<tr>
				<td><br></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
			<a href="logout.php">LogOut</a>

		</table>
		
		
	</form>
</body>
</html>