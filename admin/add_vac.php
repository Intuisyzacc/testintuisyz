<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();



session_start();
$user=$_SESSION['userid']; 
checkuser();

$dato=date("Y-m-d");
$timo=date("h:i:s A");



 
 
 $count_field=mysqli_query($con,"SELECT * FROM `iform_field` ") or die(mysql_error());
 $count_f=mysqli_num_rows($count_field);
 $field_co=$count_f+20;
 $fd_co="fd".$field_co;
 
 
 
 
 /*testcode*/
 
 if (isset($_POST["add"])) {
 

	
    if ($_POST['add'] == 'add_vacancy') 
 {

	 $exp=mysqli_real_escape_string($con,$_POST['exp']); 
     $post=mysqli_real_escape_string($con,$_POST['post']); 
     $qual=mysqli_real_escape_string($con,$_POST['qual']); 
     $last_date=mysqli_real_escape_string($con,$_POST['last_date']);
     $job_det=mysqli_real_escape_string($con,$_POST['job_det']);
     $skills=mysqli_real_escape_string($con,$_POST['skills']);

   	 if($post != '' AND $exp != '' AND $job_det != '' AND $qual != '')
   	 {

		$query1 = "INSERT INTO `into_vac`(`post`, `exp`, `qual`, `skill`, `details`, `last_date`, `mod_date`, `mod_time`, `status`, `f_id`, vac_status) VALUES 
		('$post','$exp','$qual','$skills','$job_det','$last_date','$dato','$timo','1','$fd_co','1')";
		$asi1=mysqli_query($con,$query1) or die (mysql_error());
		
			$field_it=$_POST['fielditems']; 
			foreach($field_it as $fld_it)
			{
			    if($fld_it != "")
			    {
			$query123 = "INSERT INTO `iform_field`(`id`, `field_item`, `conn_i`) VALUES ('null','$fld_it','$fd_co')";
			$ins_field=mysqli_query($con,$query123) or die (mysql_error());
			    }
			    else
			    {
			        
			    }
		
		}
			$error_msg="Vacancy Added";
			}
		
		 else
	 {
 		 $error_msg="Please Fillout all the mandatory fields";
 	 }
  


}
		
		
	
	
		
   
 	 
	else
	{
		$error_msg="Invalid Request";
	}
 }
 
 /*testcode*/

/*use below code if above code is not working. Below code is using only 1 button*/ 

/*if (isset($_POST["add"])) {
	$item=mysqli_real_escape_string($con,$_POST['item_name']); 
	$placeh=mysqli_real_escape_string($con,$_POST['item_place']); 

	if($item != '' AND $placeh != '' )
    {
	
	$ins2 = "INSERT INTO `pre_iform`(`id`, `item`, `var_n`, `placeholder`) VALUES ('','$item','$var_co','$placeh')";
			
			
	$insert_item=mysqli_query($con,$ins2) or die (mysql_error());
    $error_msg="Item added";
	}
	else
	{
	


    $exp=mysqli_real_escape_string($con,$_POST['exp']); 
    $post=mysqli_real_escape_string($con,$_POST['post']); 
    $qual=mysqli_real_escape_string($con,$_POST['qual']); 
    $last_date=mysqli_real_escape_string($con,$_POST['last_date']);
     $job_det=mysqli_real_escape_string($con,$_POST['job_det']);
     $skills=mysqli_real_escape_string($con,$_POST['skills']);



    if($post != '' AND $exp != '' AND $job_det != '' AND $qual != '')
    {

    $query1 = "INSERT INTO `into_vac`(`post`, `exp`, `qual`, `skill`, `details`, `last_date`, `mod_date`, `mod_time`, `status`) VALUES ('$post','$exp','$qual','$skills','$job_det','$last_date','$dato','$timo','1')";
    $asi1=mysqli_query($con,$query1) or die (mysql_error());
    $error_msg="Vacancy Added";
   
  }

  else{

  $error_msg="Please Fillout all the mandatory fields";
  }
  
  }

}*/

?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Intuisyz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    
    <!-- CKEDITOR -->
	 

