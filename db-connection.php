<?php
		$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db='foostel';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         	echo 'Connected successfully ';
?>