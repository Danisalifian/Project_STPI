<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_jurusan = $_POST["id_jurusan"];
		$nama_jurusan = $_POST["nama_jurusan"];


		$con->query("INSERT INTO jurusan VALUES ('".$id_jurusan."','".$nama_jurusan."')");

		$_SESSION['msg'] = $msg;

	}
	
	header('location: tambah_jurusan.php');
	exit();
?>