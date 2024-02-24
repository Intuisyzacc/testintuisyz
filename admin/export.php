<?php
// Include Database connection
ob_start();
ini_set('error_reporting',E_ALL);
ini_set('display_errors',true);
include_once('../db/config.php');
$con=connectDB();
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$applications = [
  ['<center><b>Post</b></center>', '<center><b>Name</b></center>', '<center><b>Phone</b></center>', '<center><b>Email</b></center>', '<center><b>Date</b></center>', '<center><b>Time</b></center>', '<center><b>Resume</b></center>', '<center><b>id_into_pre-iform</b></center>']
];

$preiform = [
  ['<center><b>Pre Iform Questions</b></center>', '<center><b>Answers</b></center>', '<center><b>Id_into_apps</b></center>']
];

$stdd= $_REQUEST[start_date];
$endd= $_REQUEST[end_date];
$id = 0;
$sql = "SELECT * FROM `into_apps` WHERE `date` BETWEEN '$stdd' AND '$endd'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $applications = array_merge($applications, array(array($row['post'], $row['name'], $row['phone'], $row['email'], $row['date'], $row['time'], 'https://intuisyz.com/'.$row['resume'], $row['id_into_apps_iform'])));
  }
}

$idarr=array();
$sql2 = "(SELECT * FROM `into_apps` WHERE `date` BETWEEN '$stdd' AND '$endd' order by id ASC LIMIT 1) UNION (SELECT * FROM `into_apps` WHERE `date` BETWEEN '$stdd' AND '$endd' order by id DESC LIMIT 1)";
$res2 = mysqli_query($con, $sql2);
if (mysqli_num_rows($res2) > 0) {
  foreach ($res2 as $row2) {

array_push($idarr,$row2['id_into_apps_iform']);

  }
}

$egtfirst=$idarr[0];
       $get_in = preg_replace('/[^0-9]/', '', $egtfirst);

$sql3="SELECT * FROM `into_apps_iform` WHERE `id_into_apps` BETWEEN '$idarr[0]' AND '$idarr[1]'";
$res3 = mysqli_query($con, $sql3);

if (mysqli_num_rows($res3) > 0) {
  foreach ($res3 as $row3) {
      
      $val=$row3['id_into_apps'];
       $val_in = preg_replace('/[^0-9]/', '', $val);
      
if($val_in >= $get_in){
$preiform = array_merge($preiform, array(array($row3['placeholder'], $row3['value'], $row3['id_into_apps'])));
}else{}

  }
}

 $xlsx = SimpleXLSXGen::fromArray($applications);
 $xlsx->addSheet($preiform);
 $xlsx->downloadAs('Application Data--'.$stdd.' -- '.$endd.'.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('applications.xlsx'); // This will save the file to your server
//  echo "<pre>";
//  print_r($idarr);
//  echo "<pre>";
//  print_r($applications);
//  echo "<pre>";
//  print_r($preiform);
