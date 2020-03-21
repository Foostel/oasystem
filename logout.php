<?php 
	session_start();
	if(isset($_SESSION['id']))
	{
		session_destroy();
		header("location:page.php");
		exit();
	}
	else{
		header("location:page.php");
	}
	
 ?>