<?php session_start();?>
<DOCTYPE html>
<html>
<head>
	<title>Tampil Data Perlengkapan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<class="collection-header"><h4 align="center">Data Pengambilan Perlengkapan</h4>
	<table>
		<thead>
			<tr>
				<th>Nomor Induk Taruna</th>
				<th>Id Paket</th>
				<th>Kelas</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$getTrans_Perlengkapan = $con->query("SELECT * FROM trans_perlengkapan"); 
			while ($fetchTrans_Perlengkapan = $getTrans_Perlengkapan->fetch_assoc()){ ?>
				<tr>
				<td><?=$fetchTrans_Perlengkapan['NIT']?></td>
				<td><?=$fetchTrans_Perlengkapan['ID_PAKET']?></td>
				<td><?=$fetchTrans_Perlengkapan['KELAS']?></td>
				<td>
					<a href="perbarui_trans_perlengkapan.php?nit=<?=$fetchTrans_Perlengkapan["NIT"]?>">Ubah</a>
				</td>
				<td>
					<a href="hapus_trans_perlengkapan.php?nit=<?=$fetchTrans_Perlengkapan["NIT"]?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>	
</body>
</html>