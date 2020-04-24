<?php
session_start();
include("db-connection.php");
if(isset($_SESSION['id']))
{
	$radius=5;
	$lat=22.718006052574538;
	$lng=75.88427230535876;
	$degRad=$radius/111;
	echo $degRad;
	$sql="select lat, lng, area from room_address where (lat-$lat)*(lat-$lat)+(lng-$lng)*(lng-$lng)<=$degRad*$degRad";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "lat: " . $row["lat"]. " lng: " . $row["lng"]. "Area: " . $row["area"]. "<br>";
    }
} 
else {
    echo "Sorry! No Property nearby.";
}

}
else{
	echo "Please Signin ";
}
?>