<?php
	$con = new mysqli('localhost','root','','db_stpi');
	if(!$con){
		echo "Connection Error!";
		exit();
	}
?>