<html>
<head>
  <script type="text/javascript" src="state-city/cities.js"></script>      
</head>
<body>
<?php
session_start();
if( isset($_SESSION['id']))
{ include("db-connection.php");
  $uid=$_SESSION['id'];
$v1=0;
$v2=0;
$v3=0;
$v4=0;
$v=$_POST['v'];

foreach($v as $array)
{if($array=="breakfast")
	{$v1=1;}
 if($array=="comeAndEat")
	{$v2=1;}
if($array=="homeDelivery")
	{$v3=1;}
if($array=="customisation")
	{$v4=1;}

}
//echo $v1." ".$v2." ".$v3." ".$v4;

?>
<form action="sample.php" method="post">

<input type="checkbox" value="breakfast"   id="v1" name="v[]">Breakfast
<input type="checkbox" value="comeAndEat"  id="v1"  name="v[]">Come And Eat
<input type="checkbox" value="homeDelivery" id="v1"   name="v[]">Home Delivery
<input type="checkbox" value="customisation"  id="v1" name="v[]">Customisation  <br>
<input type="Submit" value="Find"></input>
</form>
<?php 
$query = "SELECT * FROM tiffin_facility natural join tiffin_address where ((b = $v1 or b=1)and  (cae = $v2 or cae=1) and  (hd = $v3 or hd=1) and (c = $v4 or c=1))"; 
if ($result = mysqli_query($conn,$query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["bn"];       
?>
<div style="background-color: yellow; ">
<?php
        echo '<b>'.$field1name.'</b><br />';            
?>
</div>
<br><br>


<?php
}
}
}
else{
	echo "Please login First";
}
?>

</body>
</html>