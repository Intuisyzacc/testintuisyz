<?php
require('fpdf.php');
ob_start();

include_once('../db/config.php');
$con=connectDB();
session_start();
$user=$_SESSION['userid']; 

?>


<?php
$idp=mysqli_real_escape_string($con,$_GET['id']);

$sle=mysqli_query($con,"SELECT * FROM `into_apps` WHERE `id`='$idp'")or die(mysql_error());
$res=mysqli_fetch_array($sle);

$a_name=$res['name'];
$a_post=$res['post'];
$a_email=$res['email'];
$a_phone=$res['phone'];
$ectc=$res['ectc'];
$a_date=mysqli_real_escape_string ($con,$res['date']);
$a_time= mysqli_real_escape_string ($con,$res['time']);
$idu=$res['id'];
$con_id=$res['id_into_apps_iform'];

$query = $con->query("SELECT * FROM `into_apps_iform` WHERE `id_into_apps`='$con_id'"); 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12,'C');
		$html='INTUISYZ TECHNOLOGIES  PRIVATE LIMITED ,ANGAMALY-Ph:8592902277';
		$html2='PRE INTERVIEW FORM';
$pdf->Cell(0,10,$html,0,1,'C');
$pdf->Cell(0,10,$html2,0,1,'C');

		if($query->num_rows > 0)
		{ 
			// Output each row of the data 
            $html.='<table align="left">';
            $html.='<tr><td>Name</td><td>:</td><td></td><td>'.$a_name.'</td></tr><tr><td></td></tr><br>';

            $html.='<tr><td>Email</td><td>:</td><td></td><td>'.$a_email.'</td></tr><tr><td></td></tr><br>';
            $html.='<tr><td>Contact No.</td><td>:</td><td></td><td>'.$a_phone.'</td></tr><tr><td></td></tr><br>';
            
        $pdf->Cell(0,10,'Name              :    '.$a_name,0,1);
        $pdf->Cell(0,10,'Email              :    '.$a_email,0,1);
        $pdf->Cell(0,10,'Contact No.    :    '.$a_phone,0,1);
      
        
            

			while($row = $query->fetch_assoc())
            
			{ 
                $pla=$row['placeholder'];
                $val=$row['value'] ;
			
               
             
                 $pdf->Cell(0,10,$pla.' : '.$val,0,1);

                


                

              
			
			}
            $html.='</table>';
		}
		else
		{	
			$html="Data not found";
		}
$pdf->Output();
?>