<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_paket = $_POST["id_paket"];
		$detail = $_POST["detail"];


		$con->query("INSERT INTO perlengkapan VALUES ('".$id_paket."','".$detail."')");

		$_SESSION['msg'] = $msg;

	}
	
	header('location: tambah_perlengkapan.php');
	exit();
?>