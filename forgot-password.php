<!DOCTYPE html>
<html>
<head>
	<title>
		Reset Password		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	require'db-connection.php';
	session_start();
	if(isset($_SESSION['id']))
	{
		header('location:user-home.php');
	}
?>
</head>
<body>
	<div class="section" style="text-align: center;">
		<div style="position: relative; display: inline-block; top:200px; width: 500px; height: 500px; text-align: center;">
			<p style="display:inline-block;font-size: 25px;color:black;">Reset Password</p>
			<form action="verify-otp.php" method="post">
			<input class="inputs" type="email" name="email" placeholder="Enter your registered email address here" style="text-align: center;" required=""><br>
			<input type="submit" class="btn" name="submit" style="width: 200px;" value="Send OTP">
			</form>
		</div>
	</div>
</body>
</html>