<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_paket = $_POST["id_paket"];
		$detail = $_POST["detail"];

		$con->query("UPDATE perlengkapan SET DETAIL = '".$detail."' WHERE ID_PAKET =".$id_paket);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_perlengkapan.php');
	exit();
?>