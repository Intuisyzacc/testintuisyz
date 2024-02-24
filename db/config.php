<?php
$baseurl="https://intuisyz.com/"; //always change the baseurl when domain is changed. Also change the base url in header_home.php and footer.php
error_reporting(0);
function connectDB()
{
    
//   echo "jooo";exit;
	
	$con = mysqli_connect("localhost","digital_intuisyz", "8N&1q7Y5br=m", "digital_intuisyz");
 
    // Check connection
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

	return $con;
}



//$baseUrl="https://localhost/";





/********************* Users login ******************************/
function login($email,$password,$con)
{
    // return 1;exit;
	$passwordL=md5($password);
	$login=mysqli_query($con,"SELECT * FROM `into_login` WHERE `username`='$email' AND `password`='$passwordL'") or die("Login process query".mysql_error());
    $loginNum=mysqli_num_rows($login);
	if($loginNum=='0')
	{

		$msg="**Invalid Login**";
		return $msg;
		// exit;
	}

	else

	{

		$loginRow=mysqli_fetch_array($login);

		$userID=$loginRow['userID'];

		session_start();

		$_SESSION['userid']=$loginRow['userID'];

		header("Location:index.php");
        // exit;
	}
}








function checkuser()
{
	if($_SESSION['userid']=='')
	{
		header("location:login.php");
	}
}



?>
