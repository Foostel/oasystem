<?php
session_start();
if(isset($_POST['submit']) and isset($_SESSION['id']))
{
	include("db-connection.php");
  
  $uid=$_SESSION['id'];
  
  $bno=$_POST['b'];
  $area=$_POST['a'];
  $state=$_POST['s'];
  $city=$_POST['c'];
  $landmark=$_POST['l'];
  $pincode=$_POST['p'];
  $query="insert into tiffin_address (uid,bno,area,state,city,landmark,pincode) values($uid,'$bno','$area','$state','$city','$landmark',$pincode)";
  $q=mysqli_query($conn,$query);
  if($q)
  {
  	echo " center information inserted successfully ";

  }
 else{
 	echo "try again";
 }

}
else{
	echo "form not submitted";
}
?>
</head>
</html>