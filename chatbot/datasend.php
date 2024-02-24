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
    $mail->setFrom($_POST['email'], $_POST['companyname']);
    $mail->addAddress('jissaoommen0219@gmail.com');
    $mail->addAddress('athullya.intuisyz@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Google Ad enquiry from    ' . $_POST['companyname'];
    $mail->Body = "Company Name: {$_POST['companyname']}<br>Email: {$_POST['email']}<br>Phone: {$_POST['phone']}<br>Context: {$_POST['context']}";

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
