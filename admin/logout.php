<?php
session_start();
session_destroy();
$_SESSION['userid']='';
header("Location:login.php");
exit;
?>