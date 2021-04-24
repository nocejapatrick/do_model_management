jQuery(document).ready(function($){
    var isOpenNav = false;

    $('#close-nav').click(function(){
        var siteMenuWidth = $('#site-header-menu').outerWidth();
        $('#site-header-menu').css('right',-siteMenuWidth);
    });

    $('#open-nav').click(function(){
        console.log("seomthing");
        $('#site-header-menu').css('right',0);
    })
})