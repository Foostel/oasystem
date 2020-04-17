<?php
session_start();
if(isset($_POST['username']))
{
$username = explode(" ",trim($_POST['username']));
$phoneno = $_POST['phoneno'];
//Your code here...


}
else{
	echo"Access Denied !";
}
 ?>