<script src="ck/ckeditor.js"></script>
  <script src="ck/ck/js/sample.js"></script>
  <link rel="stylesheet" href="ck/ck/css/samples.css">
  <link rel="stylesheet" href="ck/ck/toolbarconfigurator/lib/codemirror/neo.css">
       
        <style>
            .err_red{
                color: red;
            }
            .succ_green{
                color: green;
            }
			.error2{
			
			font-size:12px;
			float:left !important;
			}
			.btn_vac {
    			 margin-left: 20px;
				}
        </style>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
        <script>
                        $(document).on("keyup", "#usernamew", function () {
                            var usernamew = $(this).val();
                            if (usernamew == "") {
                                return false;
                            }
                            $.ajax({
                                url: 'check.php',
                                type: 'POST',
                                data: {username: usernamew},
                                dataType: 'json',
                                success: function (data) {
                                    if (data.result == "success") {
                                        $("#error_username").html(data.msg);
                                        $("#error_username").removeClass('err_red').addClass('succ_green');
										$("#dis").removeAttr('disabled');
										
                                    } else {
                                        $("#error_username").html(data.msg);
                                        $("#error_username").removeClass('succ_green').addClass('err_red');
										$("#dis").attr('disabled','disabled');
                                    }
                                }
                            });
                        });
        </script>
      <script>
        function Send_Data(){
        
          var name=document.getElementById("usernamew").value;
          
         if(name != "")
         {
          $.ajax
          ({
            type: 'post',
            url: 'insert_data.php',
            data:
            {
              name:name
            },
          success:function(response)
          {
            alert('field added');
            document.getElementById('error_username').innerHTML="Field inserted successfully";
            document.getElementById('usernamew').value = '';
          }
          });


         }
         return false; 
        }



      </script>
<!--CK END-->





    </head>
	<body>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
         <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Add Vacancy</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            <h6 class="error"><?php echo @$error_msg ?></h6>
            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#formcontrols" data-toggle="tab">Form Controls</a>
              </li>
              <li class=""><a href="#jscontrols" data-toggle="tab">Active Vacancies</a></li>
            </ul>
            
            <br>
            
              <div class="tab-content">
                <div class="tab-pane active" id="formcontrols">
                <form id="edit-profile" class="form-horizontal" method="post">
                  <fieldset>

          
            
						
						
						<div class="widget-content" >
            
                 

                 

				 
			
              
                    
                    <div class="control-group">                     
                      <label class="control-label" for="username">Position Name</label>
                      <div class="controls">
                        <input class="span6" id="username"  value="<?php mysqli_real_escape_string($con,isset($_POST['post'])); ?>" name="post" type="text">
                      
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Experience</label>
                      <div class="controls">
                        <input class="span6" id="firstname" name="exp"  type="text">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Qualification</label>
                      <div class="controls">
                        <input class="span6" id="lastname" name="qual" type="text">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <!-- /control-group -->
                    
                    <div class="control-group">                     
                      <label class="control-label" for="email">Skills Required</label>
                      <div class="controls">
                        <textarea class="span6 ckeditor" name="skills"></textarea>
                      </div> <!-- /controls -->       
                    </div> 
                   	

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Last Date</label>
                      <div class="controls">
                        <input class="span6" id="lastname" name="last_date" type="text">
                      </div> <!-- /controls -->       
                    </div>
                    
                       <div class="control-group">                     
                      <label class="control-label" for="email">Job Details</label>
                      <div class="controls">
                        <textarea class="span6 mys ckeditor" name="job_det"></textarea>
                      </div> <!-- /controls -->       
                    </div>                  
                                        
                                  
                                        
                    
                      
                     <br>
					 
 <h4>Pre-Interview Form Fields</h4>
 	 <table class="table table-bordered" id="dynamic_field">
					<tr>
					
						<td>
					<input type="text" name="fielditems[]" placeholder="Enter Field" style="width:40%;height:30%;"/>
						
						<button type="button" name="addnew" id="addnew" class="btn btn-success" style="margin-left:5px;">+</button></td>
							</tr>
							</table>
					 
              <br><br>
                
		
	
					 <button type="submit" name="add" class="btn btn-primary pull-right btn_vac" value="add_vacancy">Add Vacancy</button> 
                      <a href="index.php" class="btn pull-right">Cancel</a><br><br>
	
	
					 
					
						<br><br>
						
					
					
       
					 
					 
                    
				
                     
					
                      	
                 
                     
                    <!-- /form-actions -->
					
					
					
					<br>
					
			
						
						
					
	
	
	
	
	
                  </fieldset>
                
                </div>
                
                <div class="tab-pane" id="jscontrols">
                  <form id="edit-profile2" class="form-vertical">
                    <fieldset>
                      
                                            
                                            
                                           
                                                                                        
                   <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>A Table Example</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Post</th>
                    <th>Experience</th>
                    <th>Qualification</th>
                    <th>Posted Date</th>
                    <th class="td-actions"> </th>
                    <th class="td-actions"> </th>
                    <th class="td-actions"> </th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                

                <?php 
                 $qu=mysqli_query($con,"SELECT * FROM `into_vac` WHERE `status`='1'") or die(mysql_error());
                 while ($qr=mysqli_fetch_array($qu)) {
                   $post=$qr['post'];
                   $exp=$qr['exp'];
                   $qual=$qr['qual'];
                   $det=$qr['details'];
                   $idv=$qr['id'];
                   $dater=$qr['mod_date'];
                   $vac_s=$qr['vac_status'];
                   if($vac_s == 0){
                    $vac_status="Enable";
                   }else if($vac_s == 1)
                   {
                    $vac_status="Disable";
                   }
                 
                 ?>
                   <tr >
                    <td> <?php echo $post ?></td>
                    <td> <?php echo $exp ?> </td>
                    
                    <td> <?php echo $qual ?> </td>
                    <td> <?php echo $dater ?> </td>
                    <td class="td-actions"><a href="view_vac.php?iss=<?php echo $idv ?>" class="btn btn-small btn-success">Details</a></td>
                    <td class="td-actions"><a href="edit_vac.php?iss=<?php echo $idv ?>" class="btn btn-small btn-success">Edit</a></td>
                    <td class="td-actions"><a href="vaccine.php?iss=<?php echo $idv ?>" class="btn btn-small btn-danger">Delete</a></td>
                    <td class="td-actions">
                    <button id="disab" class="btn btn-small <?php if($vac_s == 1){?> btn-danger <?php } else if($vac_s == 0){?> btn-success <?php } ?>" onclick="showConfirmation(event,<?php echo $idv; ?>,<?php echo $vac_s; ?>)"><?php echo $vac_status ?></button>
                    </td>

                  </tr>

                  <?php } ?>
                
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
              
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div>
          

        </div></div>

          </div>
          <!-- /extra-inner --> 
        </div></div>
        <!-- /extra -->

