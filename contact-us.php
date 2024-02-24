<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Consua - Consulting Business Template">

    <!-- ========== Page Title ========== -->
  <title>Contact Best SEO Company Intuisyz | Digital Marketing Company India</title>

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

    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <?php
    include("header.php")
        ?>


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light"
        style="background-image: url(ERP-Project-Management-banner.jpg);">
        <div class="breadcrum-shape">
            <img src="assets/img/shape/50.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="assets/img/shape/37.png" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2>Contact Information</h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but
                            why she shewing.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                   +91 8592902277
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        <b>
                                            KOCHI</b><br>
                                        INTUISYZ TECHNOLOGIES PVT. LTD<br>
                                        INNERSPACE, CHANGAMPUZHA PARK, EDAPPALLY,<br>
                                        KOCHI, KERALA-682026.<br>

                                        <b> ANGAMALY</b><br>
                                        INTUISYZ TECHNOLOGIES PVT. LTD<br>
                                        XVII/63 U, JOSEPH PLAZA, OPPOSITE LF HOSPITAL,<BR>
                                        ANGAMALY, ERNAKULAM, KERALA, 683572

                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                 info@intuisyz.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Massage</h2>

                        <form id="contactForm"  action="consultingdb.php contactdb.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" pattern="[A-Za-z ]+">
<span class="error" id="nameError"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email" required>
                                        <span class="error" id="emailError"></span>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="tel" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number">

                                        <span class="error" id="phoneError"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="message"
                                            placeholder="Tell Us About Project *" required></textarea>
                                        <span class="error" id="commentsError"></span>
                                    </div>
                                </div>
                            </div>
                             <div style="display:none;">
        <label for="honeypot">Leave this field blank:</label>
        <input type="text" name="honeypot" id="honeypot">
    </div>

    <!-- Time-based field -->
    <input type="hidden" name="submit_time" value="<?= time(); ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>

                            </div>
                            <!-- Alert Message -->
                            <div id="successMessage" class="success"></div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Map 
    ============================================= -->
    <div class="maps-area bg-gray overflow-hidden">
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.8894515942493!2d76.38857407416546!3d10.189632269744815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08065dde8759d5%3A0xbac50f5d1ea5a404!2sIntuisyz%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1696311014192!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Map -->

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
<script src="email_data.js"></script>
<script src="code.js"></script>
</body>

</html>