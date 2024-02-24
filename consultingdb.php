<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer autoloader
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// Your database connection details
$host = "localhost"; // Change this to your database host
$username = "digital_intuisyz"; // Change this to your database username
$password = "8N&1q7Y5br=m"; // Change this to your database password
$database = "digital_intuisyz"; // Change this to your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Additional spam prevention check
    if (empty($_POST['honeypot']) && !isSubmittedTooQuickly()) {
        // Retrieve form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Your Gmail credentials
        $username = 'jissaoommen0219@gmail.com';
        $password = 'khrh quvj dcjz dxvy'; // Replace with your App Password

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
  $mail->addAddress('sijinstephen@gmail.com');
    $mail->addAddress('info@intuisyz.com');
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'enquiry Beta  from  ' . $name;
            $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

            // Send the email
            if ($mail->send()) {
                echo "Email sent successfully.";
            } else {
                echo "Error sending email: " . $mail->ErrorInfo;
            }

           // Insert data into the database
$sql = "INSERT INTO capturedata (name, email, phone, msg, date, time, status) 
        VALUES ('$name', '$email', '$phone', '$message', NOW(), NOW(), 2)";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted into the database successfully!";
} else {
    echo "Error inserting data into the database: " . $conn->error;
}


        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    } else {
        // Handle potential spam submission
        echo "Potential spam detected. Please try again.";
    }
}

// Function to check if the form was submitted too quickly
function isSubmittedTooQuickly($thresholdSeconds = 5) {
    $currentTime = time();
    $submittedTime = isset($_POST['submit_time']) ? (int)$_POST['submit_time'] : 0;

    return ($currentTime - $submittedTime) < $thresholdSeconds;
}

// Close the database connection
$conn->close();
?>
