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
if(isset($_POST['v']))
{	$v=$_POST['v'];
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
}
else
{
	echo "";
}
//echo $v1." ".$v2." ".$v3." ".$v4;

?>
<form action="" method="post">

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
        $cid = $row["cid"];
       	 $count=0;
       	 $exist=0;
        if(is_dir("files/services/c-tiffin/-$cid/"))
        {
        	$file=scandir("files/services/c-tiffin/-$cid/");
			$exist=1;
		}
    	else
    	{
    		$file=scandir("files/services/c-tiffin/default/");
    	}
        
       

?>

<form action="" method="post">
<button  type="submit" name="show">
<?php
        echo '<b>'.$field1name.'</b><br />';            
         echo '<b>'.$cid.'</b><br />';
         foreach($file as $img)  
         {
         if ($count==2)
         {if ($exist==1)
         	echo "<img src='files/services/c-tiffin/-$cid/$img' width='50px' height='50px'>";
     		else
     			echo "<img src='files/services/c-tiffin/default/$img' width='50px' height='50px'>";

     		}
     	if ($count>2)
			break;         
     		$count=$count+1;
 			}
?>
</button>
</form>
<br><br>


<?php
if (isset($_POST['show']))
{
	header('Location:detail-tiff.php?uid='.$row['uid'].
'cid='.$row['cid'].
'bn='.$row['bn'].
'bno='.$row['bno'].
'state='.$row['state'].
'city='.$row['city'].
'landmark='.$row['landmark'].
'area='.$row['area'].
'vt='.$row['vt'].
'pincode='.$row['pincode'].
'l='.$row['l'].
'b='.$row['b'].
'd='.$row['d'].
'ld='.$row['ld'].
'dd='.$row['dd'].
'bd='.$row['bd'].
'hd='.$row['hd'].
'cae='.$row['cae'].
'c='.$row['c']
);
}
}
}
}
else{
	echo "Please login First";
}
?>

</body>
</html>