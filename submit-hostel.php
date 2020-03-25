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
  $folder="files\services\c-hostel\_";
  $temp = explode(".", $_FILES["uploadfile"]["name"]);
  $newfilename = $uid . '' . $bn.".".end($temp);
  $filename=$newfilename;
  move_uploaded_file($filetmpname,$folder.$filename);

 	$query="insert into hostel_address (uid,bno,area,state,city,landmark,pincode,bn,vt,image) values($uid,'$bno','$area','$state','$city','$landmark',$pincode,'$bn','$vt','$filename')";
 	$q=mysqli_query($conn,$query);
 	if($q){
 	  	echo " hostel address information inserted successfully ";  }
 	else{echo " try again ". $conn->error; }

$ht=$_POST['hostel-type'];
 $gym=0;
 $p=0;
 $m=0;
 $w=0;
 $g=0;
 $rs=0;
 $ab=0;
 $ac=0;
 $cw=0;
  $facilites=$_POST['facilites'];
 foreach($facilites as $array)
 {
  if($array=="Gym")
    {$gym=1; }
  if($array=="Parking Area")
    {$p=1; }
  if($array=="Mess")
    {$m=1; }
  if($array=="Wifi")
    {$w=1; }
  if($array=="Geaser")
    {$g=1; }
  if($array=="Room Service")
    {$rs=1; }
  if($array=="Attach Bathrooms")
    {$ab=1; }
  if($array=="AC")
    {$ac=1; }
  if($array=="Cloth Washing")
    {$cw=1; }
    
 }
  $query="insert into hostel_facility(uid,ht,gym,p,m,w,g,rs,ab,ac,cw) values($uid,'$ht',$gym,$p,$m,$w,$g,$rs,$ab,$ac,$cw)";
    $q1=mysqli_query($conn,$query);   
  if($q1){
    echo "<br>"." hostel facilities information inserted successfully ";  }
 else{
  echo "try again". $conn->error; }



 $cm=$_POST['caution-m'];
  $b1=0;
  $b2=0;
  $b3=0;
  //$b4=0;
$room=$_POST['room'];
 foreach($room as $array)
 {
  if($array=="r1")
  {$b1=1; }
    if($array=="r2" )
  {$b2=1;  }
    if($array=="r3" )
  {$b3=1;  }
  //   if($array=="4" )
  // {$b4=1;  }
 }  
 $ab1=$_POST['ab1'];
 $rb1=$_POST['rb1'];
 $ab2=$_POST['ab2'];
 $rb2=$_POST['rb2'];
 $ab3=$_POST['ab3'];
 $rb3=$_POST['rb3'];
// $ab4=$_POST['ab4'];
 //$rb4=$_POST['rb4'];

 $query="insert into hostel_info(uid,b1,ab1,rb1,b2,ab2,rb2,b3,ab3,rb3,cm) values($uid,$b1,'$ab1','$rb1',$b2,'$ab2','$rb2',$b3,'$ab3','$rb3','$cm');";
    $q2=mysqli_query($conn,$query);   
  if($q2){
    echo "<br>"." hostel information inserted successfully ";  }
 else{
  echo "try again". $conn->error; }

}
else{
  echo "form not submitted";}
?>
</head>
</html>