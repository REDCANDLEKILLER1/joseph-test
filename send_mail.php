<?php
// Replace with your email address
$to = "your-email@example.com";

$name = strip_tags($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

$subject = "New Contact Form Message from $name";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$body = "You have received a new message from the contact form:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message! We'll be in touch.";
} else {
    echo "Sorry, there was an error sending your message. Please try again.";
}
?>
