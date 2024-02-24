<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer autoloader
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Replace these with your actual Gmail credentials
$username = 'jissaoommen0219@gmail.com';
$password = 'qbgm qqns uxmf gtnx'; // Replace with your App Password

// Validate and sanitize POST variables
$name = isset($_POST["name"]) ? filter_var($_POST["name"], FILTER_SANITIZE_STRING) : "";
$email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : "";
$phone = isset($_POST["phone"]) ? filter_var($_POST["phone"], FILTER_SANITIZE_STRING) : "";
$typeOfWork = isset($_POST["type"]) ? filter_var($_POST["type"], FILTER_SANITIZE_STRING) : "";
$location = isset($_POST["location"]) ? filter_var($_POST["location"], FILTER_SANITIZE_STRING) : "";
$experience = isset($_POST["experience"]) ? filter_var($_POST["experience"], FILTER_SANITIZE_STRING) : "";
$position = isset($_POST["position"]) ? filter_var($_POST["position"], FILTER_SANITIZE_STRING) : "";
$salary = isset($_POST["salary"]) ? filter_var($_POST["salary"], FILTER_SANITIZE_STRING) : "";

// File upload handling
$cvFileName = $_FILES["cv"]["name"];
$cvTempName = $_FILES["cv"]["tmp_name"];
$cvUploadPath = '../cv/' . $cvFileName;

// Move the uploaded file to the "cv" folder
move_uploaded_file($cvTempName, $cvUploadPath);

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
    $mail->Subject = 'Job application from Google ad';
    $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Type of Work: $typeOfWork<br>Location: $location<br>Experience: $experience<br>Position: $position<br>Expected salary: $salary";

 // Attach the CV file
    $mail->addAttachment($cvUploadPath, $cvFileName);
    // Enable verbose debug output
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        file_put_contents('php://stderr', $str);
    };

    // Send the email
    $mail->send();

    echo "Message has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
