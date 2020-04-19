<!DOCTYPE html>
<html>
<head>
	<title>
		Reset Password		
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	require'db-connection.php';
	$otp=0;
	session_start();
	if(isset($_SESSION['id']))
	{
		header('location:user-home.php');
	}
	if(isset($_POST['submit']))
	{
	
	$e = $_POST['email'];
	$q= "select * from user where email = '$e'; ";
	$r = mysqli_query($conn,$q);
	
	if(mysqli_num_rows($r)>0)
		{	$_SESSION['OTP'] =rand(11111,99999);
			$_SESSION['EMAIL']=$e;
			$_SESSION['EXPIRY'] = $_SERVER['REQUEST_TIME']+120;
			//sendmail($e,$_SESSION['OTP']);
			echo $_SESSION['OTP'];
		}
		else{
			echo "
				<script>
					alert('Email ID not registered');
					window.location='forgot-password.php';
				</script>
			";
		}
	
	}

	function sendmail($to,$msg)
	{
		require('PHPMailer/PHPMailerAutoload.php');
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='ssl';
		$mail->Host='smtp.gmail.com';
		$mail->Port='465';
		$mail->isHTML();
		$mail->setFrom('Foostel');
		$mail->FromName='Foostel';
		$mail->Username='badshahandhoneysingh100@gmail.com';
		$mail->Password='000121262621762';
		$mail->Subject='Foostel-Reset-Password: OTP';
		$mail->Body="Your OTP is <br> <h3>$msg</h3>";
		$mail->AddAddress($to);
		
		$mail->send();
	}



?>

</head>
<body>
	<div class="section" style="text-align: center;">
		<div id="container" style="position: relative; display: inline-block; top:200px; width: 500px; height: 500px; text-align: center;">
			<p style="display:inline-block;font-size: 25px;color:black;">Verify it's you !</p>
			<form action="reset-password.php" method="post">
			<input class="inputs" type="" autocomplete="off" maxlength="5" name="otp" placeholder="Enter OTP here" style="text-align: center;" required=""><br>
			<input type="submit" class="btn" name="verify" style="width: 200px;" value="Verify">
			</form>
			<br><br>
			<p>Expiring in 2 Minutes</p>
		</div>
	</div>
</body>
</html>