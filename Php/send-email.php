<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $to = "cse.adityanandan@gmail.com";
    
    
    $subject = "New Contact Form Submission";

    
    $message = "You have received a new message from your website contact form.\n\n";
    foreach ($_POST as $key => $value) {
        $message .= ucfirst($key) . ": " . htmlspecialchars($value) . "\n";
    }

    
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: noreply@yourdomain.com\r\n";

    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
