<?php

function sendOTP($email,$otp)
{
require ('PHPMailer/src/Exception.php');
require ('PHPMailer/src/PHPMailer.php');
require ('PHPMailer/src/SMTP.php');
  $message_body="One Time Password <br/>".$otp;
  $mail=new PHPMailer();
  $mail->AddReplyTo('badshahandhoneysingh100@gmail.com','Jayant Gawali');
  $mail->SetFrom('badshahandhoneysingh100@gmail.com','Jayant Gawali');
  $mail->AddAddress($email);
  $mail->Subject= "OTP to Login";
  $mail->MsgHTML($message_body);
  $result=$email->send();
  if(!$result){
  	echo "Mailer error".$mail->ErrorInfo;
  }else{
  	return $result;}
  }

sendOTP('msonii2000@gmail.com','123123');
?>