<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'phpmailer/PHPMailerAutoload.php';

require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");


$mail = new PHPMailer();
$mail->IsSMTP(); // tell the class to use SMTP
//$mail->SMTPDebug = 3; // uncomment to print debugging info

// Timezone
//date_default_timezone_set('America/Chicago');

// GreenArrow Engine installation settings
$mail->Host = "tor101.truehost.cloud"; // Connect to this GreenArrow server
$mail->SMTPAuth = true; // enables SMTP authentication. Set to false for IP-based authentication
$mail->Port = 465; // SMTP submission port to inject mail into. Usually port 587 or 25
$mail->Username = "info@hcacademy.co.ke"; // SMTP username
$mail->Password = "Moses123@@@"; // SMTP password

// Campaign Settings
$mail_class = "transactional"; // Mail Class to use
//$mail->SetFrom("email", "Contact Form");
$mail->Subject = "From Contact form";
$mail->MsgHTML("message");


$mail->AltBody = $_POST['message'];
// $_POST['visitor_name'];
 $mail->SetFrom($_POST['email']);
 $mail->Body=$_POST['name'] ;
 $mail->Body=$_POST['subject'] ;
 $visitor_phone = $_POST[‘phone’];
 //$mail->Body=$_POST['visitor_phone'];
// $_POST['visitor_phone'];



// Individual Recipient Settings
$recipient = "sender@example.com";
$recipient_name = "Hotel & Chefs Academy";

// Generate the To: and X-GreenArrow-MailClass headers
$mail->AddAddress($recipient, $recipient_name);
//$mail->addCustomHeader("X-GreenArrow-MailClass: $mail_class");

// Send the campaign 
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo . "\n";
} else {
    echo "Message sent, we will get back to you shortly!\n";
}