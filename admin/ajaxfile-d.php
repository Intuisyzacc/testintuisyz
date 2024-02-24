<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


$id=$_POST['userid'];


$sql = "SELECT * FROM `into_apps_iform` WHERE `id_into_apps` = '$id'";
$result = mysqli_query($con,$sql);
$response = "<div class='mod-content'>";
$response .= "<table border='0' width='100%'>";
$response .= "<tr>";
$response .= "<th>Pre-Iform Questions</th>";
$response .= "<th>Answers</th>";


$response .= "</tr>";
while( $row = mysqli_fetch_array($result) ){
    $qu = $row['placeholder'];
    $an = $row['value'];
   
    
    
    $response .= '<tr>';
    $response .= "<td>$qu</td>";
  
    $response .= "<td>$an</td>";
   




}
$response .= "</table>";
$response .= "</div>";

echo $response;
exit;