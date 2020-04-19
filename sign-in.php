<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
        session_start();
        if(isset($_SESSION['id']))
        {
            header("location:user-home.php");
        }
     ?>
</head>
<body>
<div class="section">
	<div style="text-align: center; margin-left: 0%;" class="container">
	<p style="display:inline-block;font-size: 25px;color:black;">Sign In</p><img src="oas-logo.svg" style=" display:inline-block;height: 50px; margin-top: 10px;">
			<form action="" method="post">
			
			<input style="border:solid; border-width: 1.5px; height: 30px; width: 200px; font-family: segoe UI;" class="inputs" type="" name="e-mail" placeholder="Email" required="true"><br>
        <input style="border:solid;border-width: 1.5px;  height: 30px; width: 200px;" class="inputs" type="password" name="pass" placeholder="Password"><br>
        <input id="submit" type="submit" name="submit" value="Sign In" class="btn" style="height: 30px; width: 70px; font-family: segoe UI;"><br><br>
        <a href="register.php"style="color:black;">Not registered ?</a>
		</form>
		<span id="msg" style="color:red;"></span>
        <span id='fp-b' style="display:none;"><a href="forgot-password.php">Forgot password?</a></span>
</div>

</div>
</body>
<?php
if(isset($_POST['submit']))
{
include("db-connection.php");
$email=$_POST['e-mail'];
$password=md5($_POST['pass']);
$query="select * from user where email='$email' and password='$password'";
if (mysqli_num_rows(mysqli_query($conn,$query))==0){
	echo "
		<script type='text/javascript'>document.getElementById('msg').innerHTML='Wrong username or password !<br>';</script>";
    echo "
    <script>
         document.getElementById('fp-b').style.display='inline-block';
    </script>

    ";
}
else{
    session_start();
    $qrid="select * from user where email='$email' and password='$password'";
    $row=mysqli_query($conn,$qrid);
    $res=$row->fetch_assoc();
    $_SESSION['id']=$res['id'];
    if(isset($_GET['nxt']))
    {
    	header("location:".$_GET['nxt']);
    }
    else{
    	header("location:user-home.php");
    }
    
}
}
?>
</html>