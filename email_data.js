
    $(document).ready(function () {
        // Handle form submission
        $("#contactForm").submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting in the traditional way
            
            // Your existing form submission code
            $.ajax({
                type: "POST",
                url: "consultingdb.php",
                data: $(this).serialize(),
                success: function (response) {
                    // Clear form fields
                    $('#contactForm')[0].reset();
                    
                    // Display success message
                    $("#successMessage").html(response).fadeIn("slow");
                    setTimeout(function () {
                        $("#successMessage").fadeOut("slow");
                    }, 5000); // Hide success message after 5 seconds
                },
            });
        });
    });
