// Function to check and toggle visibility based on viewport width
function toggleVisibility() {
    var contentToHide = document.querySelector('.content-to-hide');
    var itemsToHideOnDesktop = document.querySelectorAll('.hide-on-desktop');

    // Check if the viewport width is less than or equal to 768px (mobile view)
    if (window.innerWidth <= 768) {
        contentToHide.style.display = 'block';
        // Show items on mobile
        itemsToHideOnDesktop.forEach(function(item) {
            item.style.display = 'block';
        });
    } else {
        // Hide content and items on desktop
        contentToHide.style.display = 'none';
        itemsToHideOnDesktop.forEach(function(item) {
            item.style.display = 'none';
        });
    }
}

// Call the function on page load and on window resize
document.addEventListener('DOMContentLoaded', toggleVisibility);
window.addEventListener('resize', toggleVisibility);