<script>
$(document).ready(function(){
	var i=1;
	$('#addnew').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="fielditems[]" placeholder="Enter Field" style="width:40%;height:30%;"/><button type="button" name="addn" id="'+i+'" class="btn btn-success btn_add" style="margin-left:10px;">+</button><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left:10px;">X</button></td></tr>');
	
	});
	
	var i=1;
	
	$(document).on('click', '.btn_add', function(){
	i++;
		var button_id = $(this).attr("id"); 
		
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="fielditems[]" placeholder="Enter Field" style="width:40%;height:30%;"/><button type="button" name="addn" id="'+i+'" class="btn btn-success btn_add" style="margin-left:10px;">+</button><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left:10px;">X</button></td></tr>');
	});
	
	
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
	
});

</script>

<!-- Le javascript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
  <script src="js/excanvas.min.js"></script> 
  <script src="js/chart.min.js" type="text/javascript"></script> 
  <script src="js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

  <script src="js/base.js"></script> 
  <script>     

  var lineChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
      fillColor: "rgba(220,220,220,0.5)",
      strokeColor: "rgba(220,220,220,1)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      data: [65, 59, 90, 81, 56, 55, 40]
    },
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

  }

  var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


  var barChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
      fillColor: "rgba(220,220,220,0.5)",
      strokeColor: "rgba(220,220,220,1)",
      data: [65, 59, 90, 81, 56, 55, 40]
    },
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,1)",
      data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

  }    

  $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay
          },
                true // make the event "stick"
                );
        }
        calendar.fullCalendar('unselect');
      },
      editable: true,
      events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d+5),
        end: new Date(y, m, d+7)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'EGrappler.com',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://EGrappler.com/'
      }
      ]
    });
});
</script>


<script>
  function showConfirmation(event, id, vacId) {
    event.preventDefault();

    if (confirm("Are you sure?")) {
      // User clicked "OK" in the confirmation dialog
      // Update the database using AJAX request
      var url = 'update_database.php'; // Specify the URL of your server-side script

      // Create an AJAX request object
      var xhr = new XMLHttpRequest();
      xhr.open('POST', url, true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      // Set up the callback function for the AJAX request
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // AJAX request completed successfully
          // Add any additional handling here if needed
        }
      };

      // Send the AJAX request with the ID parameter
      xhr.send('id=' + encodeURIComponent(id) + '&vacId=' + encodeURIComponent(vacId));

      var button = event.target; // Get a reference to the clicked button

var buttonText = button.innerText; // Get the current button text
var newButtonText = buttonText === "Enable" ? "Disable" : "Enable"; // Toggle the button text

button.innerText = newButtonText; // Update the button text

var buttonClass = button.classList.contains("btn-success")
  ? "btn-danger"
  : "btn-success"; // Toggle the button class

button.classList.remove("btn-success", "btn-danger");
button.classList.add(buttonClass); // Update the button class

    } else {
      // User clicked "Cancel" in the confirmation dialog
      // Add any additional handling or cancel the action if needed
    }
  }
</script>







<!-- /Calendar -->
</body>
</html>
