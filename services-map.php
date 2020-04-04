<head>
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
</head>
<div style="" id="MAP-VIEW">
	<div id='map' style='width: 95%; height: 80%; margin-top: 50px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
var marker = new mapboxgl.Marker()
  .setLngLat([78.944735, 22.055294])
  .addTo(map);
map.setCenter([78.944735, 22.055294])
map.setZoom(13)
map.on('click',function(){
	console.log("hello");
})
</script>
<script type="text/javascript">
	
</script> 
</div>