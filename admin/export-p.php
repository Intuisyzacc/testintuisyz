<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
include_once("SimpleXLSXGen.php");
$employees = [
  ['Id', 'First Name', 'Last Name', 'Position', 'Email Address', 'Phone Number', 'Location']
];
$xlsx = SimpleXLSXGen::fromArray($employees);
$xlsx->downloadAs('employees.xlsx'); 
exit();
echo "<pre>";
print_r($employees);
?>