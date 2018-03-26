<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$no_asuransi = $_POST["no_asuransi"];
		$nit = $_POST["nit"];

		$con->query("UPDATE asuransi SET NIT = '".$nit."' WHERE NO_ASURANSI =".$no_asuransi);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_asuransi.php');
	exit();
?>