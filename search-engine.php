<!-- Your code here -->
<?php
include("db-connection.php");
$country = $_GET['country'];
$state = strtolower(trim($_GET['state']));
$city = strtolower(trim($_GET['city']));
$area = $_GET['area'];
$req_ser = $_GET['tos'];
echo $req_ser." ".$state." ".$city." ".$area;

if ($req_ser[0]==1 )//room
{
		$query = "SELECT * FROM room_facility NATURAL JOIN room_address WHERE city='{$city}' AND state='{$state}';";
		echo "<br>".$query;		 
		//print_r($query);
		if ($result = mysqli_query($conn,$query)) 
		{//print_r($result);
    		while ($row = $result->fetch_assoc()) 
    		{
        		echo "<br>".$row['cid'];

    		}
		}
		
}
if ($req_ser[1]==1)//hostel
{
	$query = "SELECT * FROM hostel_facility natural join hostel_address where state='$state' and city='$city' and  (area='$area' or landmark='$area')"; 
	if ($result = mysqli_query($conn,$query)) 
	{
    	while ($row = $result->fetch_assoc()) 
    	{
        	echo $row['cid'];
    	}
	}
}
if ($req_ser[2]==1)//tiffin center
{
	$query = "SELECT * FROM tiffin_facility natural join tiffin_address where state='$state' and city='$city' and  (area='$area' or landmark='$area')"; 
	if ($result = mysqli_query($conn,$query)) 
	{
    	while ($row = $result->fetch_assoc())
    	{
        	echo $row['cid'];
    	}
	}
}
?>