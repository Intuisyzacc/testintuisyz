<?php
include_once('config.php');
$query = "SELECT * FROM into_vac";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error fetching data: ' . mysqli_error($conn));
}
// Check if there are any open positions
$hasOpenPositions = mysqli_num_rows($result) > 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <?php
    include("gtmheader.php")
        ?>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- ========== Page Title ========== -->
   <title>Career with Intuisyz Technologies | IT & Digital Marketing Consultant</title>
<meta name="description" content="Enrich your career with Digital Marketing and Software development company in Kochi. Look out Intuisyz Career page for latest openings.">
<meta name="keywords" content="job openings kochi, PHP developer jobs kochi, kerala, Content writers wanted jobs kochi, kerala, Content writer jobs kochi, kerala, Programmers wanted kochi, kerala, ">
<meta property="og:title" content="Career with Intuisyz Technologies | IT & Digital Marketing Consultant">
<meta property="og:description" content="Enrich your career with Digital Marketing and Software development company in Kochi. Look out Intuisyz Career page for latest openings.">
<meta property="og:image" content="https://intuisyz.com/images/car.jpg">
<meta property="twitter:title" content="Career with Intuisyz Technologies | IT & Digital Marketing Consultant">
<meta property="twitter:description" content="Enrich your career with Digital Marketing and Software development company in Kochi. Look out Intuisyz Career page for latest openings.">
<meta property="twitter:image" content="https://intuisyz.com/images/car.jpg">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="author" content="https://plus.google.com/u/0/+IntuisyzTechnology/">
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/images/intui-newlg.png" type="image/x-icon">

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
    include("gtmbody.php")
        ?>  
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
 <?php if ($hasOpenPositions) : ?>
        <div class="site-heading text-center">
            <h4 class="sub-heading"> OPEN POSITIONS</h4>
        </div>

        <table class="col-xl-34 col-md-12">
            <tr>
                <th>Postion</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo isset($row['post']) ? $row['post'] : ''; ?></td>
                    <td><?php echo isset($row['last_date']) ? $row['mod_date'] : ''; ?></td>
                    <td class="hidden"><?php echo isset($row['id']) ? $row['id'] : ''; ?></td>
                    <td>
                        <button class="button-fgh">
                            <a href="job_details.php?id=<?php echo urlencode($row['id']); ?>">Apply</a>
                        </button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php else : ?>
        <div class="site-heading text-center">
            <h3>No current job openings. Check back later!</h3>
        </div>
    <?php endif; ?>
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