<?php 
session_start();
include("PHPMailer/class.phpmailer.php");
require 'PHPMailer/PHPMailerAutoload.php';
require 'list_email.php';
$handle=fopen('email.html','r');
$message= fread($handle, filesize('email.html'));

function set_name($msg,$name)
{
	str_replace('$',$name,$msg);
	return $msg;

}
function send_mails($subject)
{
		global $message;

	$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->CharSet = 'UTF-8';
					$mail->Host = "smtp-mail.outlook.com";
					$mail->SMTPAuth= true;
					$mail->Port = 587;
					$mail->Username   = "khwarzmy@outlook.com"; // SMTP account username example
					$mail->Password   = "Khwarzm2016";  
					$mail->SMTPSecure = 'tls';
					$mail->From = 'khwarzmy@outlook.com' ;
					$mail->FromName= 'khwarzmy';
					$mail->isHTML(true);
					$mail->Subject = $subject;
foreach ($customers as $person) {
				
					$mail->Body = set_name($message,$person['name']);
					$mail->addAddress($person['email']);
					$mail->send();
				}

				echo "Done":
				
}

?>