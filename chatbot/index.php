<!DOCTYPE html>
<html lang="en">
<head>
     <?php
    include("../gtmheader.php")
        ?>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="ahrefs-site-verification" content="5f67e1d27d17a5ce6d69f8ce69e862fdb12a3c9dbddba9cff9610d313a43646d">
    <style>
        html{
        overflow-x: hidden;
        overflow-y: hidden;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        /* Main Section */
        .main-section {
            background: linear-gradient(to top, red, white);
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
            overflow: hidden;
            position: relative;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        h1 {
            font-size: 44px;
            margin-bottom: 5px;
        }

        p{
            font-size: 20px;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .button {
            padding: 15px 30px;
            margin: 5px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .services {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        .jobs {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .information {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        /* Services Section */
        .services-section {
            background: linear-gradient(to top, red, white);
            color: white;
            text-align: center;
            height: 110vh; /* Set the height to 100% */
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: absolute;
            top: 0;
            right: -100%;
            width:100%;
            transition: right 0.5s ease-in-out;
        }
        #service-section{
            display=none;
        }

        .services-section p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        /* Add styles for the service buttons */
        .service-buttons-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .service-button {
            padding: 10px 20px;
            margin: 5px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .service-seo {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        .service-sem {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-web-development {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .service-marketing-analysis {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-it-outsourcing {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .service-wfh {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        .service-onsite {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-freelancer {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .service-hybrid {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-about-company {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        .service-about-ceo {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-blogs {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .service-portfolio {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .service-testimonials {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        @media (max-width: 768px) {
            html{
                overflow-x: hidden;
        overflow-y: hidden;
            }
            .main-section {
                padding: 17px; /* Adjusted padding for mobile view */
            }

            h1 {
                font-size: 24px;
            }
            .button {
            padding: 10px 20px;
            margin: 5px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            }
            p{
            font-size: 15px;
            }
        }
        .sub-section {
            background: linear-gradient(to top, red, white);
            color: white;
            text-align: center;
            height: 110vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 100%; /* Initially off-screen to the right */
            width: 100%;
            transition: left 0.5s ease-in-out;
        }

        .sub-section h2 {
            font-size: 28px;
        }

        .sub-section p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .sub-section-buttons-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .sub-section-button {
            padding: 10px 20px;
            margin: 5px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .sub-section-seo {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        .sub-section-sem {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .sub-section-web-development {
            background: linear-gradient(to right, #f85032, #e73827);
        }

        .sub-section-marketing-analytics {
            background: linear-gradient(to right, #4b6cb7, #182848);
        }

        .sub-section-it-outsourcing {
            background: linear-gradient(to right, #f85032, #e73827);
        }
        .exit-button {
        position: fixed;
        top: 30px;
        right: 30px;
        background-color: white;
        color: white;
        font-weight: bold;
        padding: 10px 30px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        z-index: 999; /* Ensure the button is on top of other elements */
    }
    #enquiry-section,#company-enquiry-section{
            margin: 0;
            padding: 0;
            height:100vh;
            width:100%;
            display: flex;
            align-items: center;
            justify-content: center;
             flex-direction: column;
    }
    form {
            background-color: #ffffff;
            padding: 9px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color:black;
            text-align:left;
        }

        input, .btn {
            width: 100%;
            padding: 2px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .close {
            background-color: #f44336;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }
#captchaCode {
    background-color: #fff; /* Set a light background color */
}
.logo {
    position: absolute;
    top: 0;
    left: 0;
    max-width: 100%;
    height: auto;
    z-index: 1; /* Set a higher z-index to ensure it's above other elements */
}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>
<body>
     <?php
    include("../gtmbody.php")
        ?>
    <img src="../images/intuisyz.png" class="logo" alt="Logo" onclick="exitPage()">
    <!-- Exit Button -->
    <button class="exit-button" id="exit-button" onclick="exitPage()"  style="color: black;">Exit</button>
    <script>
        function exitPage() {
            location.reload(); // Reload the page
        }

    </script>
    <!--Main-section-->
    <div class="main-section">
        <h2>Please let us know what you are  looking for ?</h2>
       
        <div class="buttons-container">
            <button onclick="navigateToSection('services')" class="button jobs">Enquiry</button>
            <button onclick="navigateToSection('jobs')" class="button jobs">Career</button>
            <button onclick="navigateToSection('information')" class="button jobs">Information</button>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services-section" class="services-section">
        <h1 id="service-heading"></h1>
        <h2 id="service-paragraph"></h2>
        <div class="service-buttons-container" id="service-buttons">
        </div>
    </div>

    <script>
        function navigateToSection(section) {
            var servicesSection = document.getElementById('services-section');
            var serviceButtonsContainer = document.getElementById('service-buttons');
            var heading = document.getElementById('service-heading');
            var paragraph = document.getElementById('service-paragraph');

            switch (section) {
                case 'services':
                  
                    heading.innerText = '';
                    paragraph.innerText = 'Services';
                    serviceButtonsContainer.innerHTML = `
                        <button onclick="showServiceDetails('SEO')" class="service-button service-sem">SEO</button>
                        <button onclick="showServiceDetails('SEM')" class="service-button service-sem">SEM</button>
                        <button onclick="showServiceDetails('Web Development')" class="service-button service-sem">Web Development</button>
                        <button onclick="showServiceDetails('Marketing Analytics')" class="service-button service-marketing-analysis">Marketing Analytics</button>
                        <button onclick="showServiceDetails('IT Outsourcing')" class="service-button service-sem">IT Outsourcing</button>
                    `;
                    break;
                case 'jobs':
                    heading.innerText = '';
                    paragraph.innerText = 'Preferred Job Type? ';
                    serviceButtonsContainer.innerHTML = `
                        <button onclick="showServiceDetails('Onsite')" class="service-button service-onsite">Onsite</button>
                        <button onclick="showServiceDetails('Freelancer')" class="service-button service-onsite">Freelancer</button>
                        <button onclick="showServiceDetails('WFH')" class="service-button service-onsite">Work From Home</button>
                        <button onclick="showServiceDetails('Hybrid')" class="service-button service-hybrid">Hybrid</button>
                    `;
                    break;
                case 'information':
                    heading.innerText = 'What would you like to know about ?';
                    paragraph.innerText = '';
                    serviceButtonsContainer.innerHTML = `
                        <button class="service-button service-portfolio"><a href="https://intuisyz.com/about-us.php" class="service-button service-portfolio" target="_blank">About Company</a></button>
                        <button class="service-button service-about-ceo"><a href="https://intuisyz.com/leadership.php" class="service-button service-about-ceo" target="_blank">About CEO</a></button>
                        <button class="service-button service-portfolio"><a href="https://intuisyz.com/blog.php" class="service-button service-portfolio" target="_blank">Blogs</a></button>
                        <button class="service-button service-portfolio"><a href="https://intuisyz.com/portfolio.php" class="service-button service-portfolio" target="_blank">Portfolio</a></button>
                        <button class="service-button service-portfolio"><a href="https://intuisyz.com/testimonials.php" class="service-button service-portfolio" target="_blank">Testimonials</a></button>
                    `;
                    break;
            }

            servicesSection.style.right = '0';
        }


        function toggleServices() {
            var servicesSection = document.getElementById('services-section');
            servicesSection.style.right = servicesSection.style.right === '0' ? '-100%' : '0';
        }
    </script>
    <!-- Sub Section -->
    <div id="sub-section" class="sub-section">
        <h1 id="sub-section-heading"></h1>
        <p id="sub-section-paragraph"></p>
        <div class="sub-section-buttons-container" id="sub-section-buttons">
        </div>
    </div>

    <script>
        function showServiceDetails(service) {
            var newSection = document.getElementById('sub-section');
            var newSectionHeading = document.getElementById('sub-section-heading');
            var newSectionParagraph = document.getElementById('sub-section-paragraph');
            var newSectionButtonsContainer = document.getElementById('sub-section-buttons');
            updateType(service);
            switch (service) {
                case 'SEO':
                    newSectionHeading.innerText = ' ';
                    newSectionParagraph.innerText = 'Once you hire us for your SEO needs, we follow a streamlined process to achieve your desired outcomes.';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="showNewSectionDetails('SEO Case Study')" class=" button jobs"><a href="https://beta.intuisyz.com/seo-case-study.php" class="button jobs" target="_blank">SEO Case Study</a></button>
                        <button onclick="showNewSectionDetails('Customer Stories')" class="button jobs"><a href="https://intuisyz.com/customer-story.php" class="button jobs" target="_blank">Customer Stories</a></button>
                        <button onclick="CompanyEnquiryDetails('Enquiry')" class="button jobs">Enquiry</button>
                    `;
                    break;
                case 'SEM':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'We provide Search Engine Marketing (SEM) services that not only ensure cost-effectiveness but also guarantees a steady influx of qualified inquires.';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="showNewSectionDetails('SEM Case Study')" class="sub-section-button sub-section-sem"><a href="https://beta.intuisyz.com/kalyan_developers_casestudy.php" class="sub-section-button sub-section-sem" target="_blank">SEM Case Study</a></button>
                        <button onclick="CompanyEnquiryDetails('Enquiry')" class="sub-section-button sub-section-sem">Enquiry</button>
                    `;
                    break;
                case 'Web Development':
                    newSectionHeading.innerText = 'Web Development';
                    newSectionParagraph.innerText = '';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="showNewSectionDetails('Case Study')" class="service-button service-sem"><a href="https://intuisyz.com/web-design.php" class="service-button service-sem" target="_blank">Case Study</a></button>
                        <button onclick="CompanyEnquiryDetails('Enquiry')" class="service-button service-sem">Enquiry</button>
                    `;
                    break;
                case 'Marketing Analytics':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'We offer a comprehensive marketing analytics service designed to empower our clients in enhancing their business perfomance .';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="CompanyEnquiryDetails('Enquiry')" class="sub-section-button sub-section-marketing-analytics">Enquiry</button>
                    `;
                    break;
                case 'IT Outsourcing':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'We provide outsourcing service by utilizing our expertise in offering IT Skills in mobile and web application development that incorporates bleeding edge technology.';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="CompanyEnquiryDetails('Enquiry')" class="button jobs">Enquiry</button>
                    `;
                    break;
                case 'Onsite':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'What is your location preference?';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="experianceDetails('Kochi')" class="button jobs">Kochi</button>
                        <button onclick="experianceDetails('Banglore')" class="button jobs">Banglore</button>
                        <button onclick="experianceDetails('Pune')" class="button jobs">Pune</button>
                    `;
                    break;
                case 'Hybrid':
                    newSectionHeading.innerText = 'On-Site';
                    newSectionParagraph.innerText = 'What is your location preference?';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="experianceDetails('Kochi')" class="service-button service-hybrid">Kochi</button>
                        <button onclick="experianceDetails('Banglore')" class="service-button service-hybrid">Banglore</button>
                        <button onclick="experianceDetails('Pune')" class="service-button service-hybrid">Pune</button>
                    `;
                    break;
                case 'Freelancer':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'What is your current experience level ?';
                    newSectionButtonsContainer.innerHTML = `
                        <button  onclick="positionDetails('Fresher')" class="service-button service-onsite">Fresher</button>
                        <button  onclick="positionDetails('Experienced')" class="service-button service-onsite">Experienced</button>
                    `;
                    break;
                case 'WFH':
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'What is your current experience level ?';
                    newSectionButtonsContainer.innerHTML = `
                        <button  onclick="positionDetails('Fresher')" class="button jobs">Fresher</button>
                        <button  onclick="positionDetails('Experienced')" class="button jobs">Experienced</button>
                    `;
                    break;
            }
newSection.style.display="flex";
            newSection.style.left = '0';
        }
    </script>
    <!-- Sub Sub Section -->
    <div id="sub-sub-section" class="sub-section">
        <h1 id="sub-sub-section-heading"></h1>
        <p id="sub-sub-section-paragraph"></p>
        <div class="sub-section-buttons-container" id="sub-sub-section-buttons">
        </div>
    </div>
    <script>
        function experianceDetails(details) {
            var newSection = document.getElementById('sub-sub-section');
            var newSectionHeading = document.getElementById('sub-sub-section-heading');
            var newSectionParagraph = document.getElementById('sub-sub-section-paragraph');
            var newSectionButtonsContainer = document.getElementById('sub-sub-section-buttons');
            updateLocation(details);
                    newSectionHeading.innerText = 'Experience';
                    newSectionParagraph.innerText = 'What is your current experience level ?';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="positionDetails('Fresher')" class="button jobs">Fresher</button>
                        <button onclick="positionDetails('Experienced')" class="button jobs">Experienced</button>
                    `;
            newSection.style.left = '0';
        }
    </script>
    <!-- Position Section -->
     <div id="position-section" class="sub-section">
        <h1 id="position-section-heading"></h1>
        <p id="position-section-paragraph"></p>
        <div class="sub-section-buttons-container" id="position-section-buttons">
        </div>
    </div>
    <script>
        function positionDetails(details) {
            var newSection = document.getElementById('position-section');
            var newSectionHeading = document.getElementById('position-section-heading');
            var newSectionParagraph = document.getElementById('position-section-paragraph');
            var newSectionButtonsContainer = document.getElementById('position-section-buttons');
            updateExperiance(details);
                    newSectionHeading.innerText = '';
                    newSectionParagraph.innerText = 'What position are you looking for ?';
                    newSectionButtonsContainer.innerHTML = `
                        <button onclick="EnquiryDetails('Digital marketing trainee')" class="service-button service-onsite">Digital Marketing Trainee</button>
                        <button onclick="EnquiryDetails('SEO Analyst')" class="service-button service-onsite">SEO Analyst</button>
                       
                     
                    `
            newSection.style.left = '0';
        }
    </script>
    <!-- Job Enquiry Section -->
    <div id="enquiry-section" class="sub-section">
     <form id="jobfrm" action="job.php" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event, 'jobfrm')">


      
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

       
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required>

      
        <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone-no" required>
     
        <input type="text" id="salary" name="salary" placeholder="Enter Your expected salary" required>

    
        <input type="text" id="type" name="type" readonly>
       
        <label for="name">Location:</label>
        <input type="text" id="location" name="location" value="-"readonly>

    
        <input type="text" id="experiance" name="experience" readonly>


       
        <input type="text" id="position" name="position" readonly>

        <label for="cv">Upload CV:</label>
        <input type="file" id="cv" name="cv" style="color:black;"accept=".pdf, .doc, .docx" required>


    <div style="align-items: center;">
        <input type="text" id="jobfrm_captcha" name="captcha" placeholder="Enter the code" required>
        <!-- Display the captcha code in a small box -->
        <div id="jobfrm_captchaCode" style="border: 1px solid #ccc; padding: 5px; margin-left: 10px; font-weight: bold; color: black;"></div>

        <!-- Add reload icon to regenerate captcha -->
        <i class="fa fa-refresh" onclick="reloadCaptcha('jobfrm')" style="cursor: pointer; margin-left: 10px;"></i>
    </div>
    <div id="jobfrm_captchaMessage"></div>

    <div style="display: flex; justify-content: space-between;">
        <button class="btn" type="submit">Submit</button>
        <a href="index.php"><button class="btn close" type="button">Close</button></a>
    </div>
     
    </form>
    </div>
    <script>
        function EnquiryDetails(details){
            updatePositon(details);
            var newSection = document.getElementById('enquiry-section');
            newSection.style.left='0';
            ExtBnt=document.getElementById('exit-button');
            ExtBnt.style.display='none';
            CEnquiry=document.getElementById('company-enquiry-section');
            CEnquiry.style.display='none';
        }
        function updateType(data) {
            document.getElementById('type').value = data;
            document.getElementById('context').value = data;

        }
        function updateLocation(data) {
            document.getElementById('location').value = data;
        }
        function updateExperiance(data) {
            document.getElementById('experiance').value = data;
        }
        function updatePositon(data) {
            document.getElementById('position').value = data;
        }
    </script>
    <!-- Company Enquiry Section -->
    <div id="company-enquiry-section" class="sub-section">
   <form id="frm" action="datasend.php" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event, 'frm')">

        <label for="name">Company Name:</label>
        <input type="text" id="companyname" name="companyname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
       
        <label for="name">Context</label>
        <input type="text" id="context" name="context" readonly>
   <label for="captcha">Enter Captcha:</label>
    <div style="align-items: center;">
        <input type="text" id="frm_captcha" name="captcha" placeholder="Enter the code" required>
        <!-- Display the captcha code in a small box -->
        <div id="frm_captchaCode" style="border: 1px solid #ccc; padding: 5px; margin-left: 10px; font-weight: bold; color: black;"></div>

        <!-- Add reload icon to regenerate captcha -->
        <i class="fa fa-refresh" onclick="reloadCaptcha('frm')" style="cursor: pointer; margin-left: 10px;"></i>
    </div>
    <div id="frm_captchaMessage"></div>

    <div style="display: flex; justify-content: space-between;">
        <button class="btn" type="submit">Submit</button>
        <a href="index.php"><button class="btn close" type="button">Close</button></a>
    </div>
    <div id="frm_successMessage"></div>
    </form>
    </div>
    <script>
        function CompanyEnquiryDetails(details){
            var newSection = document.getElementById('company-enquiry-section');
            newSection.style.left='0';
            ExtBnt=document.getElementById('exit-button');
            ExtBnt.style.display='none';
            JEnquiry=document.getElementById('enquiry-section');
            JEnquiry.style.display='none';
        }
    </script>
 <script>
    function validateCaptcha(formId) {
        var userEnteredCaptcha = $('#' + formId + '_captcha').val();
        var generatedCaptcha = $('#' + formId + '_captchaCode').text();

        if (userEnteredCaptcha === generatedCaptcha) {
            $('#' + formId + '_captchaMessage').html('');
            return true;
        } else {
            $('#' + formId + '_captchaMessage').html('<p style="color: red;">Invalid captcha. Please try again.</p>');
            reloadCaptcha(formId);
            return false;
        }
    }

    function submitForm(event, formId) {
    event.preventDefault();

    if (!validateCaptcha(formId)) {
        return;
    }

    $('#' + formId + '_successMessage').html('<p style="color: green;"></p>');

    var formData = new FormData(document.getElementById(formId));
    var url = formId === 'frm' ? 'datasend.php' : 'job.php';

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            // Reset only non-readonly fields
            $('#' + formId + ' :input:not([readonly])').val('');

            // Reload captcha
            reloadCaptcha(formId);

            // Additional logic or actions after successful form submission
            alert('Form submitted successfully!'); // You can customize this part
        },
        error: function (error) {
            console.error('Form submission error:', error);
        }
    });
}


    function generateCaptcha(formId) {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var captchaString = '';
        for (var i = 0; i < 6; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            captchaString += characters.charAt(randomIndex);
        }
        return captchaString;
    }

    function reloadCaptcha(formId) {
        var captchaCodeElement = $('#' + formId + '_captchaCode');
        var captcha = generateCaptcha(formId);
        captchaCodeElement.text(captcha);
        $('#' + formId + '_captcha').val('');
    }

    // Initial captcha generation on page load
    $('#frm_captchaCode').text(generateCaptcha('frm'));
    $('#jobfrm_captchaCode').text(generateCaptcha('jobfrm'));
</script>
      <script>
    // JavaScript code to disable all scrolling on mobile devices
    document.addEventListener('touchmove', function(e) {
      if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'INPUT' && e.target.tagName !=='A'&& e.target.tagName !=='FORM') {
        e.preventDefault();
      }
    }, { passive: false });

    // Optional: Disable additional touch events
    document.addEventListener('touchstart', function(e) {
     if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'INPUT' && e.target.tagName !=='A'&& e.target.tagName !=='FORM') {
        e.preventDefault();
      }
    }, { passive: false });

    document.addEventListener('touchend', function(e) {
      if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'INPUT' && e.target.tagName !=='A'&& e.target.tagName !=='FORM') {
        e.preventDefault();
      }
    }, { passive: false });
  </script>
 <script>
function goBack() {
    window.location.replace(document.referrer);
}

</script>
<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-VEBJNBDG6H"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-VEBJNBDG6H');
</script>

     <script type="text/javascript">
window._mfq = window._mfq || [];
(function() {
var mf = document.createElement("script");
mf.type = "text/javascript"; mf.defer = true;
mf.src = "//cdn.mouseflow.com/projects/37115ab1-6e1a-4505-8d4a-6a288a82bcb7.js";
document.getElementsByTagName("head")[0].appendChild(mf);
})();
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16447442509">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16447442509');
</script>
</body>
</html>







