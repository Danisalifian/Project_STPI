<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$nit = $_POST["nit"];
		$id_paket = $_POST["id_paket"];
		$kelas = $_POST["kelas"];


		$con->query("INSERT INTO trans_perlengkapan (NIT,ID_PAKET,KELAS,TGL) VALUES ('".$nit."','".$id_paket."','".$kelas."',CURDATE())");

		$_SESSION['msg'] = "Data Tersimpan";

	}
	
	header('location: view_trans_perlengkapan.php');
	exit();
?>