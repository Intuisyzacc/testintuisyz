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
    // Retrieve form data
    $position = $_POST['post'];
    $name = $_POST['name'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : ''; // Check if 'phone' is set
    $email = $_POST['email'];
    $location = $_POST['location'];
    $experience = $_POST['exp'];
    $company = $_POST['cmpy'];
    $skill = $_POST['skill'];
    $np = $_POST['np'];
    $day = $_POST['day'];
    $cctc = $_POST['cctc'];
    $ectc = $_POST['ectc'];
    $resume = $_FILES['resume'];

    // Your Gmail credentials
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
        $mail->setFrom($email, $name);
        $mail->addAddress('jissaoommen0219@gmail.com');
        $mail->addAddress('athullya.intuisyz@gmail.com');

        // Attach the resume file
        $attachmentPath = $resume['tmp_name'];
        $attachmentName = $resume['name'];

        // Move the uploaded file to the 'cv' folder
        $cvFolder = 'cv';
        $destinationPath = $cvFolder . '/' . $attachmentName;

        if (!file_exists($cvFolder)) {
            mkdir($cvFolder, 0777, true);
        }

        if (move_uploaded_file($attachmentPath, $destinationPath)) {
            echo "Resume file moved to the 'cv' folder successfully.";
            $attachmentPath = $destinationPath; // Update the $attachmentPath
        } else {
            echo "Error moving the resume file to the 'cv' folder.";
        }

        $mail->addAttachment($attachmentPath, $attachmentName);

        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission from ' . $name;
        $mail->Body = "Position: $position<br>Name: $name<br>Phone: $phone<br>Email: $email<br>Location: $location<br>Experience: $experience<br>Company: $company<br>Skills: $skill<br>NP: $np<br>Time required to join: $day<br>ECTC: $ectc<br>CCTC: $cctc";

        // Send the email
        $mail->send();
        echo "Email sent successfully.";

        
       // Insert data into the database
$sql = "INSERT INTO into_apps (status, post, name, phone, email, date, time, resume, ectc) 
        VALUES (1, '$position', '$name', '$phone', '$email', CURDATE(), CURTIME(), '$attachmentPath', '$ectc')";



        if ($conn->query($sql) === TRUE) {
            echo "Record inserted into the database successfully!";
        } else {
            echo "Error inserting data into the database: " . $conn->error;
        }
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    }
}

// Close the database connection
$conn->close();
?>
