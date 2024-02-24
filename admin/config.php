<?php
//Database details
$db_host = 'localhost';
	$db_username = 'intutive_locked';
$db_password = ')RmyC7L2bpEp';
$db_name = 'intutive_syzintui_application';

//Create connection and select DB
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}