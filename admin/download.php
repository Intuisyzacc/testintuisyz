<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
session_start();
$user=$_SESSION['userid']; 
checkuser();
$id=mysqli_escape_string($con,$_GET['ids']);
$docs=mysqli_query($con,"SELECT * FROM `into_apps` WHERE `id`='$id'") or die(mysqli_error());
$docs_row=mysqli_fetch_array($docs);
$fol=$docs_row['resume'];
$filename="../" . "$fol";
$file=$filename; //"../userfiles/forms/F2.txt"; 
$len = filesize($filename); // Calculate File Size
ob_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type:application/doc"); // Send type of file
$header="Content-Disposition: attachment; filename=$filename;"; // Send File Name
header($header );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".$len); // Send File Size
@readfile($file);


?>