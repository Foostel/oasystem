<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
		<script type='text/javascript'>
	function fetch(str){
		str = str.toLowerCase();
		var ar = str.split(' ');
		var service = [['room','rooms','residencies'],['hostel','hostels','residencies'],['tiffin centers','tiffin','tiffen','tiffin center', 'tiffin-center','tiffin-centers','food','food center', 'foods', 'meal', 'mess']];
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
		console.log(param);
		var add=Array();
		$.getJSON('https://api.mapbox.com/geocoding/v5/mapbox.places/{'+str+'.json?limit=1&access_token=pk.eyJ1IjoibWloaXJzb25pNzgxIiwiYSI6ImNrOGlrZTc5ajAwcnkzbHFxd3NkbnZwc3UifQ.qoBrl5wvQ6LjGZd369FnIg', function(data) {
        add=data.features[0]['place_name'].split(",");
        console.log(add);
        var dat = 'tos='+param+'&country='+add[add.length-1]+'&state='+add[add.length-2]+'&city='+add[add.length-3]+'&area='+add[add.length-5];
        window.location='search-engine.php?'+dat;
    	});

	}
</script>
<?php
	if(isset($_POST['submit']))
	{ 
	echo"
	<script>
	fetch('".$_POST['search_string']."');
	</script>
	";
	}
 ?>

 <!-- Your code here -->

 <?php
 $country = $_GET['country'];
 $state = $_GET['state'];
 $city = $_GET['city'];
 $area = $_GET['area'];
 $req_ser = $_GET['tos'];
 echo $req_ser;
 ?>