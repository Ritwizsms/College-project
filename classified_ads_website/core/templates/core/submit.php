<?php

// Set the recipient email address
$to = "ritwizmulay4612@gmail.com";

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Set the email subject
$subject = "New Contact Form Submission";

// Set the email message
$body = "Name: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send the email
mail($to, $subject, $body, $headers);

// Redirect to a thank you page
header("Location: thankyou.html");
exit();

?>
