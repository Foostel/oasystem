<html>
<head>
<?php
  session_start();
if(isset($_POST['submit']) and isset($_SESSION['id']))
{ include("db-connection.php");
  $uid=$_SESSION['id']; 
  $ge=$_POST['gender'];
  $wk=$_POST['work'];
 $p=0;
 $w=0;
 $rs=0;
 $ab=0;
 $tc=0;
 $b=0;
 $c=0;
   $facilites=$_POST['facilites'];
 foreach($facilites as $array)
 {
  if($array=="Parking Area")
    {$p=1; }
  if($array=="Wifi")
    {$w=1; }
  if($array=="Room Service")
    {$rs=1; }
  if($array=="Attach Bathrooms")
    {$ab=1; }
  if($array=="Table&Chair")
    {$tc=1; }
  if($array=="Bed")
    {$b=1; }
  if($array=="Cupboard")
    {$c=1; }
 }

$query="insert into room_facility(uid,ge,wk,p,w,rs,ab,tc,b,c) values($uid,'$ge','$wk',$p,$w,$rs,$ab,$tc,$b,$c)";
    $q1=mysqli_query($conn,$query);   
  if($q1){
    $cid = $conn->insert_id;
    //echo $cid."<br>";
    echo "<br>"." room facilities information inserted successfully "; 
     }
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
  if($array=="1r")
  {$b1=1; }
    if($array=="2r" )
  {$b2=1;  }
    if($array=="rk" )
  {$b3=1;  }
  //   if($array=="4" )
  // {$b4=1;  }
 }  


 $ab1=$_POST['r1a'];
 $rb1=$_POST['r1c'];
 $ab2=$_POST['r2a'];
 $rb2=$_POST['r2c'];
 $ab3=$_POST['rka'];
 $rb3=$_POST['rkc'];
// $ab4=$_POST['ab4'];
 //$rb4=$_POST['rb4'];
 $rr = mysqli_query($conn,"select cid from room_facility where uid ='$uid';");
 $cid = mysqli_fetch_assoc($rr)['cid'];
 $query="insert into room_info(uid,cid,b1,ab1,rb1,b2,ab2,rb2,b3,ab3,rb3,cm) values($uid,$cid,$b1,'$ab1','$rb1',$b2,'$ab2','$rb2',$b3,'$ab3','$rb3','$cm');";
    $q2=mysqli_query($conn,$query);   
  if($q2){
    echo "<br>"." room information inserted successfully ";  }
 else{
  echo "try again". $conn->error; }
}
else{
  echo "form not submitted";}
 
  $bno=$_POST['b'];
  $vt=$_POST['vt'];
  $area=$_POST['a'];
  $state=$_POST['s'];
  $city=$_POST['c'];
  $landmark=$_POST['l'];
  $pincode=$_POST['p'];

  $query="insert into room_address (uid,cid,area,state,city,landmark,pincode,bno,vt) values($uid,$cid,'$area','$state','$city','$landmark',$pincode,'$bno','$vt')";
  $q=mysqli_query($conn,$query);
  if($q){
      echo " room address information inserted successfully "; 
       }
  else{echo " try again ". $conn->error; }


mkdir("files\services\c-room\-".$cid);
  $folder="files\services\c-room\-"."$cid\_";
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