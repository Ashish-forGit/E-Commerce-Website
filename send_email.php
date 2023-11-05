<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'ashish93343@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        http_response_code(500);
        echo 'Email could not be sent. Please try again later.';
    }
} else {
    http_response_code(403);
    echo 'Access denied';
}
?>
