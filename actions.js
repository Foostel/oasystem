h=true;
h2=true;
var res=Array();
var result_points=Array();
var type='';
var popup;
var user_location=[0,0];
getCurLoc();
function getCurLoc() {
    console.log("getCurLoc called ------------------- ");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        function(position) {
        user_location[0] = position.coords.longitude;
        user_location[1] = position.coords.latitude;
        $.post('curloc.php',{curloc:user_location},function(data){
            var flag = data;
            if(flag=='reload')
            {
                location.reload();
            }
        });
        },function(e){

            $.post('curloc.php',{curloc:['undefined','undefined']},function(data){
            var flag = data;
            if(flag=='reload')
            {
                location.reload();
            }
        });
        });
  } else {
    alert("Geolocation is not supported by this browser.");
  }

}
function sort_fn(n){
    var w=n.value;
    if(w!='')
    {
    sort=" ORDER BY "+w;
    }
    else{
        sort='';    
    }
    
    if(ss!='' && n)
    {   
        fetch_d(ss,fltr,sort,nearme);
    }

}
function loadfilter(obj){   
    fltr='';
    sort="";
    document.getElementById('sortby').selectedIndex=0;
    if(obj.value=='room')
    {   
        ss='rooms '+ss;
        $(function(){
                $('#filter-d').load("room-filter.php");
            });
        $(function(){
                $('#sort-d').load("room-sort.php");
            });
        
    }   
    else if(obj.value=='hostel')
    {
        ss='hostel '+ss;
        $(function(){
                $('#filter-d').load("hostel-filter.php");
            });
    }
    else if(obj.value=='food'){
        ss='food '+ss;
        $(function(){
                $('#filter-d').load("tiffin-filter.php");
            });
    }
    else{
        $(function(){
                document.getElementById('filter-d').innerHTML='<center><span style="color:gray; font-weight: 300; position: relative; top: 100px;">-Select type search first-</span></center>';
            });
    }
}
function subSectionSelector(obj){
    var x = document.getElementsByClassName('sub-section-menu');
    for(let i=0;i<x.length;i++)
    {
        x[i].style.backgroundColor='#CFCFCF';
    }
    obj.style.backgroundColor='white';
}
function validateF(){
                if(!document.getElementById('tnc').checked){
                    alert('Accept our terms & conditions to proceed registration');
                    return false;
                }
                if(document.getElementById('lnglat').value=='')
                {
                    return confirm("It seems you didn't entered geo-location, this will help customers to easily find your service. Do you want to proceed without it ?");
                }
                return true;
            }

function remove(arr,i)
{
    temp= Array();
    for(let x=0;x<arr.length;x++)
    {
        if(x!=i)
        {
            temp.push(arr[x]);
        }
    }
    
    return temp;
}

function filter(arr){
    
    document.getElementById('filter-b').getElementsByTagName('i')[0].className='fa fa-angle-down';
    document.getElementById('filter-d').style.display='none';
    document.getElementById('ifm').style.display='block';
    document.getElementById('ifm').style.zIndex='0';
    fltr='';
    
        for(var j=0;j<arr.length;j++)
        {   let idx = document.getElementById(arr[j]).name;
            var val='';
            if(document.getElementById(arr[j]).checked){val= document.getElementById(arr[j]).value};
            if(val!='')
            {
            fltr+=" and "+idx+"='"+val+"' ";
            
            }
            
        }
    
    if(ss!='')
    {
    fetch_d(ss,fltr,sort,nearme);
    }

}

function mapViewToggle(obj)
{ 
  if(obj.style.backgroundColor=='white')
  { obj.style.backgroundColor='black';
    obj.style.color='white';
    document.getElementsByClassName('MAP-VIEW')[0].style.left='0px';
    document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='0';
    document.getElementById('ifm').style.zIndex='-1';
    document.getElementById('ifm').style.display='none';
    document.getElementById('results').style.display='none';
  }
  else{
    obj.style.backgroundColor='white';
    obj.style.color='black';
    document.getElementsByClassName('MAP-VIEW')[0].style.left='400px';
    document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='-1';
    document.getElementById('ifm').style.zIndex='0';
    document.getElementById('ifm').style.display='block';
    document.getElementById('results').style.display='block';
  } 
}

function clearPopups(){
            var x=document.getElementsByClassName('overlays');
            for(var i=0;i<x.length;i++)
            {   
                x[i].style.display='none';
            }
        }

