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
<div class="section" style="text-align: center;">
	<div style="display:inline-block;background-color: white; width:500px; height: 500px; position: relative;top:100px; text-align:center;">
		<div style="display:inline-block; width:500px; height: 500px; position: relative;top:50px; ">
			<form action="" method="post">
			<h1>Sign in <img src="oas-logo.svg" style=" display:inline-block;height: 50px; margin-top: 10px;"></h1>
			<input style="border:solid; border-width: 1.5px; height: 30px; width: 200px;" class="inputs" type="" name="e-mail" placeholder="Email" required="true"><br>
        <input style="border:solid;border-width: 1.5px;  height: 30px; width: 200px;" class="inputs" type="password" name="pass" placeholder="Password"><br>
        <input id="submit" type="submit" name="submit" value="LOGIN" class="btn" style="height: 30px; width: 70px;"><br><br>
        <a href="register.php"style="color:black;">Not registered ?</a>
		</form>
		<span id="msg" style="color:red;"></span>
</div>
	
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
		<script type='text/javascript'>document.getElementById('msg').innerHTML='Wrong username or password';</script>";
}
else{
    session_start();
    $qrid="select * from user where email='$email' and password='$password'";
    $row=mysqli_query($conn,$qrid);
    $res=$row->fetch_assoc();
    $_SESSION['id']=$res['id'];
    header("location:user-home.php");
}
}
?>
</html>