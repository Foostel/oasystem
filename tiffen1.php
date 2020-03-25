<?php
  session_start();
if(isset($_POST['submit']) and isset($_SESSION['id']))
{ include("db-connection.php");
  $uid=$_SESSION['id'];  
  $bn=$_POST['bn'];
  $bno=$_POST['b'];
  $vt=$_POST['vt'];
  $area=$_POST['a'];
  $state=$_POST['s'];
  $city=$_POST['c'];
  $landmark=$_POST['l'];
  $pincode=$_POST['p'];
 	$query="insert into tiffin_address (uid,bno,area,state,city,landmark,pincode,bn,vt) values($uid,'$bno','$area','$state','$city','$landmark',$pincode,'$bn','$vt')";
 	$q=mysqli_query($conn,$query);
 	if($q){
 	  	echo " center address information inserted successfully ";  }
 	else{echo "try again"; }
 	 	$l=0;
 	$d=0;
 	$b=0;
 	if(isset($_POST['breakfast']))
 	{$b=1; }
  	if(isset($_POST['lunch']))
 	{$l=l; 	}
  	if(isset($_POST['dinner']))
 	{$d=1; 	}
 			echo $l." ".$d." ".$b;  
 

 	$hd=0;
 	$cae=0;
 	$c=0;
 	if(isset($_REQUEST['Customization']))
 	{$c=1;	}
  	if(isset($_REQUEST['home_delivery']))
 	{$hd=1;	}
  	if(isset($_REQUEST['Come_and_eat']))
 	{$cae=1;	}	
 	echo $hd." ".$cae." ".$c;  
  	$bt=$_POST['timebt'];
    $bt1=$_POST['timebt1'];
  	$bf=$_POST['bf'];
  	$lt=$_POST['timelt'];
    $lt1=$_POST['timelt1'];
  	$lf=$_POST['lf'];
  	$dt=$_POST['timedt'];
    $dt1=$_POST['timedt1'];
  	$df=$_POST['df'];
  	$payb=$_POST['payb'];
  	$payl=$_POST['payl'];  	
  	$payd=$_POST['payd'];

   $query="insert into tiffin_facility(uid,l,lt,lf,b,bt,bf,d,dt,df,payb,payl,payd) values($uid,$l,'$lt','$lf',$b,'$bt','$bf',$d,'$dt','$df','$payb','$payl','$payd',$hd,$cae,$lt1,'$bt1','$dt1')";
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