<?php 
session_start();
$r=0;

if(isset($_POST['curloc']))
{	

	if($_SESSION['curloc']!=$_POST['curloc'])
	{
		$r=1;
	} 
  
	if($_POST['curloc'][0]!='undefined')
 	{
  	$_SESSION['curloc'][0] =$_POST['curloc'][0];
	$_SESSION['curloc'][1] =$_POST['curloc'][1];
	}
	else{

 		$_SESSION['curloc'][0]='undefined';
 		$_SESSION['curloc'][1]='undefined';
	}

  
}
if($r)
{
	echo"reload";
}


 ?>
