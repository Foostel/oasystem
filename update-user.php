<?php 
session_start();
if(isset($_SESSION('id')))
{
$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
//Your code here...

 
}
else{
	echo"Access Denied !";
}
 ?>