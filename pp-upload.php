<?php 

if(isset($_POST['submit']))
	
		$target_dir="files/user";
		echo "
		<script>
			console.log('hello $target_dir');
		</script>
		";
		$target_file = $target_dir. basename($_FILES["photo"]["name"]);
		echo "
		<script>
			console.log('$target_file');
		</script>
		";	
	

 ?>