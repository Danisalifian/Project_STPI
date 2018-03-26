<?php	
 session_start();
 if(!isset($_GET["id_paket"])){
 	header("location:view_perlengkapan.php");
 	exit();
 }

 include 'koneksi.php';

 $id_paket = $_GET["id_paket"];
 $getData = $con->query("SELECT * FROM perlengkapan WHERE ID_PAKET = ".$id_paket);

 if($getData->num_rows==0){
 	header("location:view_perlengkapan.php");
 	exit();
 }

 $getData = $getData->fetch_assoc();

 ?>
<DOCTYPE html>
<html>
<head>
	<title>Perbarui Data Perlengkapan</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
</head>
<body>
	<?php if (isset($_SESSION['msg'])): ?>
		<div class="pesan">
			<?php 
				echo $_SESSION['msg']; 
				unset($_SESSION['msg']);
			?>
		</div>
	<?php endif ?>

	<form method="post" action="update-perlengkapan.php">
		<class="collection-header"><h4 align="center">Perbarui Data Perlengkapan</h4>	
		<div class="input-field col s6">
          <input disabled id="id_paket" type="text" class="validate" name="id_paket" value="<?=$getData["ID_PAKET"]?>">
          <label for="id_paket">Id Paket</label>
        </div>
        <div class="input-field col s6">
          <input id="detail" type="text" class="validate" name="detail" value="<?=$getData["DETAIL"]?>">
          <label for="detail">Detail</label>
        </div>
        
		
		<div class="input-group">
			<button type="submit" name="simpan" class="btn">Simpan</button>
		</div>
	</form>
	<?php
	if(isset($_SESSION["message"])){
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
		}
	?>	
</body>
</html>