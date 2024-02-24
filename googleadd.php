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
    $url = $_POST['url']; // Assuming this is the user's email address
    $designation = $_POST['designation'];

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
        $mail->setFrom('noreply@yourdomain.com', 'Your Name'); // Use a fixed 'From' address
        $mail->addAddress('jissaoommen0219@gmail.com'); // Replace with the recipient's email address
 $mail->addAddress('athullya.intuisyz@gmail.com');
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Google ad form from ' . $name;
        $mail->Body = "Name: $name<br>URL: $url<br>Phone: $phone<br>Designation: $designation";

        // Send the email
        $mail->send();
        echo "Email sent successfully.";
    } catch (Exception $e) {
        echo "Error sending email: " . $e->getMessage();
    }
}
?>
