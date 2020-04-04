<?php 

$json = file_get_contents("https://api.mapbox.com/geocoding/v5/mapbox.places/{vijay nagar indore}.json?limit=1&access_token=pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg");
echo $json;
 ?>