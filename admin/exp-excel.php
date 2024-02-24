<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


session_start();
$user=$_SESSION['userid']; 
checkuser();

$idp=mysqli_real_escape_string($con,$_GET['id']);

$sle=mysqli_query($con,"SELECT * FROM `into_apps` WHERE `id`='$idp'")or die(mysql_error());
$res=mysqli_fetch_array($sle);

$a_name=$res['name'];
$a_post=$res['post'];
$a_email=$res['email'];
$a_phone=$res['phone'];
$a_date=mysqli_real_escape_string ($res['date']);
$a_time= mysqli_real_escape_string ($res['time']);
$idu=$res['id'];
$con_id=$res['id_into_apps_iform'];

 // Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = $a_name." Pre Interview Form" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields =	array('','INTUISYZ TECHNOLOGIES  PRIVATE LIMITED ,ANGAMALY-Ph:8592902277'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n";

$fields =	array('','          PRE INTERVIEW FORM	'); 
 
// Display column names as first row 
$excelData .= implode("\t", array_values($fields)) . "\n";


$fields =	array(''); 
$excelData  .= implode("\t", array_values($fields)) . "\n"; 
 




$fields =	array('1','Name ',':',$a_name); 
$excelData  .= implode("\t", array_values($fields)) . "\n"; 

$fields =	array('2','Email ',':',$a_email); 
$excelData  .= implode("\t", array_values($fields)) . "\n"; 

$fields =	array('3','Contact Number ',':',$a_phone); 
$excelData  .= implode("\t", array_values($fields)) . "\n"; 





// Fetch records from database 
$query = $con->query("SELECT * FROM `into_apps_iform` WHERE `id_into_apps`='$con_id'"); 
$i=4;
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($i,$row['placeholder'],':', $row['value']); 
        array_walk($lineData, 'filterData'); 
		 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
		$i=$i+1;
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 


 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;?>



							<?php
							

							$sle2=mysqli_query($con,"SELECT * FROM `into_apps_iform` WHERE `id_into_apps`='$con_id'")or die(mysql_error());
							
							while($res2=mysqli_fetch_array($sle2))
							
							{?>
							
							 <div class="control-group">                     
                              <label class="control-label" for="email"><?php echo $res2[1];?>:</label>
                              <div class="controls">
                                <p> <?php echo $res2[2];?></p>
                              </div> <!-- /controls -->       
                            </div> 
							<?php
							}
							
							?>



