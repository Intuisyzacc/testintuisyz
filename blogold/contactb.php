<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <form id="contactForm" action="emailsend.php" method="post" enctype="multipart/form-data">
        <!-- ... (existing form fields) ... -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <!-- Name -->
                    <input name="name" class="form-control" placeholder="Name *" type="text" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <!-- Email -->
                    <input name="email" class="form-control" placeholder="Email *" type="email" required><br>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group comments">
                    <!-- Comment -->
                    <input name="phone" class="form-control" placeholder="Phone number *" type="tel" required>
                </div>
                <br>
            </div>
            <div class="col-md-12">
                <div class="form-group comments">
                    <!-- Dropdown for selecting a category -->
                    <select id="enquiryType" name="service">
                        <option value="" disabled selected>Select a Service</option>
                        <!-- Placeholder (selected) and disabled option -->
                        <option value="DIGITAL MARKETING CONSULTING">DIGITAL MARKETING CONSULTING</option>
                        <option value="CONTENT MARKETING">CONTENT MARKETING</option>
                        <option value="SEARCH ENGINE OPTIMIZATION">SEARCH ENGINE OPTIMIZATION</option>
                        <option value="SOCIAL MEDIA OPTIMIZATION">SOCIAL MEDIA OPTIMIZATION</option>
                        <option value="GOOGLE ADS">GOOGLE ADS</option>
                        <option value="SOCIAL MEDIA ADVERTISING">SOCIAL MEDIA ADVERTISING</option>
                        <option value="EMAIL MARKETING">EMAIL MARKETING</option>
                        <option value="MOBILE MARKETING">MOBILE MARKETING</option>
                        <option value="CONVERSION RATE OPTIMIZATION">CONVERSION RATE OPTIMIZATION</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea id="w3review" name="message" rows="2" cols="100"
                            placeholder="Your message*"></textarea>
                        <span class="alert-error"></span>
                    </div>
                </div>

                <!-- Alert Message -->
                <div id="message" class="alert-msg"></div>
                <div style="display: none;">
                    <label for="honeypot">Leave this field empty</label>
                    <input type="text" id="honeypot" name="honeypot">
                </div>
                <div class="form-group full-width submit">
                    <button class="btn btn-theme effect" type="submit" onclick="submitForm(event)">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        function submitForm(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Assuming your form has the ID 'contactForm'
            var form = document.getElementById('contactForm');
            var formData = new FormData(form);

            // Create an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-type, the URL, asynchronous
            xhr.open('POST', 'emailsend.php', true);

            // Set up a function for processing the response
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // If the request was successful, display a success message
                    document.getElementById('message').innerHTML = 'Email sent successfully.';
                    // Optionally, you can reset the form fields
                    form.reset();
                } else {
                    // If there was an error, display an error message
                    document.getElementById('message').innerHTML = 'Error sending email. Please try again.';
                }
            };

            // Send the form data as a FormData object
            xhr.send(formData);
        }
    </script>
</body>

</html>
