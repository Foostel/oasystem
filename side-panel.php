<script type="text/javascript">
	
            $(function(){
                $('#pp-update').load("update-pp.php");
            });
</script>
<div class="user-info">
	<?php
		require'user-data.php';
		if(!isset($_SESSION['id']))
		{
			header("location:page.php");
		}
		//code to retrive user profile using session veriable index 'userID'
		 
		$user_name=$fname.' '.$lname;
		echo "
		<script>
		document.getElementById('u-pp').src='$pp';
		</script>
		";
		echo "
		<script>
		document.getElementById('u-name').innerHTML='$user_name';
		</script>
		"; 

	?>

	<img onclick="toggle('pp-update');" id="u-pp" style='cursor:pointer;height:70px; border:solid red; border-radius:50%;'><p id="u-name" style='margin-top:0px; font-weight:600;'></p>
	<a href="" style="display:inline-block;font-size: 15px; margin-top: 10px;">Edit profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	<a href="" style="display:inline-block;font-size: 15px; margin-top: 10px;">Settings <i class="fa fa-cog" aria-hidden="true"></i></a>
	<a href="logout.php"><button class="btn" style="width: 100px;margin-top: 100px;">Sign out </button></a>
</div>
<div class="pop-up" id="pp-update" style="text-align: center;">
	
</div>