<?php
session_start();
include("db-connection.php");
if(isset($_SESSION['id']))
{
$username = explode(" ",trim($_POST['username']));
$phoneno = $_POST['phoneno'];
$id=$_SESSION['id'];
//echo "".$id." ";

$sql="update user set fname='$username[0]',lname='$username[1]' where id = '$id'" ;
if ($conn->query($sql) === TRUE) {
    header('location: user-profile.php#personal-details');
} else {
    echo "Error updating record: " . $conn->error;
}
}
else{
	echo"Access Denied !";
}
?>