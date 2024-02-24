function generateRandomText() {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const length = 6;

    let captchaText = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        captchaText += characters.charAt(randomIndex);
    }

    return captchaText;
}

// Function to generate and display a new captcha
function generateCaptcha() {
    const captchaText = generateRandomText();
    document.getElementById('captchaText').textContent = captchaText;
}

// Initial captcha generation
generateCaptcha();
// Function to validate the captcha input
function validateCaptcha() {
    const userInput = document.getElementById('captchaInput').value.toLowerCase();
    const captchaValue = document.getElementById('captchaText').textContent.toLowerCase();

    if (userInput === captchaValue) {
        // Captcha verification successful
        alert('CAPTCHA verification successful! Form can be submitted.');
        return true;
    } else {
        // Captcha verification failed
        alert('CAPTCHA verification failed. Please try again.');
        generateCaptcha(); // Refresh the captcha
        return false;
    }
}
