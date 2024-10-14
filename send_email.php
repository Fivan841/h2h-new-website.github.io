<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ivan91174@yandex.ru";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
