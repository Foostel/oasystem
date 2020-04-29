<div style="display: absolute; z-index: 1; top: 100px;">
	
<p style="text-align: center;">Choose on Map</p><i style="float: right; position: absolute; top:10px; right: 10px;font-size: 30px; cursor: pointer;" class="fa fa-close" onclick="clearPopups();
"></i>
<button id="myc" class="btn" style="position: absolute; width: 180px; background-color:rgba(0,0,0,0.7); cursor: pointer; top: 320px; left: 115px; padding: 1px; height: 30px;">Use My Current Location<i class="fa fa-map-marker"></i></button>
<button id="remove" class="btn" onclick="clearPopups();document.getElementById('geo-l').innerHTML ='Add geo-location';
document.getElementById('lnglat').value ='';" style="position: absolute; width: 200px; background-color:gray; cursor: pointer; left: 0px; top: 360px; padding: 1px; height: 40px;">Remove</button>
<button id="add" class="btn" onclick="clearPopups();" style="position: absolute; width: 200px; background-color:rgba(0,0,0,1); cursor: pointer; left: 200px; top: 360px; padding: 1px; height: 40px;">Add</button>
</div>

<div id="map-pop" style="width: 100%; height: 100%;"></div>

<script>
var pos;
if(navigator.geolocation)
{
	pos = navigator.geolocation.getCurrentPosition(showPosition);
}
function showPosition(position)
{
	lng = position.coords.longitude;
	lat = position.coords.latitude;
var xs= {'lng':lng,'lat':lat};
var ll= xs['lng']+","+xs['lat'];        
mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg';
var map = new mapboxgl.Map({
container: 'map-pop', // container id
style: 'mapbox://styles/mapbox/streets-v11',
center: [lng, lat], // starting position
zoom: 8 // starting zoom
});
var marker = new mapboxgl.Marker(); 
map.on('click', function(e) {
console.log(e.lngLat.wrap());
marker.remove();
marker.setLngLat(e.lngLat.wrap());
marker.addTo(map);
ll = e.lngLat.wrap();
$('#add').on('click',function(ev)
{
console.log(ll['lng']+"sss");
document.getElementById('geo-l').innerHTML = ll['lng']+","+ll['lat'];
document.getElementById('lnglat').value = ll['lng']+","+ll['lat'];

});
console.log(document.getElementById('geo-l').innerHTML);
});
$('#myc').on('click',function(ev)
{
marker.remove();
marker.setLngLat(xs);
marker.addTo(map);
});


}
</script>
