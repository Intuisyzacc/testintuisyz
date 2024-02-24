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

$id = $_POST['id'];

$rec="SELECT * FROM `into_vac` WHERE `id` = '$id'";
$query1=mysqli_query($conn,$rec);
while($recieve=mysqli_fetch_array($query1)){
    $vac_id = $recieve['vac_status'];
    
}


$new_vac_id='';
if($vac_id == 1){
$new_vac_id='0';
}
else if($vac_id == 0){
    $new_vac_id='1';
}





$sql="UPDATE `into_vac` SET `vac_status`='$new_vac_id' WHERE `id` = '$id'";
$query=mysqli_query($conn,$sql);

?>