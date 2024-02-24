

<form action="home_enquiry.php" id="contactForm" method="post"  enctype="multipart/form-data">
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
            <div class="form-group full-width submit">
                <button class="btn btn-theme effect" type="submit">Submit</button>
            </div>
        </div>
    </div>
     <div id="successMessage" class="success"></div>
</form>
