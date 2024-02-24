 <?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
$ifd=mysqli_real_escape_string($con,$_GET['iss']);

session_start();
$user=$_SESSION['userid']; 
checkuser();

$dato=date("Y-m-d");
$timo=date("h:i:s A");

$sle=mysqli_query($con,"SELECT * FROM `into_vac` WHERE `id`='$ifd'")or die(mysql_error());
$qr=mysqli_fetch_array($sle);

                  $post=$qr['post'];
                   $exp=$qr['exp'];
                   $qual=$qr['qual'];
                   $det=$qr['details'];
                   $idv=$qr['id'];
                   $dater=$qr['last_date'];
                   $skills=$qr['skill'];
					$fi_id=$qr['f_id'];

if (isset($_POST["edit"])) {

		 if ($_POST['edit'] == 'upd')
		 {
		
				$exp1=mysqli_real_escape_string($con,$_POST['exp']);
				$post1=mysqli_real_escape_string($con,$_POST['post']);
				$qual1=mysqli_real_escape_string($con,$_POST['qual']);
				$last_date=mysqli_real_escape_string($con,$_POST['last_date']);
				 $job_det=mysqli_real_escape_string($con,$_POST['job_det']);
				 $skills1=mysqli_real_escape_string($con,$_POST['skills']);
		
		
		
				if($post1 != '' AND $exp1 != '' AND $job_det != '' AND $qual1 != '')
				{
			
					$query1 = "UPDATE `into_vac` SET `post`='$post1', `exp`='$exp1', `qual`='$qual1', `skill`='$skills1', `details`='$job_det', `last_date`='$last_date',	
								  `mod_date`='$dato', `mod_time`='$timo', `status`='1'  WHERE `id`='$ifd'";
					$asi1=mysqli_query($con,$query1) or die (mysql_error());
        

        // new fields added
					
			$field_it=$_POST['fielditems1']; 
			
			foreach($field_it as $fld_it)
			{
			    if($fld_it != "")
			    {
			$query123 = "INSERT INTO `iform_field`(`id`, `field_item`, `conn_i`) VALUES ('null','$fld_it','$fi_id')";
			$ins_field=mysqli_query($con,$query123) or die (mysql_error());
			    }else{
			        
			    }
			}
				
				//field  updations
				    
				
		         
						$arr_q=array();
						$sel_f3=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$fi_id' ")or die(mysqli_error());
		
					
						while($sel_field4=mysqli_fetch_array($sel_f3))
						{
							$ty=$sel_field4[id];
							array_push($arr_q,$ty);
						
						}
						
						$item_on_here=$_POST['fielditems']; 
							$rl=0;
					foreach($item_on_here as $ff)
                    {
                        
                    if($ff != "")
                        {
                
                            $rr="UPDATE `iform_field` SET `field_item`='$ff' WHERE `id`='$arr_q[$rl]'" ;
        					$ins_upd=mysqli_query($con,$rr) or die (mysql_error());
        			       
        		
				        }
				        else{
				            $rrde="DELETE FROM `iform_field` WHERE `id`='$arr_q[$rl]'" ;
        					$insde_upd=mysqli_query($con,$rrde) or die (mysql_error());
        				  //  echo '<script type="text/javascript">alert("'.$rrde.'");</script>';
				        }
				        $rl=$rl+1;
                    }
                     
					$error_msg="Fields Updated";
					header("Refresh:0");
			 	 }
			
			  	else{
			
			 	 	$error_msg="Please Fillout all the mandatory fields";
			  	}
			  	
			  	
  		}

	
	
		
	

		
	
			
		
		


  



}





					

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- CKEDITOR -->
<script src="ck/ckeditor.js"></script>
  <script src="ck/ck/js/sample.js"></script>
  <link rel="stylesheet" href="ck/ck/css/samples.css">
  <link rel="stylesheet" href="ck/ck/toolbarconfigurator/lib/codemirror/neo.css">
