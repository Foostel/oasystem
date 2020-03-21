<?php 
function sendmail($to,$msg)
{
require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->setFrom('Foostel');
$mail->FromName='Foostel';
$mail->Username='badshahandhoneysingh100@gmail.com';
$mail->Password='000121262621762';
$mail->Subject='Foostel email verification';
$mail->Body="OTP for foostel verification is <br> <h3>$msg</h3>";
$mail->AddAddress($to);

$mail->send();
}
 ?>
