// Add your custom JS here

// all your JS goes in this function to prevent the jquery error
// (function ($) {
//     $(document).ready(function($) {

//     });
// }) ( jQuery );





(function ($) {
    $(document).ready(function($) {
// loads the cookies modal 3 seconds after page loads)
        setTimeout(function(){
            $('#ctaModal').modal('show');
        }, 3000);







    });
}) ( jQuery );