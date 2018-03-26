<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$id_jurusan = $_POST["id_jurusan"];
		$nama_jurusan = $_POST["nama_jurusan"];

		$con->query("UPDATE jurusan SET NAMA_JURUSAN = '".$nama_jurusan."' WHERE ID_JURUSAN =".$id_jurusan);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_jurusan.php');
	exit();
?>