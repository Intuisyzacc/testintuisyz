<?php
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

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $msg = $_POST["message"];
    $submit_time = $_POST["submit_time"];
    
    // Get the current date and time
    $current_date = date("Y-m-d");
    $current_time = date("H:i:s");

    // Set the default status to 2
    $status = 2;

    // Insert data into the table
    $sql = "INSERT INTO capturedata (name, email, phone, msg, date, time, status) 
            VALUES ('$name', '$email', '$phone', '$msg', '$current_date', '$current_time', $status)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
