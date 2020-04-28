<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src='actions.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
		<script type='text/javascript'>
			var nearme=0;
	function fetch_d(str,fltr,sort,nm){
		console.log('fetch_d called ------------------------ ');
		nearme=nm;
 		if(nearme)
 		{
 			str=ss;
 			if(sort=='')
 			{
 			sort=" ORDER BY (lat-'$lat')*(lat-'$lat')+(lng-'$lng')*(lng-'$lng') DESC";
 			document.getElementById('sortby').selectedIndex=3;
 			}
 		}
 		ss=str;
 		console.log("str: "+str);
 		console.log('filter: '+fltr+" sort: "+sort);
 		if(document.getElementById('mv-btn').style.backgroundColor=='black')
 		{

 		document.getElementsByClassName('MAP-VIEW')[0].style.left='0px';
    	document.getElementsByClassName('MAP-VIEW')[0].style.zIndex='0';
    	document.getElementById('ifm').style.zIndex='-1';
    	document.getElementById('ifm').style.display='none';
    	document.getElementById('results').style.display='none';
 		}


		document.getElementById('results').innerHTML = "<center style='font-size: 12px; color:gray; margin-top:10px;'>Searching . . .</center>";
		if (map.getLayer('points_room')) map.removeLayer('points_room');
		if (map.getLayer('points_hostel')) map.removeLayer('points_hostel');
		if (map.getLayer('points_food')) map.removeLayer('points_food');
		str = str.toLowerCase();
		var ar = str.split(' ');
		var service = [['room','rooms','residencies'],['hostel','hostels','residencies'],['tiffin centers','tiffin','tiffen','tiffin center', 'tiffin-center','center','tiffin-centers','tifin','tifen','food','food center', 'foods', 'meal', 'mess']];
		var param = [0,0,0];
		var ret=0;
		for(let i=0;i<ar.length && !ret;i++)
		{
			if(param[0]==1 && param[1]==1 && param[2]==1)
			{
				break;
			}
			for(let j=0; j<service.length && !ret;j++)
			{
				for(let k=0;k<service[j].length;k++)
				{
					if(service[j][k]==ar[i])
					{
						ar[i]='';
						param[j]=1;
						ret=1;
						break;
					}
				}

			}	
		}
		if(param[0])
		{
			if((document.getElementById('s-type').selectedIndex)!='1'){
            	document.getElementById('s-type').selectedIndex='1';
            	fltr='';
            	$(function(){
                $('#filter-d').load("room-filter.php");
            });
            	

			}
		}
		else if(param[1])
		{	if((document.getElementById('s-type').selectedIndex)!='2'){
            	document.getElementById('s-type').selectedIndex='2';
            	fltr='';
            	$(function(){
                $('#filter-d').load("hostel-filter.php");
            });
			}
		}
		else if(param[2]){
			if((document.getElementById('s-type').selectedIndex)!='3'){
            	document.getElementById('s-type').selectedIndex='3';
            	fltr='';
            	$(function(){
                $('#filter-d').load("tiffin-filter.php");
            });
			}
		}
		
		var rmwd = ['near','in','at','to','city','area','near me'];
		for(i=0;i<rmwd.length;i++)
		{
			for(j=0;j<ar.length;j++)
			{
				if(ar[j]==rmwd[i])
				{
					ar[j]="";
				}
			}
		}
		var add=Array();
		arr = ar.join(" ").trim();
		if(nearme)
		{
			arr=userloc[0]+','+userloc[1];
		}
		if(arr.trim()!='')
		{
		$.getJSON('https://api.mapbox.com/geocoding/v5/mapbox.places/'+arr+'.json?limit=1&access_token=pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg&country=In', function(data) {
        add=data.features[0]['place_name'].split(",");
        var dat = 'tos='+param+'&country='+add[add.length-1]+'&state='+add[add.length-2]+'&city='+add[add.length-3]+'&area='+data.features[0]['place_name'];
        var country=add[add.length-1];
        var state=add[add.length-2];
        if(state)
        {
        	state = state;
        	console.log("state - "+state);
        }
        else{
        	state="";
        }
        var city=add[add.length-3];
        if(city)
        {
        	city = city;
        	console.log("City - "+city);
        }
        else{
        	city="";
        }
        for(let m=0;m<ar.length;m++)
        {
        	if(ar[m]==city.toLowerCase().trim() || ar[m]==state.toLowerCase().trim() || ar[m]==country.toLowerCase().trim())
        	{
        		ar[m]='';
        	}
        }
        area = ar.join(" ").trim();
        $.post('search-engine.php',{tos:param,fltr:fltr,sort:sort,country:country,state:state,city:city,area:area,fulladd:data.features[0]['place_name']},
		    function(dat) {
			 $('#results').html(dat);

		    });
    	});

	
	}
	else{
			document.getElementById('results').innerHTML = "<center style='font-size: 12px; color:gray; margin-top:10px;'>No results found :(</center>";
	}

}

</script>
<?php
	if(isset($_POST['search_string']))
	{ 
	echo"
	<script>
	fetch_d('".$_POST['search_string']."',fltr,sort,".$_POST['nearme'].");
	</script>
	";
	}
 ?>
 <div id="results" style="">
 	
 </div>
