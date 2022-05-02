// Add your custom JS here


// all JS goes in this function to prevent the jquery error
// (function ($) {
//     $(document).ready(function($) {

//     });
// }) ( jQuery );



// RLF - for ScrollMagic - init controller
var controller = new ScrollMagic.Controller();



(function ($) {
    $(document).ready(function($) {
        
        $('article.card').each(function() {
            var card = $(this);
            var id = card.attr('id');
        // build scene      
        new ScrollMagic.Scene({
            triggerElement: "#" + id,
            triggerHook: 0.7, // show, when scrolled 30% into view
            offset: 50 // move trigger to center of element
        })
        .setClassToggle("#" + id, "visible") // add class to reveal
        .addTo(controller);

    });  


// loads the call to action modal 3 seconds after page loads)
        setTimeout(function(){
            $('#ctaModal').modal('show');
        }, 3000);







    });
}) ( jQuery );