<!--CK END-->
<?php /*?><?php

$sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$fi_id' ")or die(mysqli_error());
$sel_ff=mysqli_num_rows($sel_f);
?>
<?php for($i=1;$i<=$sel_ff;$i++)
		{
		$op="chk".$i;
		$opp="DDL".$i;
			?>
<script>
		
				 function Enableddl(chk)
					{
						var ddl=document.getElementById("<?php echo $opp;?>");
						ddl.disabled=chk.checked ? false : true;
						if(!ddl.disabled)
						{
						ddl.focus();
						}
					}
					</script>
					<?php
			}	 
	
?><?php */?>
	

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

    </head>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
         <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-edit"></i>
                <h3>Edit Vacancy</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            <h6 class="error"><?php echo @$error_msg ?></h6>
            <p class="succ_green" id="error_usernam"></p>
            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#formcontrols" data-toggle="tab">Edit vacancy</a>
              </li>
              <!-- <li class=""><a href="#jscontrols" data-toggle="tab">Active Vacancies</a></li> -->
            </ul>
            
            <br>
            
              <div class="tab-content">
                <div class="tab-pane active" id="formcontrols">
                <form id="edit-profile" class="form-horizontal" method="post">
                  <fieldset>
                    
                    <div class="control-group">                     
                      <label class="control-label" for="username">Position Name</label>
                      <div class="controls">
                        <input class="span6" id="username" value="<?php echo $post; ?>" name="post" type="text">
                      
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Experience</label>
                      <div class="controls">
                        <input class="span6" id="firstname" name="exp"  value="<?php echo $exp; ?>" type="text">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Qualification</label>
                      <div class="controls">
                        <input class="span6" id="lastname" value="<?php echo $qual; ?>" name="qual" type="text">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    
                    <!-- /control-group -->
                    
                    <div class="control-group">                     
                      <label class="control-label" for="email">Skills Required</label>
                      <div class="controls">

                        <textarea class="span6 ckeditor"   name="skills"><?php echo $skills ?></textarea>
                      </div> <!-- /controls -->       
                    </div> 
                   

                    <div class="control-group">                     
                      <label class="control-label" for="lastname">Last Date</label>
                      <div class="controls">
                        <input class="span6" id="lastname" value="<?php echo $dater ?>" name="last_date" type="text">
                      </div> <!-- /controls -->       
                    </div>
                    
                       <div class="control-group">                     
                      <label class="control-label" for="email">Job Details</label><br>
                      <div class="controls">
                           <div class="adjoined-bottom">
   
        <textarea class="ckeditor" class="span6 mys"  name="job_det">
         <?php echo $det ?>
        </textarea>
      
  </div>   <br>
  
    <div class="table-responsive">
					      <h4>Pre interview form fields</h4><br><br>
				
					<?php
					$p=1;
					$sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$fi_id' ")or die(mysqli_error());
									while($sel_field=mysqli_fetch_array($sel_f))
									
									
									{
									
									
									$id=$sel_field['id'];
									$val=$sel_field['field_item'];
									$ndd="n".$id;
									$c_id="chk".$p;
									$s_id="DDL".$p;	
										
															?>
						<table class="table table-bordered">
						    <tr>
								<td> 									
								<input type="text" name="fielditems[]"  value="<?php echo $val;?>"  style="width:40%;height:30%;"/>
							
								</td>
							</tr>
						</table>
								
									<?php }
									
									
									?>	 
								
				 
				 <table class="table table-bordered" id="d_f">
					<tr>
					
						<td>
				<input type="text"  name="fielditems1[]" placeholder="Enter New Field" style="width:40%;height:30%;"/>
				&nbsp;
					<button type="button" name="addnew" id="addnew" class="btn btn-success">+</button></td>
							</tr>
							</table>

                       <!--  <textarea class="span6 mys"  name="job_det"><?php echo $det ?></textarea> -->
                      </div> <!-- /controls -->       
                    </div>                  
                               
                                  
         <button type="submit" name="edit" class="btn btn-primary pull-right" value="upd">Update</button> 
                      <a href="index.php" class="btn pull-right">Cancel</a><br><br>
<script>
  initSample();
</script>                                  
                    
                      
                     <br>
                    
					
			
    
					  
					  
					  
					
					
						
					
				
			
			
                      
                 
                     
                    <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>
                
                <div class="tab-pane" id="jscontrols">
                  <form id="edit-profile2" class="form-vertical">
                    <fieldset>
                      
                                            
                                            
                                           
                                                                                        
                   <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3></h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              
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



<!-- Le javascript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script>
  $(document).ready(function(){
	var i=1;
	$('#addnew').click(function(){
		i++;
		$('#d_f').append('<tr id="row'+i+'"><td><input type="text" name="fielditems1[]" placeholder="Enter New Field" style="width:40%;height:30%;"/>&nbsp;&nbsp;&nbsp;<button type="button" name="addn" id="'+i+'" class="btn btn-success btn_add">+</button>&nbsp;<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	
	});
	
	var i=1;
	
	$(document).on('click', '.btn_add', function(){
	i++;
		var button_id = $(this).attr("id"); 
		
		$('#d_f').append('<tr id="row'+i+'"><td><input type="text" name="fielditems1[]" placeholder="Enter New Field" style="width:40%;height:30%;"/>&nbsp;&nbsp;&nbsp;<button type="button" name="addn" id="'+i+'" class="btn btn-success btn_add">+</button>&nbsp;<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
	
});

</script>
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
     document.getElementById('error_usernam').innerHTML="Field inserted successfully";
     document.getElementById('usernamew').value = '';
   }
   });


  }
  return false; 
 }



</script>
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
</script><!-- /Calendar -->
</body>
</html>
