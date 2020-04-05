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
		$query = "SELECT * FROM room_facility NATURAL JOIN (room_address natural join room_info) where (state='$state' and city='$city' and area='$area') OR (state='$state' and city='$city');";
		//print_r($query);
		if ($result = mysqli_query($conn,$query)) 
		{//print_r($result);
    		while ($row = $result->fetch_assoc()) 
    		{
        		echo '<br> Found: '.$row['cid'];

    		}
		}
		
}
if ($req_ser[2]==1)//hostel
{	echo "x".$city."x";echo "x".$state."x";
	$query = "SELECT * FROM hostel_facility natural join hostel_address natural join hostel_info where (state='$state' and city='$city' and area='$area') OR (state='$state' and city='$city');"; 
	if ($result = mysqli_query($conn,$query)) 
	{
    	while ($row = $result->fetch_assoc()) 
    	{
        	echo '<br> Found: '.$row['cid'];
    	}
	}
}
if ($req_ser[4]==1)//tiffin center
{
	$query = "SELECT * FROM tiffin_facility natural join tiffin_address where (state='$state' and city='$city' and area='$area') OR (state='$state' and city='$city');"; 
	if ($result = mysqli_query($conn,$query)) 
	{
    	while ($row = $result->fetch_assoc())
    	{
        	echo '<br> Found: '. $row['cid'];
    	}
	}
}
?>