document.getElementById("enquiryLink").addEventListener("click", function() {
    document.getElementById("enquiryPopup").style.display = "block";
});

function closeEnquiryForm1() {
    document.getElementById("enquiryPopup").style.display = "none";
}




document.getElementById("enquiryLink1").addEventListener("click", function() {
    document.getElementById("enquiryPopup1").style.display = "block";
});

function closeEnquiryForm() { // Use a different function name for the second pop-up
    document.getElementById("enquiryPopup1").style.display = "none";
}
