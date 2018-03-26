<?php
	session_start();
	if(isset($_GET["id_jurusan"])){
		include 'koneksi.php';

		$con->query("DELETE FROM jurusan WHERE ID_JURUSAN =".$_GET["id_jurusan"]);
	}
	header('location:view_jurusan.php');
	exit();
?>