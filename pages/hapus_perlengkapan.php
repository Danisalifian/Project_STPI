<?php
	session_start();
	if(isset($_GET["id_paket"])){
		include 'koneksi.php';

		$con->query("DELETE FROM perlengkapan WHERE ID_PAKET =".$_GET["id_paket"]);
	}
	header('location:view_perlengkapan.php');
	exit();
?>