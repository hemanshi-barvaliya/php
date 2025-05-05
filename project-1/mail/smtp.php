<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

ob_start();
session_start();

$email = $_SESSION['email'];



require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 3;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "kaushikwebdesigner@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "xajh azly wfcy hmox";
//Set who the message is to be sent from
$mail->setFrom('kaushikwebdesigner@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('kaushikwebdesigner@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($email, 'forgotpassword');

$otp = rand(100000,999999); 
setcookie("otp", $otp, time() + (60 * 1), "/");

$mail->Subject = 'reset your password';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('Using OTP to change your password: '.$otp);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: ../otpverification.php');
    exit();
}
