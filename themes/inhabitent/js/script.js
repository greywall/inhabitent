(function ($) {


    // TODO remove the body append
    $('body').append('');
    
    $('.search-form').click(function (event) {

        // Don't follow the link
        event.preventDefault();
    
        // Log the clicked element in the console
        console.log(event.target);
    
    });



}) (jQuery);