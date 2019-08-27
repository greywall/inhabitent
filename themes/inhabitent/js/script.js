(function ($) {

    // $('.search-field').hide();

    const $searchField = $('.site-header .search-field');
    const $searchIcon = $('.icon-search');

    $searchIcon.click(function (event) {

        // Don't follow the link
        event.preventDefault();
        
        $searchField.addClass('search-field-active').focus();
    });

    $searchField.on('blur', function(){
        $(this).removeClass('search-field-active');
    });

}) (jQuery);

