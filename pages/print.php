<?php
	session_start();
	if(isset($_POST["nit"])){
	include 'koneksi.php';
	require '../fpdf/fpdf.php';

	$nit = $_POST["nit"];
	$getTaruna = $con->query("SELECT * FROM view_data_taruna WHERE NIT=".$nit);
	$getTaruna = $getTaruna->fetch_assoc();

	$pdf = new FPDF('p','mm','A4');
	$pdf->AddPage();

	//-- Header --
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(200,5,'Sekolah Tinggi Penerbangan Indonesia',2,1,'C');
	$pdf->Ln();$pdf->Ln();
	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(200,5,'Data Taruna',2,1,'C');
	$pdf->Ln();$pdf->Ln();


	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,5,'Nomor Induk Taruna',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NIT'],2,1,'L');$pdf->Ln();

	$pdf->Cell(70,5,'Nama Taruna',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NAMA'],2,1,'L');$pdf->Ln();

	$pdf->Cell(70,5,'Tempat Lahir',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['TMP_LAHIR'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Tanggal Lahir',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['TGL_LAHIR'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Jenis Kelamin',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['J_KEL'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Golongan Darah',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['GOL_DARAH'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Tinggi Badan',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['TG_BADAN'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Berat Badan',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['BR_BADAN'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Alamat',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['ALAMAT'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kode Pos',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KD_POS'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kelurahan',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KELURAHAN'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kecamatan',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KECAMATAN'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kota/Kabupaten',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KOTA'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Provinsi',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NAMA_PROV'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Nomor Telepon',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NO_TELP'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Nomor KTP',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NO_KTP'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Nomor Kartu Keluarga',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NO_KK'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Email',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['EMAIL'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Program Studi',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NAMA_PRODI'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Jurusan',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NAMA_JURUSAN'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kelas',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KELAS'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Tingkat',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['TINGKAT'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Nama Asrama',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['NAMA_ASRAMA'],2,1,'L');$pdf->Ln();
	
	$pdf->Cell(70,5,'Kamar',2,0,'L');
	$pdf->Cell(70,5,$getTaruna['KAMAR'],2,1,'L');$pdf->Ln();



}
	$pdf->Output();
?>