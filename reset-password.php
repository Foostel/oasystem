<!DOCTYPE html>
<html>
<head>
	<title>
		Reset Password		
	</title>
	<script type="text/javascript" src="actions.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
	require'user-data.php';
	if(isset($_SESSION['id']))
	{
		$_SESSION['EMAIL'] = $email;
		
	} 
		if(isset($_POST['verify']))
	{		
		if($_SESSION['OTP']!=$_POST['otp'] || $_SESSION['EXPIRY']<$_SERVER['REQUEST_TIME'])
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
			echo $_SESSION['EMAIL'];
		}
	}


	if(isset($_POST['reset']))
	{	$f = 1;
		$newpass = $_POST['password'];
		//Your code here, update into database (password) identify row using email, by MD5 encryption.
		if(isset($_SESSION['id']))
		{	

			if($password!=md5($_POST['curpass']))
			{	$f=0;
				echo"<script>alert('Wrong current password');</script>
				";
			}else{
				echo"<script>alert('will be update...');</script>
				";
			}
		}
		$newpass=md5($newpass);
		$e = $_SESSION['EMAIL'];
		$q = "update user set password = '$newpass' where email = '$e';";
		if($f)
		{
		$r = mysqli_query($conn,$q);	
		if($r)
		{
			echo"
			<script>alert('password updated successfully');
			window.location='user-home.php';
			</script>
			";
		}
		else{
			echo"
			<script>alert('There is some issues while updating password');
			</script>
			";	
		}

		}
		
	}
	if(isset($_POST['forgot']))
	{
		session_destroy();
		header('location:forgot-password.php');
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
	function cnf()
	{
		return confirm('You will be logged out ?');
	}
</script>
</head>
<body>
	<div class="section" style="text-align: center;">
		<div style="position: relative; display: inline-block; top:200px; width: 500px; height: 500px; text-align: center;">
			<p style="display:inline-block;font-size: 25px;color:black;">Reset Password</p>
			<form action="" method="post" onsubmit="return chk();">
			<span id="curpw"><?php if(isset($_SESSION['id'])){echo"
		<input class='inputs' type='password' id='curpass' name='curpass' placeholder='Current password' style='text-align: center;' required=''>
		";} ?></span>
			<input class="inputs" type="password" id="pass1" name="password" placeholder="Create password" style="text-align: center;" required="" onkeyup="passC();"><br>
			<input class="inputs" type="password" id="pass2" name="pas" placeholder="Confirm password" style="text-align: center;" required="">
			<input type="submit" class="btn" name="reset" style="width: 200px;" value="Reset Password">
			</form>
			<br><?php if(isset($_SESSION['id'])){echo"<form action='' method = 'post' onsubmit='return cnf();'><button style='cursor:pointer;border-style:none;' type='submit' name='forgot'>Forgot password?</button></form>";} ?>
		</div>
	</div>
</body>
</html>