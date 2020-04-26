<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src='actions.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
		<script type='text/javascript'>
			var ss='';
	function fetch_d(str,fltr,sort){
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
		ss=str;	
		console.log('called!');
		str = str.toLowerCase();
		console.log('Tostr:: '+fltr);
		var ar = str.split(' ');
		var service = [['room','rooms','residencies'],['hostel','hostels','residencies'],['tiffin centers','tiffin','tiffen','tiffin center', 'tiffin-center','center','tiffin-centers','tifin','tifen','food','food center', 'foods', 'meal', 'mess']];
		var param = [0,0,0];
		for(let i=0;i<ar.length;i++)
		{
			if(param[0]==1 && param[1]==1 && param[2]==1)
			{
				break;
			}
			for(let j=0; j<service.length;j++)
			{
				for(let k=0;k<service[j].length;k++)
				{
					if(service[j][k]==ar[i])
					{
						ar[i]='';
						param[j]=1;
					}
				}
			}	
		}
		if(param[0])
		{	if((document.getElementById('s-type').selectedIndex)!='1'){
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

		var rmwd = ['near','in','at','to','city','area'];
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
		console.log("Lo");
		var add=Array();
		arr = ar.join(" ").trim();
		console.log(ar);
		if(arr.trim()!='')
		{
		$.getJSON('https://api.mapbox.com/geocoding/v5/mapbox.places/{'+arr+'.json?limit=1&access_token=pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg&country=In', function(data) {
		console.log(data);
        add=data.features[0]['place_name'].split(",");
        	
        console.log(add);
        console.log(data);
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
        console.log(ar);
        console.log(area);
        $.post('search-engine.php',{tos:param,fltr:fltr,sort:sort,country:country,state:state,city:city,area:area,fulladd:data.features[0]['place_name']},
		    function(dat) {
			 $('#results').html(dat);
				console.log('hola');
				console.log(res);

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
	fetch_d('".$_POST['search_string']."',fltr,sort);
	</script>
	";
	}
 ?>
 <div id="results" style="">
 	
 </div>
