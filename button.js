$(document).ready(function () {
    $(".invisible-content").hide();
    
    $(document).on('click', "#btn-rd", function () {
        var moreLessButton = $(this).text() === 'Read More' ? 'Read Less' : 'Read More';
        $(this).text(moreLessButton);
        
        $(this).siblings(".invisible-content").toggle();
    });
});