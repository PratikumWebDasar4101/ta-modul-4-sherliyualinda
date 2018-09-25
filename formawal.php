<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<center><form action="formawal.php" method="POST">
		<table>
			<tr>
				<td>Login</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td>
					<input type="radio" name="tujuan" value="data"> Mengisi Data<br>
					<input type="radio" name="tujuan" value="belanja"> Belanja
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>			
	</form>

</body>
</html>

<?php
session_start();
$data = array(
			array(
				"id"=>"1",
				"username"=>"sherli",
				"password"=>"sherli",
				"akses"=>"admin"	
			),
			array(
				"id"=>"2",
				"username"=>"sherla",
				"password"=>"scorpio19",
				"akses"=>"user"	
			)
		);
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$num = 0;
	$data_valid = 0;
	while($num < count($data)){
		if($username == $data[$num]['username'] && $password == $data[$num]['password'] ){
			$_SESSION['username'] = $username;
			$_SESSION['akses'] = $data[$num]['akses'];
			$_SESSION['id'] = $data[$num]['id'];
			$data_valid = 1;
		}
		$num++;
	}
	if ($data_valid < 1) {
		echo "Login Gagal";
	} else {
		if(isset($_POST['tujuan'])){
			if ($_POST['tujuan'] == "data") {
				header('location: proses_login.php');
			} else if ($_POST['tujuan'] == "belanja"){
				header('location: halaman_belanja.php');
			}
		} else {
			echo "Silakan Pilih Tujuan Anda";
		}
	}
}

?>