function toggle(s){
    if(document.getElementById(s).style.display=='none'){
	document.getElementById(s).style.display="block";

	}
	else{
		document.getElementById(s).style.display="none";
        
	}

}
function select(item,name)
{
    var els = document.getElementsByName(name);

    for(var i=0;i<els.length;i++)
    {   
        els[i].style.backgroundColor='white';
    }

    item.style.backgroundColor='black';
}
function invoke(s){
    if(h2){
        
    document.getElementById(s).style.display="block";
    let myElement = document.querySelector(".section");
    h2=false;
    }
    /*else{
        document.getElementById(s).style.display="none";
        h=true;
    }*/
    
}
function revoke(s){
    if(h2==false){
        
        document.getElementById(s).style.display="none";
        h2=true;
    }
}
function passC(){
    var p = document.getElementById('pass1').value;
    var regex = new Array();
    regex.push(/[A-Z]/); //Uppercase Alphabet.
    regex.push(/[a-z]/); //Lowercase Alphabet.
    regex.push(/[0-9]/); //Digit.
    regex.push(/[@$!%*#?&]/); //Special Character.
    let count=0;
    for(let i=0;i<4;i++)
    {
        if(regex[i].test(p)){
            count++;
        }
    }
    if(p=""){
        count=0;
    }
    switch(count){
        case 0:
        
        document.getElementById('pass1').style.color="black";
        break;
        case 1:
        
        document.getElementById('pass1').style.color="red";
        break;
        case 2:
        
        document.getElementById('pass1').style.color="orange";
        break;
        case 3:
        
        document.getElementById('pass1').style.color="green";
        break;
        case 4:
        
        document.getElementById('pass1').style.color="green";
        break;       
    }

    pst=count;
    
    return pst;
}
function validate(){
    let pst=0;
    let f=true;
    let x = document.getElementById("phoneno").value;
    let p1 = document.getElementById("pass1").value;
    let p2 = document.getElementById("pass2").value;
    var rx = /^[0-9]{10}$/;
    if(!rx.test(x)){
        f=false;
        alert("Please enter valid contact number");
    }
    pst= passC();
    
    if(!(pst>2) && !(p1.length>7))
    {
        alert("Created password is too weak");
        f=false;
    }
    else{
        if(p1!=p2){
        alert("passwords doesn't match");
        f=false;
    }
    }
    
    if(f && confirm("Confirm submission ?")){
        return true;
    }
    else{
        return false;
    }

}

function showp(){
    
    let x= document.getElementById('pass1');
    if(x.type=='password'){
    
    x.type='text'; 
    document.getElementById('eye').className='fa fa-eye';    
    }
    else{
    x.type='password'; 
    document.getElementById('eye').className='fa fa-eye-slash';   

    }
}

function check(id)
{   var obj = document.getElementById(id);    
    if(obj.style.display=='none')
        {   
            obj.style.display='inline-block';
        }
        else{
            obj.style.display='none';
        }          
}
function getloc(x)
{
    
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  
  document.getElementById(x).style.backgroundColor='black';
  document.getElementById(x).style.color='white';
  document.getElementById(x).value=position.coords.latitude +","
  + position.coords.longitude;
  document.getElementById(x).innerHTML='Location added';
}
getLocation();
}
function disp(id)
{
    var e = document.getElementById(id);
    if(e.style.display=='none')
    {
        e.style.display='block';
    }
    else{
        e.style.display='none';
    }
}

function rqrd(v,nextloc){
    
    for(var i=0; i<v.length;i++)
    {
        if(document.getElementById(v[i]).value=='')
        {
         document.getElementById(v[i]).focus();
         alert('please fill all the required fields');
         return 0;   
        }

    }
    
        window.location=nextloc;
    
}
function projectp(pointsar,type,zl,filter){
    var pop_type='';
    
    if(pointsar.length>0)
    {
    if(type=='room')
    {
    
    map.addSource('rooms-p', {
        'type': 'geojson',
        'data': {
        'type': 'FeatureCollection',
        'features':pointsar
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
        map.setCenter(pointsar[0]['geometry']['coordinates']);
        
        map.setZoom(zl);
        r_s = true;   
        pop_type='points_room';
        
    }
    if(type=='hostel')
    {
        map.addSource('hostel-p', {
        'type': 'geojson',
        'data': {
        'type': 'FeatureCollection',
        'features':pointsar
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
        map.setCenter(pointsar[0]['geometry']['coordinates']);
        map.setZoom(zl);
        pop_type='points_hostel';
    }
    
    if(type=='tiffin')
    {   
        
        map.addSource('food-p', {
        'type': 'geojson',
        'data': {
        'type': 'FeatureCollection',
        'features':pointsar
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
        
        map.setCenter(pointsar[0]['geometry']['coordinates']);
        map.setZoom(zl);

        r_s = true;
        pop_type='points_food';
    }

    function addpop(e)
    {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;
         
        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.

        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }
        popup=
        new mapboxgl.Popup()
        .setLngLat(coordinates)
        .setHTML(description)
        .addTo(map);
        
    }

    if(!filter && !rt && pop_type=='points_room')
        {
        
        map.on('click',pop_type,addpop);
        map.on('mouseenter', pop_type, function() {
        map.getCanvas().style.cursor = 'pointer';
        });
         
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', pop_type, function() {
        map.getCanvas().style.cursor = '';
        });
        rt=1;
        }

    if(!filter && !ht && pop_type=='points_hostel')
        {
        
        map.on('click',pop_type,addpop);
        map.on('mouseenter', pop_type, function() {
        map.getCanvas().style.cursor = 'pointer';
        });
         
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', pop_type, function() {
        map.getCanvas().style.cursor = '';
        });
        ht=1;
        }

    if(!filter && !ft && pop_type=='points_food')
        {
        
        map.on('click',pop_type,addpop);
        map.on('mouseenter',pop_type, function() {
        map.getCanvas().style.cursor = 'pointer';
        });
         
        // Change it back to a pointer when it leaves.
        map.on('mouseleave', pop_type, function() {
        map.getCanvas().style.cursor = '';
        });
        ft=1;
        }
    }
}