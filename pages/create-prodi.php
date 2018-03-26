<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_prodi = $_POST["id_prodi"];
		$nama_prodi = $_POST["nama_prodi"];


		$con->query("INSERT INTO prodi VALUES ('".$id_prodi."','".$nama_prodi."')");

		$_SESSION['msg'] = $msg;

	}
	
	header('location: tambah_prodi.php');
	exit();
?>