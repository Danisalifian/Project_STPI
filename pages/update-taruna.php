<?php
	session_start();
	if(isset($_POST["perbarui"])){
		include 'koneksi.php';

		$nit = $_POST["nit"];
		$nama= $_POST["nama"];
		$tmp_lahir= $_POST["tmp_lahir"];
		$tgl_lahir = $_POST["tgl_lahir"];
		$j_kel = $_POST["j_kel"];
		$agama = $_POST["agama"];
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

		$con->query("UPDATE taruna SET NAMA = '".$nama."',TMP_LAHIR ='".$tmp_lahir."',TGL_LAHIR ='".$tgl_lahir."',AGAMA ='".$agama."',J_KEL ='".$j_kel."',GOL_DARAH ='".$gol_darah."',TG_BADAN ='".$tg_badan."',BR_BADAN ='".$br_badan."',ALAMAT ='".$alamat."',KD_POS ='".$kd_pos."',KELURAHAN ='".$kelurahan."',KECAMATAN ='".$kecamatan."',kota='".$kota."',ID_PROV ='".$provinsi."',NO_TELP ='".$no_telp."',NO_KTP ='".$no_ktp."',NO_KK ='".$no_kk."',EMAIL ='".$email."',ID_PRODI ='".$prodi."',KELAS ='".$kelas."',ID_JURUSAN ='".$jurusan."',ANGKATAN ='".$angkatan."',STATUS ='".$status."',NAMA_ASRAMA ='".$nama_asrama."',KAMAR ='".$kamar."' 
			WHERE NIT =".$nit);

		$_SESSION['msg'] = $msg;

	}
	
	header('location: view_taruna.php');
	exit();
?>