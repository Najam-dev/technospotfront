<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
    $email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$toEmail = $_POST[""];
  
	$mailHeaders = "Name: " . $name .
	"\r\n Email: ". $email  . 
	"\r\n Phone: ". $subject  . 
	"\r\n Message: " . $message . "\r\n";

	if(mail($toEmail, $name, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>