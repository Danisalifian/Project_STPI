<?php
	session_start();
	if(isset($_GET["no_asuransi"])){
		include 'koneksi.php';

		$con->query("DELETE FROM asuransi WHERE NO_ASURANSI =".$_GET["no_asuransi"]);
	}
	header('location:view_asuransi.php');
	exit();
?>