// First popup
document.getElementById("openPopupLink1").addEventListener("click", function(e) {
    e.preventDefault(); // Prevent the default link behavior
    document.getElementById("popupContainer1").style.display = "block";
});
document.getElementById("closeButton1").addEventListener("click", function(e) {
    document.getElementById("popupContainer1").style.display = "none";
});

// Second popup
document.getElementById("openPopupLink2").addEventListener("click", function(e) {
    e.preventDefault(); // Prevent the default link behavior
    document.getElementById("popupContainer2").style.display = "block";
});
document.getElementById("closeButton2").addEventListener("click", function(e) {
    document.getElementById("popupContainer2").style.display = "none";
});

// Third popup
document.getElementById("openPopupLink3").addEventListener("click", function(e) {
    e.preventDefault(); // Prevent the default link behavior
    document.getElementById("popupContainer3").style.display = "block";
});
document.getElementById("closeButton3").addEventListener("click", function(e) {
    document.getElementById("popupContainer3").style.display = "none";
});

// Fourth popup
document.getElementById("openPopupLink4").addEventListener("click", function(e) {
    e.preventDefault(); // Prevent the default link behavior
    document.getElementById("popupContainer4").style.display = "block";
});
document.getElementById("closeButton4").addEventListener("click", function(e) {
    document.getElementById("popupContainer4").style.display = "none";
});
