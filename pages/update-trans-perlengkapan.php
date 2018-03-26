<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_trans = $_POST["id_trans"];
		$nit = $_POST["nit"];
		$id_paket = $_POST["id_paket"];
		$kelas = $_POST["kelas"];

		$con->query("UPDATE trans_perlengkapan SET NIT = '".$nit."',ID_PAKET = '".$id_paket."',KELAS = '".$kelas."' WHERE ID_TRANS =".$id_trans);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_trans_perlengkapan.php');
	exit();
?>