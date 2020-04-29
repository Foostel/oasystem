<?php
		$dbhost = 'bitmde89ihgqtgydrqpq-mysql.services.clever-cloud.com';
         $dbuser = 'uf6gcfaherjfpky9';
         $dbpass = 'lDbRsuA3kyQXmc3OgGFA';
         $db='bitmde89ihgqtgydrqpq';
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