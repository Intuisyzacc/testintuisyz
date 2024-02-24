<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
   

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
          $mail->addAddress('athullya.intuisyz@gmail.com'); // Replace with the recipient's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission from ' . $name;
        $mail->Body = "Name: $name<br>Phone: $phone<br>Email: $email<br>Service: $service";

        // Send the email
        $mail->send();
      
    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
}
?>
