<?php
// Ensure that the required form fields are submitted
if (!isset($_POST["Firstname"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"])) {
    http_response_code(400);
    echo "Bad Request: Required form fields are missing.";
    exit;
}

$Firstname = $_POST["Firstname"];
$Secondname = $_POST["Secondname"];
$email = $_POST["email"];
$Phone = $_POST["Phone"];
$course = $_POST["course"];
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
   // $mail->isHTML(true);
    //$mail->Subject = $subject;
    //$mail->Firstname = $Firstname;
    //$mail->Secondname = $Secondname;
    //$mail->Body = $message;
    
    //$mail->isHTML(true);
   // $mail->setFrom($email, $Firstname, $Secondname, $Phone);
    //$mail->addAddress("info@hcacademy.co.ke");
    $mail->Subject = $subject; 
    $mail->Body = $course;
    $message="Name :".$Firstname. "  :".$Secondname."\n\n". "email :".$email."\n\n". "Phone :".$Phone."\n\n". "course :".$course."\n\n"."Message :"."\n\n".$message;
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


                           