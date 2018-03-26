<?php
	session_start();
	if(isset($_GET["nit"])){
		include 'koneksi.php';

		$con->query("DELETE FROM taruna WHERE NIT =".$_GET["nit"]);
	}
	header('location:view_taruna.php');
	exit();
?>