<?php 
session_start();
		if(!isset($_SESSION['id']))
		{
			header("location:page.php");
		}
		//code to retrive user profile using session veriable index 'userID'
		require 'db-connection.php';
		$id=$_SESSION['id'];
		$q= "select * from user where id='$id'";
		$result = mysqli_query($conn,$q)->fetch_assoc();
		$fname=$result['fname'];
		$lname=$result['lname'];
		$gender=$result['gender'];
		$age=$result['age'];
		$phone=$result['phone'];
		$email=$result['email'];
		$pp=$result['pp'];
		$r = $result['r'];
		$h = $result['h'];
		$t = $result['t'];
		$name = $fname." ".$lname;
 ?>