<?php
	function printr($a)
	{
		foreach($a as $i)
		{
			foreach ($i as $key) {
				# code...
				echo $key ." ";
			}
			echo "<br>";
		}
	} 
	require'db-connection.php';
	$q = 'select * from room_facility where ge=1';
	$r = mysqli_query($conn,$q);
	$dat = array();
	while($d = mysqli_fetch_assoc($r))
	{
		array_push($dat, $d);
	}
	printr($dat);
	$fltr = array('tc'=>1);
	$ss = filter($dat,$fltr);
	echo $ss[0]." ".$ss[1];
	function filter($ar,$f)
	{	$res = array();
		$keys = array_keys($f);
		for($i=0;$i<count($ar);$i++)
		{	$c=0;
			foreach ($keys as $key) {
				if($f[$key]!=$ar[$i][$key])
				{
					break;
				}
				else{
					$c++;
				}
			}
			if($c==count($f))
			{
				array_push($res,$i);
			}
		}
		return $res;
	}

 ?>