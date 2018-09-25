<?php
	session_start();
?>
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
	<br>
	<center>
	<!-- Tabel Hobby -->
	<table>
		<tr>
			<td>
				<img src="<?php echo $_SESSION['foto']; ?>" width="200">
			</td>
		</tr>
		<tr>
			<th>HOBBY</th>
		</tr>
		<?php
		$data_hobby =$_SESSION['hobby'];
		foreach ($data_hobby as $value) {
		?>
		<tr>
			<td>
				<?php echo $value; ?>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<th>GENRE FILM</th>
		</tr>
		<?php
		$data_genre =$_SESSION['genre'];
		foreach ($data_genre as $value) {
		?>
		<tr>
			<td>
				<?php echo $value; ?>		
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<th>WISATA</th>
		</tr>
		<?php
		$data_wisata = $_SESSION['wisata'];
		foreach ($data_wisata as $value) {
		?>
		<tr>
			<td>
				<?php echo $value; ?>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<a href="logout.php">LogOut</a>
</body>
</html>
<?php

if (isset($_POST['delete()']) && isset($_POST['index'])) {
	// array_splice($array, 2, 1);
}
?>