<div class="user-info">
	<?php
		//code to retrive user profile using session veriable index 'userID'
		$user_pp = 'user-logo.png'; 
		$user_name='User name';
		echo "<img style='height:70px; border:solid red; border-radius:50%;' src='$user_pp'><p style='margin-top:0px; font-weight:600;'>$user_name</p>"; 

	?>
	<a href="" style="display:inline-block;font-size: 15px; margin-top: 10px;">Edit profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	<a href="" style="display:inline-block;font-size: 15px; margin-top: 10px;">Settings <i class="fa fa-cog" aria-hidden="true"></i></a>
	<a href="logout.php"><button class="btn" style="width: 100px;margin-top: 100px;">Sign out </button></a>
</div>