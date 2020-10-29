<?php
	
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db='foostel';
         
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         		
         function getRow($conn,$query)
         {
         	$res = mysqli_query($conn,$query);
         	return mysqli_fetch_assoc($res);   
         }
?>
