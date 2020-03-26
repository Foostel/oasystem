<script type="text/javascript">
	function preview(pic,vp)
	{	
    	document.getElementById('submit').click();
	}
	function checksize(elm)
	{
		var fs= elm.files.item(0).size/1024;
		console.log(fs);
		if(fs>8000)
		{
			window.alert('file size is too large select < 8MB');
			return 0;
		}
		return 1;
	}
</script>
<div style="display: inline-block; width: 100px;">
	<?php 
	require'user-data.php';
	echo"
	<label style='cursor:pointer;' for='updatepp'><img id='ppic' style='width:70px; height:70px;' src='$pp'></label>
	";

	 ?>
	 <form action="pp-upload.php" method="post" enctype="multipart/form-data">
	 <input id="updatepp" type="file" name="photo" style="opacity: 0; position: absolute; z-index: -1;" onchange="if(checksize(this)){preview(this,'ppic');}" accept="image/jpeg">
	 <input style="display: none" type="submit" name="submit" id="submit">
	 
	 </form>
	 <p><?php echo $fname.' '.$lname; ?></p>
</div>