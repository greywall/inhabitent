(function ($) {

    $('.search-field').hide();

    $('.icon-search').click(function (event) {

        // Don't follow the link
        event.preventDefault();
        
        $('.search-field').show().focus();
    });

    $('.search-field').on('blur', function(){
        $('.search-field').hide();
    });

}) (jQuery);