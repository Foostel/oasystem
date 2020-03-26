<?php
require'user-data.php';
function checkExtension($ext,$extensions)
{
	foreach ($extensions as $s) {
			# code...
			if($ext==$s)
			{
				return 1;
			}
		}
		echo"invalid ext";
		return 0;
}
if(isset($_POST['submit']))
{
	
		$target_dir="./files/user/";
		$add=1;

		$target_file = $target_dir.$id.'_PP'.'.jpg';
		echo 'pp name'.$target_file;
		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$imgTypes = array('jpg','jpeg','png');
		$add=checkExtension($filetype,$imgTypes);
		if($add)
		{
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_file))
				{	$s = mysqli_query($conn,"UPDATE User SET pp = '$target_file' WHERE id = '$id';");
					if($s){header('location:user-home.php');}else{echo'DB-FAIL';}
				}
				else{
					echo"<center>Something went wrong. :(</center>";
				}

		}
}
	

 ?>