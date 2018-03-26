<?php
	session_start();
	if(isset($_GET["id_prodi"])){
		include 'koneksi.php';

		$con->query("DELETE FROM prodi WHERE ID_PRODI =".$_GET["id_prodi"]);
	}
	header('location:view_prodi.php');
	exit();
?>