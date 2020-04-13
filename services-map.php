<head>
	<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
</head>
<div style="" id="MAP-VIEW">
	<div id='map' style='width: 100%; height: 100%; margin-top: 0px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg';
var points=Array();
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
var marker = new mapboxgl.Marker()
  .setLngLat([8.944735, 2.055294])
  .addTo(map);
map.setCenter([78.944735,22.055294]);
map.setZoom(10);
map.on('click',function(){
	console.log("hello");
});

map.on('load', function() {
map.loadImage(
'files/services-admin/food.png',
function(error, image) {
if (error) throw error;
map.addImage('user', image);
map.addSource('point', {
'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'properties':{
	'description':
'<strong>Make it Mount Pleasant</strong><p><a href="http://www.mtpleasantdc.com/makeitmtpleasant" target="_blank" title="Opens in a new window">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>'
},
'geometry': {
'type': 'Point',
'coordinates': [79.944735, 25.055294]
}
}
]
}
});

map.addLayer({
'id': 'points',
'type': 'symbol',
'source': 'point',
'layout': {
'icon-image': 'user',
'icon-size': 0.1
}
});
}
);
});


map.on('click', 'points', function(e) {
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
<script type="text/javascript">
	
</script> 
</div>


<script>
map.addSource('rooms-p', {
'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': [rooms_points
]
}
});

map.addLayer({
'id': 'rooms-layer',
'type': 'symbol',
'source': 'rooms-p',
'layout': {
'icon-image': 'room',
'icon-size': 0.03
}
});


map.on('click', 'rooms-layer', function(e) {
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