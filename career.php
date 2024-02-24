<?php
include_once('config.php');
$query = "SELECT * FROM into_vac";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error fetching data: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="If you are looking to transform yourself as a professional and a human being for the better, look no further. At Intuisyz Technologies, We foster a culture of cooperation.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Page Title ========== -->
   <title>Digital Marketing Career | Intuisyz Technologies</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
 
    <style>
        .hidden {
            display: none;
        }
    </style>
    <!-- ========== End Stylesheet ========== -->

</head>

<body>
   
<?php
include("header.php")
?>


    <img src="images/car.jpg" style="width: 100%;">
    <div class="site-heading text-center"><br>
        <h2 class="sub-heading"> JOIN OUR INSPIRING JOURNEY</h2>
        <p>
           
            At intuisyz, we depend on our people to be their creative best. We encourage collaboration, innovation and
            continuous learning. If you are looking to transform yourself as a professional and a human being for the
            better, look no further. At INTUISYZ, We foster a culture of cooperation. Although we encourage fast
            individual growth, we try not to create a toxic environment due to unbridled competition.

        </p>
    </div>

   
    <!-- Start Team 
    ============================================= -->
    <div class="team-style-onea-rea default-padding-top pb-70 pb-xs-0 bg-contain-center bg-gray" style="background-image: url(assets/img/shape/18.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Our Selection and Recruitment Process</h4>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team-style-one active">
                        <div class="thumb">
                            <img src="images/apply.jpg" alt="Image Not Found">
                            
                        </div>
                        <div class="info">
                          
                            <h4>APPLICATION

                                </h4>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="images/apply1.jpg" alt="Image Not Found">
                            
                        </div>
                        <div class="info">
                            
                            <h4> SHORTLISTING</h4>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="images/apply2.jpg" alt="Image Not Found">
                            
                        </div>
                        <div class="info">
                           
                            <h4>PRACTICAL TEST</h4>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="images/apply3.jpg" alt="Image Not Found">
                            
                        </div>
                        <div class="info">
                            
                            <h4>INTERVIEW</h4>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Team Area -->
    <div class="site-heading text-center">
        <h4 class="sub-heading"> OPEN POSITIONS</h4></DIV>

    <table class="col-xl-34 col-md-12">
        <tr><th>Postion</th><th>Date</th><th></th></tr>
       <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo isset($row['post']) ? $row['post'] : ''; ?></td>
        
        <td><?php echo isset($row['last_date']) ? $row['last_date'] : ''; ?></td>
        <td  class="hidden"><?php echo isset($row['id']) ? $row['id'] : ''; ?></td>
       <!-- Change this line -->
<td> <button class="button-fgh">
                        <a href="job_details.php?id=<?php echo urlencode($row['id']); ?>">Apply</a>
                    </button></td>

        <!-- Add more columns if needed -->
      
    </tr>
    <?php
}
?>
    </table>
    <?php
include("footer.php")
?>

        <!-- jQuery Frameworks
============================================= -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/modernizr.custom.13711.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/progress-bar.min.js"></script>
        <script src="assets/js/circle-progress.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/count-to.js"></script>
        <script src="assets/js/jquery.scrolla.min.js"></script>
        <script src="assets/js/YTPlayer.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/rangeSlider.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/validnavs.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="enq_script.js"></script>
        <script src="code.js"></script>
</body>

</html>