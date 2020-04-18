h=true;
h2=true;
var res=Array();
var result_points=Array();
var type='';
var popup;
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
    console.log(temp);
    return temp;
}

function filter(arr){
    document.getElementById('filter-b').getElementsByTagName('i')[0].className='fa fa-angle-down';
    document.getElementById('filter-d').style.display='none';
    document.getElementById('results').style.display='block';
    document.getElementById('results').style.zIndex='0';
    console.log(res);
    var hit=0;
    var new_points=Array();
    new_points=result_points;
    for(var i=0;i<res.length;i++)
    {
        for(var j=0;j<arr.length;j++)
        {   let idx = document.getElementById(arr[j]).name;
            var val='';
            if(document.getElementById(arr[j]).checked){val= document.getElementById(arr[j]).value};
            console.log('idx: '+idx+' val:'+val);
            if(res[i][idx] != val && val!='')
            {   console.log('hit');
                hit+=1;
                var el = document.getElementsByName(res[i]['cid']);
                document.getElementById(res[i]['cid']).style.display='none';
                for(var s=0;s<el.length;s++)
                {
                    el[s].style.display='none'; 
                    for(let u=0;u<new_points.length;u++)
                        {   console.log('check in? ');
                            console.log(new_points);
                            if(new_points[u]['id']==res[i]['cid'])
                            {   new_points = remove(new_points,u);
                                console.log(new_points);
                            }
                        }
                }

                
                break;
            }
            else{
                var el = document.getElementsByName(res[i]['cid']);
                for(var s=0;s<el.length;s++)
                {
                    el[s].style.display='block';
                }
            }
        }
    }
    
    if (map.getLayer('points_room')) map.removeLayer('points_room');
    if (map.getLayer('points_hostel')) map.removeLayer('points_hostel');
    if (map.getLayer('points_food')) map.removeLayer('points_food');
    if(new_points.length>0)
    {    
        if(type=='room') map.removeSource('rooms-p');
        if(type=='hostel') map.removeSource('hostel-p');
        if(type=='tiffin') map.removeSource('food-p');
    console.log('source removed');
    zl=parseInt(zl);
    console.log("test: type .06:: "+type)
    projectp(new_points,type,zl,1);
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
  }
  else{
    obj.style.backgroundColor='white';
    obj.style.color='black';
    document.getElementsByClassName('MAP-VIEW')[0].style.left='400px';
    document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='-1';
    document.getElementById('ifm').style.zIndex='0';
    document.getElementById('ifm').style.display='block';

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
	var k = document.getElementById(s).style.display;
    console.log(k);
    if(k=='none'){
	console.log("Block");
	document.getElementById(s).style.display="block";

	}
	else{
		document.getElementById(s).style.display="none";
        console.log("None");
	}

}
function select(item,name)
{
    var els = document.getElementsByName(name);
    console.log(els[0].value);
    for(var i=0;i<els.length;i++)
    {   console.log('yeah');
        els[i].style.backgroundColor='white';
    }

    item.style.backgroundColor='black';
}
function invoke(s){
    if(h2){
        console.log("SHOW");
    document.getElementById(s).style.display="block";
    let myElement = document.querySelector(".section");
    h2=false;
    }
    /*else{
        console.log("HIDE");
        document.getElementById(s).style.display="none";
        h=true;
    }*/
    
}
function revoke(s){
    if(h2==false){
        console.log("HIDE");
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
        console.log("case0");
        document.getElementById('pass1').style.color="black";
        break;
        case 1:
        console.log("case1");
        document.getElementById('pass1').style.color="red";
        break;
        case 2:
        console.log("case2");
        document.getElementById('pass1').style.color="orange";
        break;
        case 3:
        console.log("case3");
        document.getElementById('pass1').style.color="green";
        break;
        case 4:
        console.log("case4");
        document.getElementById('pass1').style.color="green";
        break;       
    }

    pst=count;
    console.log(pst);
    return pst;
}
function validate(){
    let pst=0;
    let f=true;
    console.log("call");
    alert("validate?");
    let x = document.getElementById("phoneno").value;
    let p1 = document.getElementById("pass1").value;
    let p2 = document.getElementById("pass2").value;
    var rx = /^[0-9]{10}$/;
    if(!rx.test(x)){
        f=false;
        alert("Please enter valid contact number");
    }
    pst= passC();
    console.log(pst);
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
    console.log(100);
    let x= document.getElementById('pass1');
    if(x.type=='password'){
    console.log(111);
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
    console.log("geolocation");
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
    console.log('rqrd');
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
    console.log('projectp');
    if(type=='room')
    {
    console.log(pointsar);
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
        console.log('zl= '+zl);
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
    console.log("test: type: "+type);
    if(type=='tiffin')
    {   console.log('in tiffin');
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

    if(!filter && !t)
        {
        console.log('popup added');
        map.on('click',pop_type,addpop);
        t=1;
        }
}