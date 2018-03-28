<?php
	session_start();
	if(isset($_POST["simpan"])){
		include 'koneksi.php';

		$nit = $_POST["nit"];
		$nama= $_POST["nama"];
		$tmp_lahir= $_POST["tmp_lahir"];
		$tgl_lahir = $_POST["tgl_lahir"];
		$agama = $_POST["agama"];
		$j_kel = $_POST["j_kel"];
		$gol_darah = $_POST["gol_darah"];
		$tg_badan = $_POST["tg_badan"];
		$br_badan = $_POST["br_badan"];
		$alamat = $_POST["alamat"];
		$kd_pos = $_POST["kd_pos"];
		$kelurahan = $_POST["kelurahan"];
		$kecamatan = $_POST["kecamatan"];
		$kota = $_POST["kota"];
		$provinsi = $_POST["provinsi"];
		$no_telp = $_POST["no_telp"];
		$no_ktp = $_POST["no_ktp"];
		$no_kk = $_POST["no_kk"];
		$email = $_POST["email"];
		$prodi = $_POST["prodi"];
		$kelas = $_POST["kelas"];
		$jurusan = $_POST["jurusan"];
		$angkatan = $_POST["angkatan"];
		$status = $_POST["status"];
		$nama_asrama = $_POST["nama_asrama"];
		$kamar = $_POST["kamar"];

		



		

		$con->query("INSERT INTO taruna VALUES ('".$nit."','".$nama."','".$tmp_lahir."','".$tgl_lahir."','".$agama."','".$j_kel."','".$gol_darah."','".$tg_badan."','".$br_badan."','".$alamat."','".$kd_pos."','".$kelurahan."','".$kecamatan."','".$kota."','".$provinsi."','".$no_telp."','".$no_ktp."','".$no_kk."','".$email."','".$prodi."','".$kelas."','".$jurusan."','".$angkatan."','".$status."','".$nama_asrama."','".$kamar."')");
		//$_SESSION['message'] = $message;

	}
	
	header('location: tambah_taruna.php');
	exit();
?>