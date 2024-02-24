<?php
include_once('config.php');

// Retrieve job ID from URL
$jobId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch job details based on the job ID
$query = "SELECT * FROM into_vac WHERE id = $jobId";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error fetching job details: ' . mysqli_error($conn));
}

// Check if the job exists
if (mysqli_num_rows($result) > 0) {
    // Job details found
    $row = mysqli_fetch_assoc($result);
} else {
    // Job not found, handle this case
    die('Job not found');
}
?>

<!-- Rest of your HTML code to display details -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Consua - Consulting Business Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Page Title ========== -->
    <title>JOB DEATILS</title>

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
    <link href="style.css" rel="stylesheet">

    <!-- ========== End Stylesheet ========== -->

</head>

<body>

       <?php include("header.php") ?>

    <div class="site-heading text-center"><br>
        <h2 class="sub-heading">
            <?php echo isset($row['post']) ? $row['post'] : ''; ?>
        </h2>

        <div class="site-heading text-center">
            <h4 class="sub-heading">Experience</h4><br>
            <?php echo isset($row['exp']) ? $row['exp'] : ''; ?>
        </div>
<div class="site-heading text-center">
            <h4 class="sub-heading">Qualification</h4><br>
            <?php echo isset($row['qual']) ? $row['qual'] : ''; ?>
        </div>
        <div class="site-heading text-center">
            <h4 class="sub-heading">Job Details</h4><br>
            <?php echo isset($row['details']) ? $row['details'] : ''; ?>
        </div>
        <div class="site-heading text-center">
            <h4 class="sub-heading">SKILLS REQUIRED</h4><br>
            <?php echo isset($row['skill']) ? $row['skill'] : ''; ?>
        </div>
         <div class="site-heading text-center">
            <h4 class="sub-heading">job code</h4><br>
            <?php echo isset($row['f_id']) ? $row['f_id'] : ''; ?>
        </div>
        <!-- Add other details here... -->

       <td> <button class="button-fgh">
    <a href="job_form.php?f_id=<?php echo urlencode($row['f_id']); ?>">Apply</a>
</button>
</td>
    </div>

    <?php include("footer.php") ?>
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