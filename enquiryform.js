function validateForm() {
    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;
    const dropdown = document.getElementById("dropdown").value;
    const captcha = grecaptcha.getResponse();

    if (!name || !phone || !email || !message || !dropdown) {
        alert("All fields are required.");
        return false;
    }

    if (!isValidEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (!captcha) {
        alert("Please complete the CAPTCHA.");
        return false;
    }

    // Additional validation logic can be added here

    return true;
}

function isValidEmail(email) {
    // Basic email validation regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
