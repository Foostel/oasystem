<!DOCTYPE html>
<html>
<head>
	<title>
		Reset Password		
	</title>
	<script type="text/javascript" src="actions.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	$e = '';
		if(isset($_POST['verify']))
	{	session_start();
		if($_SESSION['OTP']!=$_POST['otp'])
		{	
			session_destroy();
			echo"
			<script>
				alert('Invalid OTP');
				window.location='sign-in.php';
			</script>
			";
		}
		else{
			$e = $_SESSION['EMAIL'];
		}
	}


	if(isset($_POST['reset']))
	{
		$newpass = $_POST['password'];
		//Your code here, update into database (password) identify row using email, by MD5 encryption.


		
	}
?>

<script type="text/javascript">
	function chk(){
		if(passC()>2)
		{
			if(document.getElementById('pass1').value==document.getElementById('pass2').value)
			{
				return true;
			}
			else{
				alert("Passwords doesn'nt match");
				return false;
			}
		}
		else{
			alert('Password is too weak');
			return false;
		}
	}
</script>
</head>
<body>
	<div class="section" style="text-align: center;">
		<div style="position: relative; display: inline-block; top:200px; width: 500px; height: 500px; text-align: center;">
			<p style="display:inline-block;font-size: 25px;color:black;">Reset Password</p>
			<form action="" method="post" onsubmit="return chk();">
			<input class="inputs" type="password" id="pass1" name="password" placeholder="Create password" style="text-align: center;" required="" onkeyup="passC();"><br>
			<input class="inputs" type="password" id="pass2" name="pas" placeholder="Confirm password" style="text-align: center;" required="">
			<input type="submit" class="btn" name="reset" style="width: 200px;" value="Reset Password">
			</form>
		</div>
	</div>
</body>
</html>