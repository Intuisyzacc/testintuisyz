<?php
require_once 'config.php';
if(isset($_POST['name']))
{
$name=$_POST['name'];

$sql="INSERT INTO `pre_iform`(`id`, `placeholder`) VALUES ('null','$name')";
$result=mysqli_query($conn,$sql);
if(result==true)
{
    echo "inserted";

 }
}


?>