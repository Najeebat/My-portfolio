<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "isholanajeebatadedoyin@gmail.com";

    // Set email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Compose email message
    $mailBody = "Name: $name\n\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Subject: $subject\n\n";
    $mailBody .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>