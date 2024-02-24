<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check honeypot field to prevent spam
    if (!empty($_POST['honeypot'])) {
        echo json_encode(['status' => 'error', 'error' => 'Potential spam detected. Please try again.']);
        exit;
    }

    // Check if the form was submitted too quickly (potential spam)
    if (isSubmittedTooQuickly()) {
        echo json_encode(['status' => 'error', 'error' => 'Potential spam detected. Please try again.']);
    } else {
        // Retrieve form data
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $service = htmlspecialchars($_POST['service']);
        $message = htmlspecialchars($_POST['message']);

        // Your Gmail credentials
        $username = 'jissaoommen0219@gmail.com';
        $password = 'qbgm qqns uxmf gtnx'; // Replace with your App Password

        // Create a PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $username;
            $mail->Password = $password;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('jissaoommen0219@gmail.com');
            $mail->addAddress('athullya.intuisyz@gmail.com');
           
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Form Submission from ' . $name;
            $mail->Body = "Name: $name<br>Phone: $phone<br>Email: $email<br>Service: $service<br>Message: $message";

            // Send the email
            $mail->send();

            // Database connection
            $conn = new mysqli("localhost", "digital_intuisyz", "8N&1q7Y5br=m", "digital_intuisyz");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Automatically detect date and time
            $date = date("Y-m-d");
            $time = date("H:i:s");

            // Set status to 1
            $status = 1;

            // Set area to service
            $area = $service;

            // Prepare and execute the SQL statement to insert data
            $stmt = $conn->prepare("INSERT INTO enquiry (name, contact, message, date, time, status, area, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $name, $phone, $message, $date, $time, $status, $area, $email);
            
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'error' => 'Error inserting data into the database: ' . $stmt->error]);
            }

            // Close the database connection
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'error' => 'Error sending email: ' . $e->getMessage()]);
        }
    }
}

// Function to check if the form was submitted too quickly
function isSubmittedTooQuickly($thresholdSeconds = 5) {
    $currentTime = time();
    $submittedTime = isset($_POST['submit_time']) ? (int)$_POST['submit_time'] : 0;

    return ($currentTime - $submittedTime) < $thresholdSeconds;
}
?>
