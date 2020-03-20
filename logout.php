<?php 
	session_start();
	if($_SESSION['active'])
	{
	session_destroy();
	header("location:page.php");
	exit();
	}
	else{
		header("location:page.php");
	}
	
 ?>