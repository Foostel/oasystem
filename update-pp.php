<script type="text/javascript">
	function preview(pic,vp)
	{	
    	document.getElementById('submit').click();
	}
</script>
<div style="display: inline-block;">
	<p>Profile Picture</p>
	<?php 
	require'user-data.php';
	echo"
	<label style='cursor:pointer;' for='updatepp'><img id='ppic' style='width:200px; height:200px;' src='$pp'></label>
	";

	 ?>
	 <form action="pp-upload.php" method="post" enctype="multipart/form-data">
	 <input id="updatepp" type="file" name="photo" style="opacity: 0; position: absolute; z-index: -1;" onchange="console.log('pic');preview(this,'ppic');">
	 <input style="display: none" type="submit" name="" id="submit">
	 </form>

</div>