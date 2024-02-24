<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Additional spam prevention check
    if (empty($_POST['honeypot']) && !isSubmittedTooQuickly()) {
        // Validate and sanitize form data
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $company = htmlspecialchars($_POST['company']);
        $title = htmlspecialchars($_POST['title']);
        $message = htmlspecialchars($_POST['message']);
  $service = htmlspecialchars($_POST['service']);
        $mailUsername = 'jissaoommen0219@gmail.com';
        $mailPassword = 'qbgm qqns uxmf gtnx'; // Replace with your App Password

        // Create a PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $mailUsername;
            $mail->Password = $mailPassword;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($email, $firstname . ' ' . $lastname);
            $mail->addAddress('athullya.intuisyz@gmail.com');
    $mail->addAddress('jissaoommen0219@gmail.com');
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Enquiry from Marketing analytics  ' . $firstname . ' ' . $lastname;
            $mail->Body = "First Name: $firstname<br>Last Name: $lastname<br>Email: $email<br>Company: $company<br>Title: $title<br>Service: $service<br>Message: $message";

            // Send the email
            $mail->send();

            // Return a JSON response
            echo json_encode(['status' => 'success']);
        } catch (Exception $e) {
            // Return a JSON response for error
            echo json_encode(['status' => 'error', 'error' => $e->getMessage()]);
        }
    } else {
        // Handle potential spam submission
        // Return a JSON response for spam
        echo json_encode(['status' => 'error', 'error' => 'Potential spam detected. Please try again.']);
    }
}

// Function to check if the form was submitted too quickly
function isSubmittedTooQuickly($thresholdSeconds = 5) {
    $currentTime = time();
    $submittedTime = isset($_POST['submit_time']) ? (int)$_POST['submit_time'] : 0;

    return ($currentTime - $submittedTime) < $thresholdSeconds;
}
?>
