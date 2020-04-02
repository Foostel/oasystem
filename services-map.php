<head>
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
</head>
<div style="position: absolute; background-color: white; margin-top: 115px;margin-left: 100px;" id="MAP-VIEW">
	<div id='map' style='width: 95%; height: 50%;'></div>
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
	console.log(mapboxgl.MapMouseEvent.lngLat);
})
</script>
</div>