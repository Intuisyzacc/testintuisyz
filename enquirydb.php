<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];

// Assuming date and time are your MySQL columns for storing date and time
$date = date('Y-m-d'); // Current date in the format 'YYYY-MM-DD'
$time = date('H:i:s'); // Current time in the format 'HH:MM:SS'
$page = isset($_POST['page']) ? $_POST['page'] : 'DefaultPageValue';



$conn = new mysqli('localhost', 'digital_intuisyz', '8N&1q7Y5br=m', 'digital_intuisyz');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `slider-enquiry` (id, name, email, phone, service, date, time, page) VALUES (null, ?, ?, ?, ?, CURDATE(), CURTIME(), ?)");

    // Use "sssss" if all values are strings, otherwise, adjust the types accordingly
    $stmt->bind_param("sssss", $name, $email, $phone, $service, $page);
    
    
    $stmt->execute();
    echo "Registration successful";
    $stmt->close();
    $conn->close();
}
?>
