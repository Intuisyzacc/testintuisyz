<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


session_start();
$user=$_SESSION['userid']; 
checkuser();

$up=mysqli_query($con,"UPDATE `home-capture` SET `status`='2'");


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
<style>
  html{
    scroll-behavior:smooth;
  }
    .mod-content{
        height:300px;
      overflow-x:scroll;
        box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
        padding:10px;
    }
      th{
        text-align:left;
        text-transform:uppercase;
        color:red
      }
      td button{
        background:none;
        border:none;
        outline:none;
        text-decoration:underline;
        color:green;
      }
.but-ex{
  background: #00BA8B;
    border-radius: 2px;
    width: 141px;
    height: 36px;
    font-weight: 700;
}
.but-ex:hover{
background:#00BA8B;
}
#loadl{
  font-size: 17px;
    color: seagreen;
  font-family:poppins;
}
.ulo{
  font-size: 17px;
    color: seagreen;
 text-align:center;
}
    </style>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
 

        
             
 <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Application data Export</h3> 

            
       
            
           
            </div>
            <div class="widget-content" style="padding:10px 10px 100px 10px">
         
          <div class="col-md-6">
                   <p>From:</p> 
                    <input type="date" name="frd" id="frd" value="<?php echo date("Y-m-d"); ?>">
         
             
                    <p>To:</p>
                    <input type="date" name="tod" id="tod" value="<?php echo date("Y-m-d"); ?>">
            
                    </div>
                 

                    <button  class='btn btn-primary userinfo'>Load Data</button>
<p id="loadl"></p>
             
<br>
<?php

?>

<div class="mod-body">

</div>


<br>
<div class="mod2-body" id="val">

</div>












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

  <script type='text/javascript'>
            $(document).ready(function(){

                $('.userinfo').click(function(){
                   
                    var fromDate = $("#frd").val();
                    var toDate = $("#tod").val();
                    $('p#loadl').text('Loading Data from '+fromDate+' to '+toDate+'....');
                    $('.mod-body').html("<p class='ulo'>Loading.....</p>");
                    $('.mod2-body').html("");

                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {fromDate: fromDate, toDate: toDate},
                        success: function(response){ 
                            // Add response in Modal body
                            $('p#loadl').text('Data Loaded from '+fromDate+' to '+toDate+'.');
                            $('.mod-body').html(response); 
                            
                            // Display Modal
                            // $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
            
  <script type='text/javascript'>
            $(document).ready(function(){

                $(document).on("click",".userd", function(e){
                   
                    var userid = $(this).data('id');
                    $('.mod2-body').html("<p class='ulo'>Loading.....</p>");
            
                    // AJAX request
                    $.ajax({
                        url: 'ajaxfile-d.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.mod2-body').html(response); 

                            // Display Modal
                            // $('#empModal').modal('show'); 
                        }
                    });
                    $(".userd").css('color', 'green')
                    $(this).css("color","red");        
                });
            });
            </script>
  <script src="js/jquery-1.7.2.min.js"></script> 
  <script src="js/excanvas.min.js"></script> 
  <script src="js/chart.min.js" type="text/javascript"></script> 
  <script src="js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

  <script src="js/base.js"></script> 
    <script>
   $(document).ready(function(){
  $("#togglebut").click(function(){
    $(".thisT").slideToggle();
  });
});
  </script>
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
