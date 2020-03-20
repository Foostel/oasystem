<?php
		$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db='foostel';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
<<<<<<< HEAD
         		
=======
         	echo 'Connected successfully ';
>>>>>>> 158715e204484b2c65e90283a313e494595ebcab
?>