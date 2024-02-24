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
    <title>
       ENQUIRY FORM</title>

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
    <link href="style.css" rel="stylesheet">
   
    
    
    <style>/* Style the form container */
        #enquiryForm {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Style form labels */
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        /* Style form inputs and textarea */
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        /* Style the dropdown select */
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        /* Style reCAPTCHA */
        .g-recaptcha {
            margin-bottom: 10px;
        }
        
        /* Style the submit button */
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        </style>
    <!-- ========== End Stylesheet ========== -->
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    
<?php
include("header.php")
?>

    <body>
    <form  id="enquiryForm" method="post" action="home_enquiry.php" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
           
            <label for="dropdown">Select your service</label>
            <select id="dropdown" name="service">
                <option value="Digital marketing">Digital marketing</option>
                <option value="Content marketing">Content marketing</option>
                <option value="Search engine optimization">Search engine optimization</option>
                <option value="Social media optimization">Social media optimization</option>
                <option value="Social media advertising">Social media advertising</option>
                <option value="Google ad">Google ad</option>
                <option value="Email marketing">Email marketing</option>
                <option value="Mobile marketing">Mobile marketing</option>
                <option value="Conversion rate optimization">Conversion rate optimization</option>
            </select>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
    
    <br><br><div style="display:none;">
        <label for="honeypot">Leave this field blank:</label>
        <input type="text" name="honeypot" id="honeypot">
    </div>

    <!-- Time-based field -->
    <input type="hidden" name="submit_time" value="<?= time(); ?>">
            <button type="submit" value="submit">Submit</button>
             <div id="successMessage" class="success"></div>
        </form>
    
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

        <script type="text/javascript" src="button.js"></script>
<script src="enquiryform.js"></script>
<script src="code.js"></script>
    </body>

    </html>