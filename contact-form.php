<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simple email function (adjust as necessary)
    $to = "your-email@example.com";  // Replace with your email
    $subject = "New Contact Message from " . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body);
    echo "Thank you for reaching out! Your message has been sent.";
}
?>
