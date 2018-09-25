<?php
session_start();
//$_SESSION ['id']= isset($_SESSION['id']) ? $_SESSION['id']++ : 0;
if (isset($_POST['submit'])) {
	//foto
	$file_name =$_FILES['foto']['name'];
	$tmp_name =$_FILES ['foto']['tmp_name'];
	$file_move_success = move_uploaded_file($tmp_name, 'terkirim/'.$file_name);
	
	if ($file_move_success) {
		$hobby = $_POST['hobby'];
		$_SESSION['hobby'] = $hobby;

		$wisata = $_POST['wisata'];
		$_SESSION['wisata'] = $wisata;
		
		$genre = $_POST ['genre'];
		$_SESSION['genre']=$genre;
		
		$_SESSION['foto'] = 'terkirim/'.$file_name;
		header('location: halaman_akhir.php');
	}
}
?>