<?php
session_start();
$cid=$_GET['cid'];
if(is_dir("files/services/c-tiffin/-$cid/"))
        {
        	$count=0;
        	$file=scandir("files/services/c-tiffin/-$cid/");
	foreach($file as $img)  
         {  if($count>1)  
          	echo "<img src='files/services/c-tiffin/-$cid/$img' width='200px' height='200px'>";			
     	$count=$count+1;
       		}			
		}
    	else
    	{
    		//$file=scandir("files/services/c-tiffin/default/");
    		echo "<img src='files/services/c-tiffin/default/img' width='50px' height='50px'>";
    	}
echo $_GET['uid']." ".$_GET['cid']." ".$_GET['bn']." ".$_GET['bno']." ".$_GET['state']." ".
$_GET['city']." ".$_GET['landmark']." ".$_GET['area']." ".$_GET['vt']." ".$_GET['pincode']." ".$_GET['l']." ".$_GET['b']." ".$_GET['d']." ".$_GET['ld']." ".$_GET['dd']." ".$_GET['bd']." ".$_GET['hd']." ".$_GET['cae']." ".$_GET['c'];

?>

