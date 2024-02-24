<?php
require_once 'config.php';
if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $query = mysqli_query($conn, "select * from pre_iform where LCASE(placeholder)='" . strtolower($username) . "'");
    if ($query->num_rows > 0) {
        echo json_encode(array("result" => "fail", "msg" => "Entered Field Already Exists."));
    } else {
        echo json_encode(array("result" => "success", "msg" => "Field Ready to Enter."));
    }
}
?>