<?php

// Database configuration
$host = "localhost"; // Change this to your database host
$username = "digital_intuisyz"; // Change this to your database username
$password = "8N&1q7Y5br=m"; // Change this to your database password
$database = "digital_intuisyz"; // Change this to your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
