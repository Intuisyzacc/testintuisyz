<?php
include_once('config.php');

// Retrieve job ID from URL
$jobId = isset($_GET['f_id']) ? mysqli_real_escape_string($conn, $_GET['f_id']) : '';
// Fetch position based on the job ID from the into_vac table
$queryPosition = "SELECT post FROM into_vac WHERE f_id = '$jobId'";
$resultPosition = mysqli_query($conn, $queryPosition);

if (!$resultPosition) {
    die('Error fetching position: ' . mysqli_error($conn));
}

// Check if the record exists
if (mysqli_num_rows($resultPosition) > 0) {
    // Position found
    $position = mysqli_fetch_assoc($resultPosition)['post'];
} else {
    // Record not found, handle this case
    die('Position not found for the given job ID');
}
// Fetch field_items based on the job ID
$query = "SELECT field_item FROM iform_field WHERE conn_i = '$jobId'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error fetching field_items: ' . mysqli_error($conn));
}

// Check if the record exists
if (mysqli_num_rows($result) > 0) {
    // Field_items found
    $fieldItems = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $fieldItems[] = $row['field_item'];
    }
} else {
    // Record not found, handle this case
    die('Record not found');
}

// Assuming you're submitting the form data via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Display form fields dynamically based on field_items
    foreach ($fieldItems as $fieldItem) {
        // Check if the field item is present in the $_POST array and not empty
        if (isset($_POST[$fieldItem]) && $_POST[$fieldItem] !== '') {
            echo "<label for='$fieldItem'>$fieldItem:</label>";
            echo "<input type='text' id='$fieldItem' name='$fieldItem' value='{$_POST[$fieldItem]}' required>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="various professional job openings at intuisyz where you can start your career with">
<meta name="keywords" content="job openings kochi, PHP developer jobs kochi, kerala, Content writers wanted jobs kochi, kerala, Content writer jobs kochi, kerala, Programmers wanted kochi, kerala,">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="author" content="INIUISYZ Technologies" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />

  <title>Career | INTUISYZ</title>

    <link rel="shortcut icon" href="images/intui-newlg.png" type="image/x-icon">

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

    <style>
        #enquiryForm {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

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

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .g-recaptcha {
            margin-bottom: 10px;
        }

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
</head>

<body>
    <?php include("header.php") ?>

    <div class="container default-padding">
        <h3 align="center"> CONTACT FORM</h3>
        <form id="formmId" action="jobformdb1.php" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
            
           <input type="text" id="post" name="post" value="<?php echo $position; ?>" readonly required>

          
            <input type="text" id="name" name="name" pattern="[A-Za-z ]+" title="Please enter a valid name" placeholder="Name" required>

          
            <input type="tel" id="phone" pattern="[0-9]{10}" name="phone" title="Please enter a valid 10-digit phone number" placeholder="Phone number" required>

          
            <input type="email" id="email" name="email" placeholder="Email" required>

            <label for="resume">Upload CV:</label>
            <input type="file" id="resume" name="resume"  placeholder="Upload CV" accept=".pdf, .doc, .docx" required>

            <h3 align="center"> PRE INTERVIEW FORM</h3>
            <?php
            // Display form fields dynamically based on field_items
            foreach ($fieldItems as $fieldItem) {
              
                echo "<input type='text' id='$fieldItem' name='FieldItem$fieldItem' placeholder='$fieldItem' required>";
            }
            ?>

            <br>
            <button type="submit" onclick="submitForm()">Submit</button><br>
        </form>
        <div id="successMessage"></div>
    </div>

    <?php include("footer.php") ?>

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

    <script>
        function clearForm() {
            document.getElementById('formmId').reset();
        }

        function showAlert(message) {
            alert(message);
        }

        function submitForm(event) {
            event.preventDefault();

            var formData = new FormData(document.getElementById('formmId'));

            $.ajax({
                type: 'POST',
                url: 'jobformdb1.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    document.getElementById('formmId').reset();
                    document.getElementById('successMessage').innerHTML = response;
                    showAlert('Form submitted successfully!');
                },
                error: function (error) {
                    console.error('Form submission error:', error);
                }
            });
        }
    </script>
</body>

</html>
