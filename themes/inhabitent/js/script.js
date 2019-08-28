(function ($) {

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
    $('.page-home .site-logo').removeClass('site-logo-dark');
    $('.page-about .site-logo').removeClass('site-logo-dark');

    $('.page-home .main-navigation').addClass('main-navigation-dark');



}) (jQuery);

