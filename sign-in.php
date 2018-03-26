<?php
	include 'pages/koneksi.php';
		
	$username = $_POST["username"];
	$pass= $_POST["pass"];

	if(!empty($username) && !empty($pass)) {
		$query = mysqli_query($con,"SELECT * FROM admin WHERE USERNAME='$username' AND PASSWORD='$pass'");
		$result = mysqli_num_rows($query);
		if($result){
			header('location:dashboard.php');
		} else {
			header('location:index.php');
		}
	}
?>