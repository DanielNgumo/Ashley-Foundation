<?php

// Ensure that the required form fields are submitted
if (!isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"])) {
    http_response_code(400);
    echo "Bad Request: Required form fields are missing.";
    exit;
}

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

try {
    $mail = new PHPMailer(true);

    // Uncomment the line below for debugging SMTP communication
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Configure PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // SMTP server configuration
    $mail->Host = "tor101.truehost.cloud";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // SMTP account credentials
    $mail->Username = "info@hcacademy.co.ke";
    $mail->Password = "Moses123@@@";

    // Set email sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress("info@hcacademy.co.ke", "HCACADEMY");

    // Email subject and body
    $message="Name :".$name."\n" . "Email :".$email."\n"."Message :"."\n\n".$message;
    
    $mail->Subject = $subject;
    $mail->Name = $name;
    $mail->Body = $message;

    // Send the email
    $mail->send();
header("Location: sent.html");
    echo 'Message has been sent successfully
';
} catch (Exception $e) {
    http_response_code(500);
    echo 'Message could not be sent. Error: ' . $mail->ErrorInfo;
}
?>
