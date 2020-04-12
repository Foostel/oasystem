<!-- Your code here -->
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="style.css">
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>	
<script type="text/javascript">
	rooms_points = Array();
	hostel_points = Array();
	food_points = Array();
	if(map.getSource('rooms-p')) map.removeSource('rooms-p');
	if(map.getSource('hostel-p')) map.removeSource('hostel-p');
	if(map.getSource('food-p')) map.removeSource('food-p');
	function disp(id,obj)
	{
		if(document.getElementById(id).style.display!='block')
		{
		document.getElementById(id).style.display='block';
		obj.getElementsByTagName('p')[0].innerHTML="Show less <i class='fa fa-angle-up'></i>";
		}
		else{
			document.getElementById(id).style.display='none';
			obj.style.height='70px';
		obj.getElementsByTagName('p')[0].innerHTML="";	
		}
	}

</script>
<style type="text/css">
	body{
		margin: 0px;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="margin-top: 2px;">
<?php
$zl=0;
if(isset($_POST['tos']))
{
include("db-connection.php");
$country = $_POST['country'];
$state = strtolower(trim($_POST['state']));
$city = strtolower(trim($_POST['city']));	
$area = $_POST['area'];
$arr_area = explode(",",$_POST['fulladd']);
$req_ser = $_POST['tos'];
if ($req_ser[0]==1 )//room
{
		$query = "SELECT * FROM room_facility NATURAL JOIN (room_address natural join room_info) where state='$state' and city='$city' and (sarea like '%{$area}%' or area = '{$_POST['fulladd']}');";
		$query1 = "SELECT * FROM room_facility NATURAL JOIN (room_address natural join room_info) where(state='$state' and city='$city');";
		$query2 = "SELECT * FROM room_facility NATURAL JOIN (room_address natural join room_info) where (state='$state');";
		//print_r($query);
		$result = mysqli_query($conn,$query);
		$result1 = mysqli_query($conn,$query1);
		$result2 = mysqli_query($conn,$query2);
		$row = array();
		if ($result && mysqli_num_rows($result)>0) 
		{//print_r($result);
			$zl=16;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$arr_area[0]}, {$arr_area[1]}<br> <br></center>
			";
    		while ($row = $result->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
    			$roomfor ='';
    			if($row['ge']!='Anyone')
    			{
    				$roomfor=$roomfor.''.$row['ge'];
    			}
    			if($row['wk']!='Anyone')
    			{
    				$roomfor=$roomfor.' '.$row['wk'];	
    			}
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['tc'])
    			{
    				$facilities.='Table & Chair,';
    			}
    			if($row['b'])
    			{
    				$facilities.='Bed,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Cup Board,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="Room & Kitchen (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']},{$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Room for: </b> {$roomfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
					</div>

				<script>
				rooms_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		if($result1 && mysqli_num_rows($result1)>0)
		{	$zl=12;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['city']} <br> <br></center>
			";
    		while ($row = $result1->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
    			$roomfor ='';
    			if($row['ge']!='Anyone')
    			{
    				$roomfor=$roomfor.''.$row['ge'];
    			}
    			if($row['wk']!='Anyone')
    			{
    				$roomfor=$roomfor.' '.$row['wk'];	
    			}
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['tc'])
    			{
    				$facilities.='Table & Chair,';
    			}
    			if($row['b'])
    			{
    				$facilities.='Bed,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Cup Board,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="Room & Kitchen (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Room for: </b> {$roomfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
					</div>
				<script>
				rooms_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
				";

    		}
		}
		else if ($result2 && mysqli_num_rows($result2)>0) 
		{//print_r($result);
			$zl=10;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['state']} <br> <br></center>
			";

    		while ($row = $result2->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$roomfor ='';
    			if($row['ge']!='Anyone')
    			{
    				$roomfor=$roomfor.''.$row['ge'];
    			}
    			if($row['wk']!='Anyone')
    			{
    				$roomfor=$roomfor.' '.$row['wk'];	
    			}
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['tc'])
    			{
    				$facilities.='Table & Chair,';
    			}
    			if($row['b'])
    			{
    				$facilities.='Bed,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Cup Board,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="Room & Kitchen (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Room for: </b> {$roomfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
					</div>

				<script>
				rooms_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		else{
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>No results found near {$_POST['area']}:(<br> <br></center>
			";			
		}

		echo"

		<script>
		map.addSource('rooms-p', {
		'type': 'geojson',
		'data': {
		'type': 'FeatureCollection',
		'features':rooms_points
		}
		});
		
		map.addLayer({
		'id': 'points_room',
		'type': 'symbol',
		'source': 'rooms-p',
		'layout': {
		'icon-image': 'room',
		'icon-size': 0.03,
		'icon-allow-overlap':true
		}
		});
		map.setCenter(rooms_points[0]['geometry']['coordinates']);
		map.setZoom({$zl});
		r_s = true;
		
		console.log('pahuch gaya');
		console.log(r_s);
		map.on('click', 'points_room', function(e) {
		var coordinates = e.features[0].geometry.coordinates.slice();
		var description = e.features[0].properties.description;
		 
		// Ensure that if the map is zoomed out such that multiple
		// copies of the feature are visible, the popup appears
		// over the copy being pointed to.
		while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
		coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
		}
		 
		new mapboxgl.Popup()
		.setLngLat(coordinates)
		.setHTML(description)
		.addTo(map);
		});

		
		</script>
		";
		
}
else if ($req_ser[1]==1)//hostel
{	$zl=16;
	$query = "SELECT * FROM hostel_facility NATURAL JOIN (hostel_address natural join hostel_info) where state='$state' and city='$city' and (sarea like '%{$area}%' or area = '{$_POST['fulladd']}');";
	$query1 = "SELECT * hostel_facility natural join hostel_address natural join hostel_info where(state='$state' and city='$city');";
	$query2 = "SELECT * FROM hostel_facility natural join hostel_address natural join hostel_info where (state='$state');";
	$result = mysqli_query($conn,$query);
		$result1 = mysqli_query($conn,$query1);
		$result2 = mysqli_query($conn,$query2);
		$row = array();
		if ($result && mysqli_num_rows($result)>0) 
		{//print_r($result);

			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px; margin-top:10px;'>Showing results in {$arr_area[0]}, {$arr_area[1]} <br> <br></center>
			";
    		while ($row = $result->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$hostelfor ='';
    			if($row['ht']!='Anyone')
    			{
    				$hostelfor=$hostelfor.''.$row['ht'];
    			}
    			
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['g'])
    			{
    				$facilities.='Water Geaser,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['ac'])
    			{
    				$facilities.='AC,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['gym'])
    			{
    				$facilities.='GYM,';
    			}
    			if($row['m'])
    			{
    				$facilities.='Food Mess,';
    			}
    			if($row['cw'])
    			{
    				$facilities.='Cloth Washing,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="3-Bed (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}{$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Hostel type: </b> {$hostelfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
				</div>


				<script>
				hostel_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		if($result1 && mysqli_num_rows($result1)>0)
		{	$zl=12;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['city']} <br> <br></center>
			";
    		while ($row = $result1->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$hostelfor ='';
    			if($row['ht']!='Anyone')
    			{
    				$hostelfor=$hostelfor.''.$row['ht'];
    			}
    			
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['g'])
    			{
    				$facilities.='Water Geaser,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['ac'])
    			{
    				$facilities.='AC,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['gym'])
    			{
    				$facilities.='GYM,';
    			}
    			if($row['m'])
    			{
    				$facilities.='Food Mess,';
    			}
    			if($row['cw'])
    			{
    				$facilities.='Cloth Washing,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="3-Bed (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Hostel type: </b> {$hostelfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
				</div>

				<script>
				hostel_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		else if ($result2 && mysqli_num_rows($result2)>0) 
		{//print_r($result);
			$zl=10;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['state']} <br> <br></center>
			";

    		while ($row = $result2->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$hostelfor ='';
    			if($row['ht']!='Anyone')
    			{
    				$hostelfor=$hostelfor.''.$row['ht'];
    			}
    			
    			$facilities = '';
    			if($row['p'])
    			{
    				$facilities.='Parking,';
    			}
    			if($row['g'])
    			{
    				$facilities.='Water Geaser,';
    			}
    			if($row['w'])
    			{
    				$facilities.='WiFi,';
    			}
    			if($row['ac'])
    			{
    				$facilities.='AC,';
    			}
    			if($row['rs'])
    			{
    				$facilities.='Room Services,';
    			}
    			if($row['ab'])
    			{
    				$facilities.='Attached Bathrooms,';
    			}
    			if($row['gym'])
    			{
    				$facilities.='GYM,';
    			}
    			if($row['m'])
    			{
    				$facilities.='Food Mess,';
    			}
    			if($row['cw'])
    			{
    				$facilities.='Cloth Washing,';
    			}
    			$room_type = '';
    			if($row['b1'] && $row['ab1']>0)
    			{
    				$room_type.="1-Bed (Available) <b>Rent: </b>Rs. {$row['rb1']}/Month<br>";
    			}
    			if($row['b2'] && $row['ab2']>0)
    			{
    				$room_type.="2-Bed (Available) <b>Rent: </b>Rs. {$row['rb2']}/Month<br>";
    			}
    			if($row['b3'] && $row['ab3']>0)
    			{
    				$room_type.="3-Bed (Available) <b>Rent: </b>Rs. {$row['rb3']}/Month<br>";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Hostel type: </b> {$hostelfor}<br>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Room type: </b><br>{$room_type}<br>
						<b>Caution Money: </b>{$row['cm']}
						<p>
				</div>
				<script>
				hostel_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		else{
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>No results found near {$_POST['area']}:(<br> <br></center>
			";			
		}

		echo"

		<script>
		map.addSource('hostel-p', {
		'type': 'geojson',
		'data': {
		'type': 'FeatureCollection',
		'features':hostel_points
		}
		});
		
		map.addLayer({
		'id': 'points_hostel',
		'type': 'symbol',
		'source': 'hostel-p',
		'layout': {
		'icon-image': 'hostel',
		'icon-size': 0.03,
		'icon-allow-overlap':true
		}
		});
		map.setCenter(hostel_points[0]['geometry']['coordinates']);
		map.setZoom({$zl});
		map.on('click', 'points_hostel', function(e) {
		var coordinates = e.features[0].geometry.coordinates.slice();
		var description = e.features[0].properties.description;
		 
		// Ensure that if the map is zoomed out such that multiple
		// copies of the feature are visible, the popup appears
		// over the copy being pointed to.
		while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
		coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
		}
		 
		new mapboxgl.Popup()
		.setLngLat(coordinates)
		.setHTML(description)
		.addTo(map);
		});
		</script>
		";
}
else if ($req_ser[2]==1)//tiffin center
{	$zl=15;
	$query = "SELECT * FROM tiffin_facility NATURAL JOIN tiffin_address  where state='$state' and city='$city' and (sarea like '%{$area}%' or area = '{$_POST['fulladd']}');";
	$query1 = "SELECT * FROM tiffin_facility natural join tiffin_address where(state='$state' and city='$city');";
	$query2 = "SELECT * FROM tiffin_facility natural join tiffin_address where state='$state';";
	$result = mysqli_query($conn,$query);
		$result1 = mysqli_query($conn,$query1);
		$result2 = mysqli_query($conn,$query2);
		$row = array();
		if ($result && mysqli_num_rows($result)>0) 
		{//print_r($result);
			$zl=16;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$arr_area[0]}, {$arr_area[1]} <br> <br></center>
			";
    		while ($row = $result->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$facilities = '';
    			if($row['hd'])
    			{
    				$facilities.='Home Delivery,';
    			}
    			if($row['cae'])
    			{
    				$facilities.='Come & Eat,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Customization.';
    			}
    			$mealsProvided = '';
    			$lunchData = explode(",",$row['ld']);
    			$breakFastData = explode(",",$row['bd']);
    			$dinnerData = explode(",",$row['dd']);
    			$rowid = $row['cid'].'';
    			if($row['b'])
    			{
    				$mealsProvided.="<b>Breakfast</b> Time: {$breakFastData[0]} To {$breakFastData[2]} Cost: Rs.{$breakFastData[3]} {$breakFastData[4]}<br>";
    			}
    			if($row['l'])
    			{
    				$mealsProvided.="<b>Lunch</b> Time: {$lunchData[0]} To {$lunchData[2]} Cost: Rs.{$lunchData[3]} {$lunchData[4]}<br>";
    			}
    			if($row['d'])
    			{
    				$mealsProvided.="<b>Dinner</b> Time: {$dinnerData[0]} To {$dinnerData[2]} Cost: Rs.{$dinnerData[3]} {$dinnerData[4]}";
    			}
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Meals Provided: </b><br>{$mealsProvided}<br>
						<p>
				</div>
				<script>
				food_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		if($result1 && mysqli_num_rows($result1)>0)
		{	$zl=13;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['city']} <br> <br></center>
			";
    		while ($row = $result1->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$facilities = '';
    			if($row['hd'])
    			{
    				$facilities.='Home Delivery,';
    			}
    			if($row['cae'])
    			{
    				$facilities.='Come & Eat,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Customization.';
    			}
    			$mealsProvided = '';
    			$lunchData = explode(",",$row['ld']);
    			$breakFastData = explode(",",$row['bd']);
    			$dinnerData = explode(",",$row['dd']);
    			if($row['b'])
    			{
    				$mealsProvided.="<b>Breakfast</b> Time: {$breakFastData[0]} To {$breakFastData[2]} Cost: Rs.{$breakFastData[3]} {$breakFastData[4]}<br>";
    			}
    			if($row['l'])
    			{
    				$mealsProvided.="<b>Lunch</b> Time: {$lunchData[0]} To {$lunchData[2]} Cost: Rs.{$lunchData[3]} {$lunchData[4]}<br>";
    			}
    			if($row['d'])
    			{
    				$mealsProvided.="<b>Dinner</b> Time: {$dinnerData[0]} To {$dinnerData[2]} Cost: Rs.{$dinnerData[3]} {$dinnerData[4]}";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Meals Provided: </b><br>{$mealsProvided}<br>
						<p>
				</div>
				<script>
				food_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		else if ($result2 && mysqli_num_rows($result2)>0) 
		{//print_r($result);
			$zl=7;
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>Showing results in {$_POST['state']} <br> <br></center>
			";

    		while ($row = $result2->fetch_assoc()) 
    		{	$phone = getRow($conn,"select * from user where id='{$row['uid']}';")['phone'];
        		$facilities = '';
    			if($row['hd'])
    			{
    				$facilities.='Home Delivery,';
    			}
    			if($row['cae'])
    			{
    				$facilities.='Come & Eat,';
    			}
    			if($row['c'])
    			{
    				$facilities.='Customization.';
    			}
    			$mealsProvided = '';
    			$lunchData = explode(",",$row['ld']);
    			$breakFastData = explode(",",$row['bd']);
    			$dinnerData = explode(",",$row['dd']);
    			if($row['b'])
    			{
    				$mealsProvided.="<b>Breakfast</b> Time: {$breakFastData[0]} To {$breakFastData[2]} Cost: Rs.{$breakFastData[3]} {$breakFastData[4]}<br>";
    			}
    			if($row['l'])
    			{
    				$mealsProvided.="<b>Lunch</b> Time: {$lunchData[0]} To {$lunchData[2]} Cost: Rs.{$lunchData[3]} {$lunchData[4]}<br>";
    			}
    			if($row['d'])
    			{
    				$mealsProvided.="<b>Dinner</b> Time: {$dinnerData[0]} To {$dinnerData[2]} Cost: Rs.{$dinnerData[3]} {$dinnerData[4]}";
    			}
    			$rowid = $row['cid'].'';
        		echo"
				<div class='res-data' onclick='disp({$rowid},this);'>
					<span style='display:inline-block;cursor:pointer;position: relative; left: 10px; top:10px;'>{$row['bn']}</span>
					<a target='_blank' href='https://www.google.com//maps/dir//{$row['lng']},{$row['lat']}' style='display:inline-block;float:right;position:relative; right:60px; font-size:25px; top: 15px;'><i class='fa fa-location-arrow'></i></a>
					<a target='_blank' href='tel:{$phone}' style='display:inline-block;float:right;position:relative; right:0px; font-size:25px; top: 15px;'><i class='fa fa-phone'></i></a>
					<span style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:10px; font-size: 10px;'>{$row['bno']}, {$row['landmark']}, {$row['area']}</span>
					<p style='display:inline-block;float:left;cursor:pointer;width:200px;position: relative; left: 10px; top:20px; font-size: 12px;'></p>
				</div>
				<div class='res-data' id='{$row['cid']}' style='filter:none;margin-top:0px;height:300px;display:none;font-size:12px;'><br><br>
					<b style='margin-left:10px; font-size:13px;'>Description </b>
						<p style='margin-left:20px;'>
						<b>Facilities: </b><br>{$facilities}<br>
						<b>Meals Provided: </b><br>{$mealsProvided}<br>
						<p>
				</div>

				<script>
				food_points.push({
				'type': 'Feature',
				'properties':{
					'description':
						'<strong>{$row['bn']}</strong><p>{$row['bno']},{$row['landmark']},{$row['area']}</p><a>show more</a>'
							},
				'geometry': {
					'type': 'Point',
					'coordinates': [{$row['lng']},{$row['lat']}]
						}
				});
				</script>
        		";

    		}
		}
		else{
			echo"
			<center style='opacity:.6; font-size:12px; margin-top:10px;'>No results found near {$_POST['area']}:(<br> <br></center>
			";			
		}

		echo"

		<script>
		map.addSource('food-p', {
		'type': 'geojson',
		'data': {
		'type': 'FeatureCollection',
		'features':food_points
		}
		});
		
		map.addLayer({
		'id': 'points_food',
		'type': 'symbol',
		'source': 'food-p',
		'layout': {
		'icon-image': 'food',
		'icon-size': 0.03,
		'icon-allow-overlap':true
		}
		});
		
		map.setCenter(food_points[0]['geometry']['coordinates']);
		map.setZoom({$zl});

		r_s = true;
		
		console.log('pahuch gaya');
		console.log(r_s);
		map.on('click', 'points_food', function(e) {
		var coordinates = e.features[0].geometry.coordinates.slice();
		var description = e.features[0].properties.description;
		 
		// Ensure that if the map is zoomed out such that multiple
		// copies of the feature are visible, the popup appears
		// over the copy being pointed to.
		while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
		coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
		}
		 
		new mapboxgl.Popup()
		.setLngLat(coordinates)
		.setHTML(description)
		.addTo(map);
		});
		</script>
		";
}

}
 ?>
</div>