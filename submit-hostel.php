<html>
<head>
<?php
  session_start();
if(isset($_POST['submit']) and isset($_SESSION['id']))
{ include("db-connection.php");
  $uid=$_SESSION['id'];  
  
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
    $cid = $conn->insert_id;
    echo "<br>"." hostel facilities information inserted successfully ";  }
 else{
  echo "try again". $conn->error; }


 $cm=$_POST['caution-m'];
 $dn=0;
  $b1=0;
  $b2=0;
  $b3=0;
  //$b4=0;
$room=$_POST['room'];
 foreach($room as $array)
 {
  if($array=="r1")
  {$b1=1; $dn++; }
    if($array=="r2" )
  {$b2=1; $dn++; }
    if($array=="r3" )
  {$b3=1; $dn++; }
  //   if($array=="4" )
  // {$b4=1;  }
 }  


 if($_POST['ab1']){ $ab1= $_POST['ab1'];} else{ $ab1= 0;}
 if($_POST['rb1']){ $rb1= $_POST['rb1'];} else{ $rb1= 0;}
 if($_POST['ab2']){ $ab2= $_POST['ab2'];} else{ $ab2= 0;}
 if($_POST['rb2']){ $rb2= $_POST['rb2'];} else{ $rb2= 0;}
 echo 'Ab2 : '.$ab2;
 if ($_POST['ab3']){ $ab3= $_POST['ab3'];} else{ $ab3= 0;}
 if ($_POST['rb3']){ $rb3= $_POST['rb3'];} else{ $rb3= 0;}


// $ab4=$_POST['ab4'];
 //$rb4=$_POST['rb4'];
 $avgcost=((intval($rb1)+intval($rb2)+intval($rb3))/intval($dn))+intval($cm);
 $query="insert into hostel_info(uid,cid,b1,ab1,rb1,b2,ab2,rb2,b3,ab3,rb3,cm,avgcost) values('$uid','$cid','$b1','$ab1','$rb1',$b2,'$ab2','$rb2',$b3,'$ab3','$rb3','$cm',{$avgcost});";
    $q2=mysqli_query($conn,$query);   
  if($q2){
    echo "<br>"." hostel information inserted successfully ";  
    header('location:user-profile.php');
  }
 else{
  echo "try again". $conn->error; }


}
else{
  echo "form not submitted";}
 


$bn=$_POST['bn'];
  $bno=$_POST['b'];
  $area=$_POST['a'];
  $state=strtolower(trim($_POST['s']," "));
  $city=strtolower(trim($_POST['c']," "));
  $landmark=$_POST['l'];
  $pincode=$_POST['p'];
  $lnglat = explode(",",$_POST['lnglat']);
  $sarea = strtolower(trim($_POST['a']).' '.trim($_POST['l']));
  $query="insert into hostel_address (uid,cid,bno,area,sarea,state,city,landmark,pincode,bn,lng,lat) values($uid,$cid,'$bno','$area','$sarea','$state','$city','$landmark',$pincode,'$bn','$lnglat[0]','$lnglat[1]')";
  $q=mysqli_query($conn,$query);
  if($q){
      echo " hostel address information inserted successfully ";  }
  else{echo " try again ". $conn->error; }

mkdir("files\services\c-hostel\-".$cid);
  $folder="files\services\c-hostel\-"."$cid\_";
 $filename=array_filter($_FILES["uploadfile"]["name"]);
  //$filetmpname=array_filter($_FILES["uploadfile"]["tmp_name"]);
  $temp = explode(".", $_FILES["uploadfile"]["name"][0]);
  if(!empty($filename)){
  foreach($_FILES['uploadfile']['name'] as $key=>$val){
  $newfilename = $cid."".$key.".".end($temp);
  $filename=$newfilename;
  move_uploaded_file($_FILES["uploadfile"]["tmp_name"][$key],$folder.$filename);
}
}
?>
</head>
</html>