<link rel="stylesheet" type="text/css" href="style.css">
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
<script type="text/javascript" src="actions.js"></script>
<script type="text/javascript">
		mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg';
		var t=0;
		var map = new mapboxgl.Map({
		container: 'map-d',
		style: 'mapbox://styles/mapbox/streets-v11'
		});
		var ss='';
		var fltr='';
		var sort='';
		sort='';
            	$(function(){
                $('#sort-d').load("sort-by.php");
            });

           map.addControl(
			new mapboxgl.GeolocateControl({
			positionOptions: {
			enableHighAccuracy: true
			},
			trackUserLocation: true
			})
			);
	</script>

<style type="text/css">
	@media(max-width: 600px)
	{
	#ifm{
        padding-right: 200px;
    	}	
	}
</style>
<script type="text/javascript">
	$('#filter-b').on('click',function(e)
	{	if(document.getElementById('filter-d').style.display=='none')
		{	document.getElementById('filter-b').getElementsByTagName('i')[0].className='fa fa-angle-up';
			document.getElementById('filter-d').style.display='block';

		}
		else{
			document.getElementById('filter-b').getElementsByTagName('i')[0].className='fa fa-angle-down';
			document.getElementById('filter-d').style.display='none';
			
		}
	});


	$('#sort-b').on('click',function(e)
	{	if(document.getElementById('sort-d').style.display=='none')
		{	document.getElementById('sort-b').getElementsByTagName('i')[0].className='fa fa-angle-up';
			document.getElementById('sort-d').style.display='block';

		}
		else{
			document.getElementById('sort-b').getElementsByTagName('i')[0].className='fa fa-angle-down';
			document.getElementById('sort-d').style.display='none';
			
		}
	});



	function search(){

	var search_string = document.getElementById('search_string').value;
	$.post('fetch_d.php',{search_string:search_string},
		    function(dat) {
			 $('#ifm').html(dat);
		    });
	}
	
	$('#search_string').on("keypress", function(e) {
            /* ENTER PRESSED*/
            if (e.keyCode == 13) {
                /* FOCUS ELEMENT */
                document.getElementById('submit').click();
            }
        });
</script>
<div class="search-panel" style="">
		<input style="width: 240px; padding-right: 50px; padding-left: 10px;" type="" class="inputs" name="search_string" id="search_string" placeholder="Search services near ..." >
		
		<button onclick="search();" id="submit" type="button" name="submit" style="z-index:0;position: absolute; right: 40px; background: transparent; border-style: none; cursor: pointer; top:13px; font-size: 20px;"><i class="fa fa-search" ></i></button>
	
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div>
<select class="inputs" id="s-type" style="font-family:segoe UI;width:120px; height: 30px; position: relative; display: block; background-color:white; color:black;" onchange="loadfilter(this);">
	<option value="">Type search</option>
	<option value="room">Room</option>
	<option value="hostel">Hostel</option>
	<option value="food">Food</option>
</select>
<button id="filter-b" class="btn" style="background-color:white;color:black;cursor:pointer;width: 80px; height: 30px; margin: 3px 0px;">Filter <i class="fa fa-angle-down"></i></button>

<select name="st" class="inputs" id="sortby" style="font-family:segoe UI;width:120px; height: 30px; position: relative; display: inline-block;" onchange="sort_fn(this);">
	<option value="">Sort By</option>
	<option value="avgcost ASC">Cheapest first</option>
	<option value="avgcost DESC">Expensive first</option>
</select>


<button class="btn mv" id="mv-btn" style="background-color:white;color:black;cursor:pointer;width: 80px; height: 30px; margin: 3px 0px;" onclick="mapViewToggle(this);">Map View</button>
	<div id="filter-d" style="overflow-y:scroll; display:none;width: 300px; height: 400px; background-color: white;">
		<center><span style="color:gray; font-weight: 300; position: relative; top: 100px;">-Select type search first-</span></center>
	</div>
	<div id="ifm" style="">
	
	</div>

</div>

</div>
<div class="MAP-VIEW" style="">
	<script type="text/javascript">
		map.loadImage(
		'files/services-admin/room.png',
		function(error, image) {
		if (error) throw error;
		console.log('passs');
		map.addImage('room', image);
	});

	map.loadImage(
		'files/services-admin/food.png',
		function(error, image) {
		if (error) throw error;
		console.log('passs');
		map.addImage('food', image);
	});

	map.loadImage(
		'files/services-admin/hostel.png',
		function(error, image) {
		if (error) throw error;
		console.log('passs');
		map.addImage('hostel', image);
	});
	var r_s=false;
	</script>
	<div id="map-d" style=''>
		
	</div>

</div>
