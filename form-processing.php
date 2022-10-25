<?php

if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $isFilledReady = false;
    $isEmailValid = false;
    

    if(empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)){
        echo "<p id='error-message'>Please fill in all fields</p>";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p id='error-message'>Please enter a valid email address</p>";
    } else {
        echo "<p>Thank you for the message, I will respond shortly.</p>";
        $isFilledReady = true;
        $isEmailValid = true;
    }

    if($isFilledReady && $isEmailValid) {
        $emailAddress = "";
        $headers = "From: " . $email;
        $messageBody = "You have received an email from: " . $name . "\n\n" . $message;

        mail($emailAddress, $subject, $messageBody, $headers);
    }

    

   /* echo "Name: " . $name . "<br> Email: " . $email . "<br> Phone: " . $phone . "<br> Subject: " . $subject . "<br> Message: " . $message; */


}
