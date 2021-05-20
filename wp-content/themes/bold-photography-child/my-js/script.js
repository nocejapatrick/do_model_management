jQuery(document).ready(function($){
    var isOpenNav = false;

    $('#close-nav').click(function(e){
        e.stopPropagation();
        $('#open-nav').css('opacity',1);
        var siteMenuWidth = $('#site-header-menu').outerWidth();
        var wrapperWidth = $('#primary-menu-wrapper .menu-inside-wrapper').outerWidth();
        $('#site-header-menu').css('right',-siteMenuWidth);
        $('#primary-menu-wrapper .menu-inside-wrapper').css('right',-wrapperWidth);
    });

    $('#open-nav').click(function(){
        $(this).css('opacity',0);
        $('#site-header-menu').css('right',0);
        $('#primary-menu-wrapper .menu-inside-wrapper').css('right',0);
    })
})