<?php
function sendOTP($emil,$otp)
{
  require('phpmailer/class.phpmailer.php');
  $message_body="One Time Password <br/>".$otp;
  $mail=new PHPMailer();
  $mail->AddReplyTo('badshahandhoneysingh100@gmail.com','Jayant Gawali');
  $mail->SetForm('badshahandhoneysingh100@gmail.com','Jayant Gawali');
  $mail->AddAddress($email);
  $mail->Subject= "OTP to Login";
  $mail->MsgHTML($message_body);
  $result=$email->Send();
  if(!$result){
  	echo "Mailer error".$mail->ErrorInfo;
  }else{
  	return $result;}
  }


}
?>