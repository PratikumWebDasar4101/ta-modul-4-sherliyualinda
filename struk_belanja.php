<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Struk Belanja</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
		<center>
			<table>
				<tr>
					<td><?php echo $_SESSION['username']; ?></td>
					<td align="right"><?php echo date("d/m/Y"); ?></td>
				</tr>
				<tr>
					<td>Pengiriman</td>
					<td><?php echo $_SESSION['jasa_pengirim']; ?></td>
				</tr>
				<?php 
				foreach ($_SESSION['barang'] as $value) {
				?>
				<tr>
					<td colspan="2" align="right"><?php echo $value; ?></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
				<tr>
					<td>Total</td>
					<td align="right"><?php echo $_SESSION['total']; ?></td>
				</tr>
				<tr>
					<td><a href="logout.php">LogOut</a></td>
				</tr>
			</table>
		</center>

	</body>
</html>