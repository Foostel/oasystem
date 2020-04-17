<?php 
session_start();
if(isset($_POST['username']))
{
$username = explode(" ",$_POST['username']);
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
//Your code here...


}
else{
	echo"Access Denied !";
}
 ?>