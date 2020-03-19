<?php 
function sendOTP($to,$OTP)
{
	$subject = "email verification";
	$message = "verification code for FOOSTEL ACCOUNT REGISTERATION IS <br>".$OTP;
	$headers = "From: badshahandhoneysingh100@gmail.com \r \n";
	$headers.= "MIME-Version: 1.0"."\r \n";
	$headers.= "Content-type:text/html; charset=UTF-8"."\r \n";
	if(mail($to,$subject,$message,$headers))
	{
		echo"mail successfully sent";

	}
	else{
		echo "Failed to sent mail";
	}
}	
	

 ?>