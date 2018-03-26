<?php
	session_start();
	if(isset($_GET["id_trans"])){
		include 'koneksi.php';

		$con->query("DELETE FROM trans_perlengkapan WHERE ID_TRANS =".$_GET["id_trans"]);
	}
	header('location:view_trans_perlengkapan.php');
	exit();
?>