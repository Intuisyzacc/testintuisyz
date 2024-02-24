<html>
    <head>
        <style>
            .sidebar-form {
    position: fixed;
    top: 50%;
    left: -355px;
    width: 350px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .3);
    border-radius: 8px 0 0 8px;
    background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
    padding: 20px;
    transform: translateY(-50%);
    transition: right .4s linear;
    z-index: 1000; /* Set a higher z-index value */
}

.sidebar-form.show {
    left: 0;
}

.sidebar-form .call-action {
    position: absolute;
    background-color: red; /* Set the background color to red */
    font-family: 'Calibri';
    font-weight: 400;
    letter-spacing: 1px;
    color: var(--white);
    width: 100px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    left: 320px;
    top: 50%;
    transform: translateY(-50%) rotate(-90deg);
	border-radius: 5px;
}

.sidebar-form h3 {
    font-family: 'Times New Roman';
    font-weight: 700;
    text-transform: uppercase;
    font-size: 15px;
    margin-bottom: 15px;
    text-align: center;
    color: var(--red);
}

.sidebar-form .form-group {
    margin-bottom: 10px;
}

.sidebar-form .form-group label {
    font-family: 'Times New Roman';
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 2px;
    color: #333;
}

.sidebar-form #submit-btn {
    width: 350px;
    border: none;
    margin-top: 8px;
    background-color: var(--purple);
    color: var(--white);
    padding: 4px;
    font-family: 'Times New Roman';
    font-weight: +00;
    cursor: pointer;
}
        </style>
    </head>

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

// Extract the current page name
$page = basename($_SERVER['PHP_SELF']);

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
        $mail->addAddress('athullya.intuisyz@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission from ' . $name;
        $mail->Body = "Name: $name<br>Phone: $phone<br>Email: $email<br>Service: $service";

        // Send the email
        $mail->send();
        

        // Insert data into the database
        $sql = "INSERT INTO `slider-enquiry` (name, email, phone, service, date, time, status, page) 
                VALUES ('$name', '$email', '$phone', '$service', CURDATE(), CURTIME(), '2', '$page')";

        if ($conn->query($sql) === TRUE) {
           
        } else {
            echo "Error inserting data into the database: " . $conn->error;
        }

    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
}

// Close the database connection
$conn->close();
?>
<div class="sidebar-form">
    <div class="call-action">
        <span><B>ENQUIRY</B></span>
    </div>
    <h3><B>ENQUIRY</B></h3>
    <form action="#"  method="post" >
    <div class="form-group">
            <label for="services">Services</label>
            <select id="services" name="service" class="form-contform" required>
                
                    <option value="Digital marketing consulting">Digital marketing consulting</option>
               
                    <option value="Content marketing">Content marketing</option>
                    <option value="Search engine optimization">Search engine optimization</option>
                    <option value="Social media optimization">Social media optimization</option>
                    <option value="Google ad ">Google ad </option>
                    <option value="Social media advertising">Social media advertising</option>
                    <option value="Email marketing">Email marketing</option>
                    <option value="Mobile marketing">Mobile marketing</option>
                    <option value="Content rate optimization">Content rate optimization</option>
                <!-- Add more services as needed -->
                
            </select>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-contform" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-contform" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" class="form-contform" required>
        </div>
        
        
        <input type="submit" value="Submit" id="submitBtn" style="width:100px">
<input type="button" value="Close" id="closeBtn" style="width:100px">

        <div id="successMessage" class="success"></div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
   $(document).ready(function () {
    $("#enquiryForm").submit(function (event) {
        event.preventDefault(); // Prevent default form submission

        // Perform your form submission logic here
        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: {
                name: $("#name").val(),
                phone: $("#phone").val(),
                email: $("#email").val(),
                service: $("#services").val()
            },
            success: function () {
                // Reset the form immediately on success
                $("#enquiryForm")[0].reset();
            },
            error: function (error) {
                console.log("Error submitting form:", error.responseText);
                // Handle errors if needed
            }
        });
    });

    // Close the form when the "Close" button is clicked
    $("#closeBtn").click(function () {
        $(".sidebar-form").removeClass("show");
    });
});

</script>
<script>
    $(document).ready(function(){
    $(".sidebar-form .call-action").click(function(){
            $(this).parents(".sidebar-form").toggleClass("show");
    });
});
</script>
</html>