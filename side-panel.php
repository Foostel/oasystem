<script type="text/javascript">
            $(function(){
                $('#u-pp').load('update-pp.php');
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
		document.getElementsByClassName('user-pic').src='$';
		</script>
		";
		 

	?>

	<div id="u-pp" style='text-align:center;cursor:pointer;height:70px; width:70px; '></div>
	<div style="position: relative;top:80px;"><a href="user-profile.php#personal-details" style="display:inline-block;font-size: 15px; margin-top: 10px;">View profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	<a href="" style="display:inline-block;font-size: 15px; margin-top: 10px;">Settings <i class="fa fa-cog" aria-hidden="true"></i></a>
	<a href="logout.php"><button class="btn" style="width: 100px;margin-top: 100px;">Sign out </button></a>
	</div>
</div>
