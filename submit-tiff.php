<html>
<head>
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

  $filename=$_FILES["uploadfile"]["name"];

  $filetmpname=$_FILES["uploadfile"]["tmp_name"];
  $folder="files\services\c-tiffin\_";
  $temp = explode(".", $_FILES["uploadfile"]["name"]);
  $newfilename = $uid . '' . $bn.".".end($temp);
  $filename=$newfilename;
  move_uploaded_file($filetmpname,$folder.$filename);
  echo $filetmpname."<br>";
  echo  $filename."<br>";
  echo  $newfilename."<br>";
  //echo  $temp."<br>";

  
  //move_uploaded_file($filetmpname, $filename);



 	$query="insert into tiffin_address (uid,bno,area,state,city,landmark,pincode,bn,vt,image) values($uid,'$bno','$area','$state','$city','$landmark',$pincode,'$bn','$vt','$filename')";
 	$q=mysqli_query($conn,$query);
 	if($q){
 	  	echo " center address information inserted successfully ";  }
 	else{echo "try again"; }
 	 $l=0;
 	$d=0;
 	$b=0;
  $food=$_POST['meal'];
 foreach($food as $array)
 {
  if($array=="Breakfirst")
 	{$b=1; }
  	if($array=="Lunch" )
 	{$l=1; 	}
  	if($array=="Dinner" )
 	{$d=1; 	}
 }	
  		//echo $l." ".$d." ".$b;  
 

 	$hd=0;
 	$cae=0;
 	$c=0;
 $food1=$_POST['facilities'];
 foreach($food1 as $array1)
 {
  if($array1=="hd")
    {$hd=1; }
  if($array1=="cae" )
    {$cae=1;  }
  if($array1=="c" )
    {$c=1;  }
 }  
 	//echo $hd." ".$cae." ".$c;  
  	$bt1=$_POST['timebt1']."".$_POST['dnbt1'];
    $bt2=$_POST['timebt2']."".$_POST['dnbt2'];
  	$lt1=$_POST['timelt1']."".$_POST['dnlt1'];
    $lt2=$_POST['timelt2']."".$_POST['dnlt2'];
  	$dt1=$_POST['timedt1']."".$_POST['dndt1'];
    $dt2=$_POST['timedt2']."".$_POST['dndt2'];
    $bf=$_POST['bf'];
    $lf=$_POST['lf'];
  	$df=$_POST['df'];
  	$payb=$_POST['payb'];
  	$payl=$_POST['payl'];  	
  	$payd=$_POST['payd'];


    $bd=$bt1."to".$bt2.",".$bf.",".$payb;
    $ld=$lt1."to".$lt2.",".$lf.",".$payl;
    $dd=$dt1."to".$dt2.",".$df.",".$payd;


     $query="insert into tiffin_facility(uid,l,ld,b,bd,d,dd,hd,cae,c) values($uid,$l,'$ld',$b,'$bd',$d,'$dd',$hd,$cae,$c)";
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