<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post = $_POST['post'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $resume = $_FILES['resume']['name']; // Use $_FILES to get file information
    $ectc = $_POST['ectc'];

    $conn = new mysqli('localhost', 'digital_intuisyz', '8N&1q7Y5br=m', 'digital_intuisyz');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO `into_apps` (status, post, name, phone, email, resume, ectc) VALUES ('your_status_value', ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssss", $post, $name, $phone, $email, $resume, $ectc);
        if ($stmt->execute()) {
            echo "Registration successful";

            // Close the prepared statement
            $stmt->close();

            // Close the database connection
            $conn->close();

            $target_dir = "../cv/"; // Change this line to specify the "cv" directory
            $target_file = $target_dir . basename($_FILES["cv"]["name"]);

            // Check if the directory is writable
            if (!is_writable($target_dir)) {
                die("Error: The directory is not writable");
            }

            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["resume"]["name"]) . " has been uploaded to the cv folder.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            
        } else {
            echo "Error executing statement: " . $stmt->error;

            // Close the prepared statement
            $stmt->close();

            // Close the database connection
            $conn->close();
        }
    } else {
        echo "Error preparing statement: " . $conn->error;

        // Close the database connection
        $conn->close();
    }
}
?>
