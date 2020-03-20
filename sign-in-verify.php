<?php
include("db-connection.php");
$email=$_POST['e-mail'];
$password=md5($_POST['pass']);

$query="select * from user where email='$email' and password='$password'";
if (mysqli_num_rows(mysqli_query($conn,$query))==0){
	echo "Please Register";}
else{
    session_start();
    $qrid="select * from user where email='$email' and password='$password'";
    $row=mysqli_query($conn,$qrid);
    $res=$row->fetch_assoc();
    $_SESSION['id']=$res['id'];
    header("location:user-home.php");
}

?>