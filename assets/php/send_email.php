<?php
$email = $_POST['email'];
$to = 'awaisjarral37@gmail.com';
$subject = 'New email from contact form';
$message = 'Email: ' . $email;
$headers = 'From: your_email@example.com' . "\r\n" .
           'Reply-To: your_email@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    http_response_code(200); // OK status
} else {
    http_response_code(500); // Internal Server Error
}
?>
