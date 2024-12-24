<?php

$email=$_GET['email'];
$name=$_GET['name'];
$msg=$_GET['msg'];

$to = "ushanrashmika23@gmail.com";
$subject = "Contact Us";

$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

$message = "Name: " . $name . "\n" .
           "Email: " . $email . "\n" .
           "Message: " . $msg;

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
    header("Location: index.html");
} else {
    echo "Failed to send email.";
    header("Location: index.html");
}


?>