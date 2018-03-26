<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_prodi = $_POST["id_prodi"];
		$nama_prodi = $_POST["nama_prodi"];

		$con->query("UPDATE prodi SET NAMA_PRODI = '".$nama_prodi."' WHERE ID_PRODI =".$id_prodi);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_prodi.php');
	exit();
?>