<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "manmeet.uiuxdesigner@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email sent successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
} else {
    echo "<p>Method not allowed.</p>";
}
?>
