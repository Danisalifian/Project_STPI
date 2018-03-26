<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$target =  "../gambar-bukti/".basename($_FILES['gambar']['name']);

		$no_asuransi = $_POST["no_asuransi"];
		$nit = $_POST["nit"];
		$gambar = $_FILES['gambar']['name'];

		$con->query("INSERT INTO asuransi VALUES ('".$no_asuransi."','".$nit."','".$gambar."')");

		move_uploaded_file($_FILES['gambar']['tmp_name'],$target);
		if (move_uploaded_file($_FILES['gambar']['tmp_name'],$target)) {
			# code...
			$msg = "Image uploaded";
		}else{
			$msg = "Image not uploaded";
		}

		$_SESSION['msg'] = $msg;

	}
	
	header('location: tambah_asuransi.php');
	exit();
?>