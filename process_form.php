<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comments = $_POST["comments"];
    
    // Compose email message
    $to = ""; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Comments: $comments\n";
    
    // Additional headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // You can handle success in your JavaScript
    } else {
        echo "error"; // You can handle errors in your JavaScript
    }
} else {
    echo "Invalid request";
}
?>
