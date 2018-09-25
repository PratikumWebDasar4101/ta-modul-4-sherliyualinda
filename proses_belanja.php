<?php
session_start();
if (isset($_POST['submit'])) {
	$barang = isset($_POST['barang']) ? $_POST['barang'] : "";
	$pengiriman = isset($_POST['jenis_pengiriman']) ? $_POST['jenis_pengiriman'] : "";
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
	$data_barang = array(
				'Minyak' => 7000,
				'Sabun' => 3000,
				'Pasta Gigi' => 5000,
				'Parfum' => 20000,
				'Lada' => 10000,
				'Cabai' => 20000,
				'Bayam' => 3000
			);
	$data_jasa_pengiriman = array(
							'Tiki' => 10000,
							'JNE' => 12000,
							'SiCepat' => 14000,
							'Pos' => 16000
						);
	function hitung_belanjaan($data_belanjaan){
		global $data_barang;
		$total = 0;
		foreach ($data_belanjaan as $value) {
			$total += $data_barang[$value];
		}
		return $total;
	}
	$_SESSION['barang'] = $barang;
	$_SESSION['jasa_pengirim'] = $pengiriman . ' Harga : Rp' .$data_jasa_pengiriman[$pengiriman];
	$total = hitung_belanjaan($barang) + $data_jasa_pengiriman[$pengiriman];
	$_SESSION['total'] = $total;
	header("location: struk_belanja.php");
}
?>