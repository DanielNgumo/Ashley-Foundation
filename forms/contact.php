<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@hcacademy.co.ke';
  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['Firstname'];
  $contact->from_name = $_POST['Secondname'];
  $contact->from_email = $_POST['email'];
  $contact->from_email = $_POST['phone'];
  $contact->subject = $_POST['subject'];
  $contact->subject = $_POST['course'];
  $contact->subject = $_POST['message'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
 
  $contact->smtp = array(
    'host' => 'mail.hcacademy.co.ke',
    'username' => 'info@hcacademy.co.ke',
    'password' => 'Moses123@@@',
    'port' => '465'
  );
 

  $contact->add_message( $_POST['Firstname'], 'From');
  $contact->add_message( $_POST['Secondname'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['subject'], 'Subject');
  $contact->add_message( $_POST['course'], 'course');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
