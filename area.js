
function getin(){
var co='India';
var s=document.getElementById('sts').value;
var ct=document.getElementById('state').value;
var search_input = document.getElementById('search_input').value;
document.getElementById('search_res_list').innerHTML = "";
$.getJSON('https://api.mapbox.com/geocoding/v5/mapbox.places/{'+co+' '+s+' '+ct+' '+search_input+'}.json?&access_token=pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg', function(data) {
        for(var i=0; i<data['features'].length;i++)
        {
        	console.log(data['features'][i]);
        	document.getElementById('search_res_list').innerHTML+="<li onclick='setin(this.innerHTML);'>"+data['features'][i]['place_name']+"</li>";
        }
        });
}
function setin(v){
	document.getElementById('search_input').value=v;
	document.getElementById('search_res_list').innerHTML="";
}
