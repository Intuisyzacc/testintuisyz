<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
session_start();
@$user=$_SESSION['id']; 
checkuser();

 
 $iss=mysqli_real_escape_string($con,$_GET['iss']);

 $ads=mysqli_query($con,"DELETE FROM `into_vac` WHERE `id`='$iss'")or die(mysqli_error());

	header("Location:list_vac.php");

?>