<?php 

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// creating these variables to stick in the mail function

$mailTo = "tigger0479@aol.com";
$headers = "From: " . $email;
$text = "Mail From: ".$name.".\n\n".$message;

mail($mailTo, $subject, $text, $headers);
header("Location: index.html?mailSent");
}







