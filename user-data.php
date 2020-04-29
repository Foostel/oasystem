<?php 	
	session_start();
		require 'db-connection.php';
		if(isset($_SESSION['id']))
		{
		//code to retrive user profile using session veriable index 'userID'
		
		$id=$_SESSION['id'];
		$q= "select * from user where id='$id'";
		$result = mysqli_query($conn,$q)->fetch_assoc();
		$fname=$result['fname'];
		$lname=$result['lname'];
		$gender=$result['gender'];
		$age=$result['age'];
		$phone=$result['phone'];
		$email=$result['email'];
		$password = $result['password'];
		$pp=$result['pp'];
		$name = $fname." ".$lname;

	}
 ?>