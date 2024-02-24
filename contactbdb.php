<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$msg = $_POST['message']; // Change from 'msg' to 'message'
$date = date('Y-m-d');
$time = date('H:i:s');
$page = isset($_POST['page']) ? $_POST['page'] : 'DefaultPageValue';

$conn = new mysqli('localhost', 'digital_intuisyz', '8N&1q7Y5br=m', 'digital_intuisyz');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `home-capture` (id, name, email, phone, service, msg, page, date, time) VALUES (null, ?, ?, ?, ?, ?, ?, ?, CURTIME())");

    // Check if the prepared statement was successful
    if ($stmt) {
        // Use "ssssssss" if all values are strings, otherwise, adjust the types accordingly
        $stmt->bind_param("sssssss", $name, $email, $phone, $service, $msg, $page, $date);

        // Check if the execution of the statement was successful
        if ($stmt->execute()) {
            echo "Registration successful";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>
