<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();

session_start();
$user=$_SESSION['userid']; 
checkuser();

$ifd=mysqli_real_escape_string($con,$_GET['iss']);
$sle=mysqli_query($con,"SELECT * FROM `into_vac` WHERE `id`='$ifd'")or die(mysql_error());
$qr=mysqli_fetch_array($sle);

                  $post=$qr['post'];
                   $exp=$qr['exp'];
                   $qual=$qr['qual'];
                   $det=$qr['details'];
                   $idv=$qr['id'];
                   $dater=$qr['mod_date'];
                   $skills=$qr['skill'];
                 
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
    </head>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
          <div class="row">

            <div class="span12">          

              <div class="widget ">

                <div class="widget-header">
                  <i class="icon-user"></i>
                  <h3>Applicant Details</h3>
                </div> <!-- /widget-header -->

                <div class="widget-content miin">



                  <div class="tabbable">


                    <br>

                    <div class="tab-content">
                      <div class="tab-pane active" id="formcontrols">
                        <div class="form-horizontal">
                          <fieldset>
                            
                            


                            <div class="control-group">                     
                              <label class="control-label" for="username">Post:</label>
                              <div class="controls">
                              <p>  <?php echo $post; ?></p>
                               
                              </div> <!-- /controls -->       
                            </div> <!-- /control-group -->

                             <div class="control-group">                     
                              <label class="control-label" for="username">Experience:</label>
                              <div class="controls">
                              <p>  <?php echo $exp; ?></p>
                               
                              </div> <!-- /controls -->       
                            </div> <!-- /control-group -->


                            <div class="control-group">                     
                              <label class="control-label" for="firstname">Qualification:</label>
                              <div class="controls">
                              <p><?php echo $qual; ?></p>
                              </div> </div><!-- /controls -->       
                         


                            <div class="control-group">                     
                              <label class="control-label" for="lastname">Skills Required:</label>
                              <div class="controls">
                                <ul style="list-style-type: none;text-align: left;line-height: 1.6">
                                  <?php  $skills;
                                $sklit=explode("<br>", $skills);
                                
                                foreach (array_filter($sklit) as $ke => $val) {
                                 
                                
                                 ?>
                                   <li>
                                 <?php  echo $val; ?>
                                   </li>
                                   <?php } ?>
                                 </ul>
                            </div>  </div> <!-- /controls -->       
                        


                            <div class="control-group">                     
                              <label class="control-label" for="email">Job Details:</label>
                              <div class="controls">
                                  
                                 <ul style="list-style-type: none;">
                                  <?php  $det;
                                $splitz=explode("<br>", $det);
                                
                                foreach (array_filter($splitz) as $key => $value) {
                                 
                                
                                 ?>
                                   <li>
                                 <?php  echo $value; ?>
                                   </li>
                                   <?php } ?>
                                 </ul>
                              </div> <!-- /controls -->       
                            </div> <!-- /control-group -->

                             <div class="control-group">                     
                              <label class="control-label" for="email">Date:</label>
                              <div class="controls">
                                <p> <?php echo $dater; ?></p>
                              </div> <!-- /controls -->       
                            </div>

                        

                          </div>
                        

                        </div>
                        
                        </fieldset>
                        
                      </form>
                    </div>




                  </div>





                </div> <!-- /widget-content -->

              </div> <!-- /widget -->

            </div> <!-- /span8 -->




          </div></div>

        </div>
        <!-- /extra-inner --> 
      </div></div>
      <!-- /extra -->




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
</script><!-- /Calendar -->
</body>
</html>
