<?php
  session_start();
if(isset($_POST['submit']) and isset($_SESSION['id']))
{ include("db-connection.php");
  $uid=$_SESSION['id'];  
  $bno=$_POST['b'];
  $area=$_POST['a'];
  $state=$_POST['s'];
  $city=$_POST['c'];
  $landmark=$_POST['l'];
  $pincode=$_POST['p'];
 	$query="insert into tiffin_address (uid,bno,area,state,city,landmark,pincode) values($uid,'$bno','$area','$state','$city','$landmark',$pincode)";
 	$q=mysqli_query($conn,$query);
 	if($q){
 	  	echo " center address information inserted successfully ";  }
 	else{
 	 	echo "try again"; }
 	 	$l=0;
 

 	$d=0;
 	$b=0;
 	if(isset($_POST['meal']))
 	{$meal=$_POST['meal'];
 	 foreach($meal as $array)
  		{
 		  	if ($array=="Lunch" )
   				{$l=1;}
  			if ($array=="Dinner")
  				{$d=1;}
  			if ($array=="Breakfirst")
  	 			{$b=1;}
  		}
  	}	
 	//echo $lunch." ".$dinner." ".$breakfirst;  
 	$hd=0;
 	$cae=0;
 	$c=0;
 	if(isset($_POST['facilities']))
 	{$facility=$_POST['facilities'];
 	foreach($facility as $array)
  		{
 		  	if ($array=="hd" )
   				{$hd=1;}
  			if ($array=="cae")
  				{$cae=1;}
  			if ($array=="c")
  	 			{$c=1;}
  		}
  	}	
 	//echo $hd." ".$cae." ".$c;  
  	$bt=$_POST['bt'];
  	$bf=$_POST['bf'];
  	$lt=$_POST['lt'];
  	$lf=$_POST['lf'];
  	$dt=$_POST['dt'];
  	$df=$_POST['df'];
  	$query="insert into tiffin_facility(uid,l,lt,lf,b,bt,bf,d,dt,df) values($uid,$l,'$lt','$lf',$b,'$bt','$bf',$d,'$dt','$df')";
  	$q=mysqli_query($conn,$query);
  if($q){
  	echo " center facilities information inserted successfully ";  }
 else{
 	echo "try again"; }
 
}
else{
	echo "form not submitted";
}
?>
</head>
</html>