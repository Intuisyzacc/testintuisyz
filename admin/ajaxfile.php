<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


$frd=$_POST['fromDate'];
$tod=$_POST['toDate'];

$sql = "SELECT * FROM `into_apps` WHERE `date` BETWEEN '$frd' AND '$tod'";
$result = mysqli_query($con,$sql);



$response = "<a href='export.php?start_date=$frd&end_date=$tod'><button  class='btn btn-primary but-ex'>Export to Excel</button></a>";

$response .= "<div class='mod-content'>";
$response .= "<table border='0' width='100%'>";
$response .= "<tr>";
$response .= "<th>Applide Post</th>";
$response .= "<th>name</th>";
$response .= "<th>Phone</th>";
$response .= "<th>Email</th>";
$response .= "<th>Date</th>";
$response .= "</tr>";
while( $row = mysqli_fetch_array($result) ){
    $post = $row['post'];
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $date = $row['date'];
    $idi = $row['id_into_apps_iform'];
    
    
    $response .= '<tr>';
    $response .= "<td>$post</td>";
    $response .= "<td> <a href='#val'><button data-id='$idi' class='userd'  >$name</button></a></td>";
    $response .= "<td>$phone</td>";
    $response .= "<td>$email</td>";
    $response .= "<td>$date</td>";
   
    $response .= "</tr>";




}
$response .= "</table>";
$response .= "</div>";

echo $response;
exit;