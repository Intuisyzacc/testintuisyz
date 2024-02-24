<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


session_start();
$user=$_SESSION['userid']; 
checkuser();

 
$selenq="SELECT * FROM `capturedata` WHERE `status` = '1' AND (`name` != '' OR `email` != '' OR `phone` != '' OR `msg` != '' )";
$capdata=mysqli_query($con,$selenq);
$numcap=mysqli_num_rows($capdata);

$homeenq="SELECT * FROM `home-capture` WHERE `status` = '1' AND (`name` != '' OR `email` != '' OR `phone` != '' OR `msg` != '' )";
$capdata1=mysqli_query($con,$homeenq);
$numcap1=mysqli_num_rows($capdata1);

$floenq="SELECT * FROM `slider-enquiry` WHERE `status` = '1' AND (`name` != '' OR `email` != '' OR `phone` != '' )";
$capdata2=mysqli_query($con,$floenq);
$numcap2=mysqli_num_rows($capdata2);

$qwer=mysqli_query($con,"SELECT * FROM `into_apps`")or die(mysql_error());
$num_apps=mysqli_num_rows($qwer);


$qwer1=mysqli_query($con,"SELECT * FROM `into_vac`")or die(mysql_error());
$num_vac=mysqli_num_rows($qwer1);

$qwer2=mysqli_query($con,"SELECT * FROM `into_apps` WHERE `status`='0'")or die(mysql_error());
$num_noti=mysqli_num_rows($qwer2);

$qwers=mysqli_query($con,"SELECT * FROM `enquiry` WHERE `status`='0'")or die(mysql_error());
$num_en=mysqli_num_rows($qwers);

$qwero=mysqli_query($con,"SELECT * FROM `enquiry`  ")or die(mysql_error());
$num_enu=mysqli_num_rows($qwero);

if($num_noti == '1')
{
$nom="New Job Application";  
}
if($num_noti > '1')
{
$nom="New Job Applications"; 
}


if($num_en == '1')
{
$nok="New Enquiry";  
}
if($num_en > '1')
{
$nok="New Enquiries"; 
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
    </head>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
          <div class="row">
            <?php  
            if($num_noti != '0')
            {
              ?>
            <div class="span12">
              <div class="alert alert-success">
                                                 
                                               <a href="list_apps.php" class="sot">   <strong></strong> <?php echo "$num_noti" . " " . "$nom"; ?> </a>
                                                </div>
            </div>
            <?php 
            }

            ?>


              <?php  
            if($num_en != '0')
            {
              ?>
            <div class="span12">
              <div class="alert alert-success">
                                                 
                                               <a href="list_enq.php" class="sot">   <strong></strong> <?php echo "$num_en" . " " . "$nok"; ?> </a>
                                                </div>
            </div>
            <?php 
            }

            ?>
          
           <div class="span6">
              <div class="widget widget-nopad mino">
                <div class="widget-header"> <i class="icon-list-alt"></i>
                  <h3> Today's Stats</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <div class="widget big-stats-container">
                    <div class="widget-content mino">
                      <h6 class="bigstats"></h6>
                      
                      <div id="big_stats" class="cf">

                        <div class="stat">  <h4>Enquiries</h4><span class="value"><?php echo $num_enu; ?></span> </div>
                        <!-- .stat -->

                        <div class="stat"> <h4>Job Applications</h4><span class="value"><?php echo $num_apps; ?></span> </div>

                        <div class="stat"> <h4>Active Vacancies</h4><span class="value"><?php echo $num_vac; ?></span> </div>
                        <!-- .stat -->

                        
                        <!-- .stat --> 
                      </div>
                    </div>
                    <!-- /widget-content --> 

                  </div>
                </div>
              </div>
              <!-- /widget -->

              <!-- /row --> 
            </div>
            <!-- /container --> 
          <div class="span6">
          <div class="widget ">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content mino">
              <div class="shortcuts"> <a href="list_enq.php" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Enquiries</span> </a>
                <a href="list_apps.php" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Job applications</span> </a>
                 <a href="list_vac.php" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Job Vacancies</span> </a>
                 <a href="dm-enq.php" class="shortcut"> <i class="shortcut-icon icon-bookmark"><span style="font-size:14px;position:absolute;color:White;background-color:red;padding:1px 5px 1px 5px;border-radius:50%;">
                 <?php echo $numcap ?></span></i><span class="shortcut-label">DM Consulting Enquiries 
                  </span> </a> 
                  <a href="service-enq.php" class="shortcut"> <i class="shortcut-icon icon-bookmark"><span style="font-size:14px;position:absolute;color:White;background-color:red;padding:1px 5px 1px 5px;border-radius:50%;">
                 <?php echo $numcap1 ?></span></i><span class="shortcut-label">Service Enquiries 
                  </span> </a> 

                   <a href="floating-enq.php" class="shortcut"> <i class="shortcut-icon icon-bookmark"><span style="font-size:14px;position:absolute;color:White;background-color:red;padding:1px 5px 1px 5px;border-radius:50%;">
                 <?php echo $numcap2 ?></span></i><span class="shortcut-label">Floating Enquiry Data
                  </span> </a> 

                </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div></div>
          
 <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Recent Job Applications</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name </th>
                    <th> Post</th>
                    <th> Email</th>
                    <th> Phone</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                 
                 <?php 
                 $qu=mysqli_query($con,"SELECT * FROM `into_apps` ORDER BY `id` DESC") or die(mysql_error());
                 while ($qr=mysqli_fetch_array($qu)) {
                   $post=$qr['post'];
                   $name_to=$qr['name'];
                   $email=$qr['email'];
                   $phone=$qr['phone'];
                   $uid=$qr['id'];
                 
                 ?>

                  <tr>
                    <td> <?php echo $name_to ?> </td>
                    <td> <?php echo $post ?> </td>
                     <td> <?php echo $email ?> </td>
                     <td> <?php echo $phone ?> </td>
                    <td class="td-actions"><a href="view_apps.php?id=<?php echo $uid ?>" class="btn btn-xs btn-info">Details</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          

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
