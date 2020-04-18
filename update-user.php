<?php
session_start();
include("db-connection.php");
if(isset($_SESSION['id']))
{
$username = explode(" ",trim($_POST['username']));
$phoneno = $_POST['phoneno'];
$id=$_SESSION['id'];
//echo "".$id." ";

$sql="update user set fname='$username[0]',lname='$username[0]',phone='$phoneno' where id = '$id'" ;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
else{
	echo"Access Denied !";
}
?>