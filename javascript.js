$(function(){
    $('.page-header').data('size','big');
});
$(window).scroll(function(){
    if($(document).scrollTop() > 10)
    {
        if($('.page-header').data('size') == 'big')
        {
            $('.page-header').data('size','small');
            $('.page-header').css('padding-top', '8px');
            $('.top-nav').css('padding-top', '8px');
            $('.title').css('font-size', '24px');
            $('.sub-title').css('font-size', '15px'); 
            // $('.page-header .top-nav ul').css('margin-top', '17px');           
            $('.page-header').stop().animate({
                height:'60px'
            }, 0);

        }
    }
    else
    {
        if($('.page-header').data('size') == 'small')
        {
            $('.page-header').data('size','big');
            $('.page-header').css('padding-top', '40px');
            $('.top-nav').css('padding-top', '22px');
            $('.title').css('font-size', '34px');
            $('.sub-title').css('font-size', '21.45px');
            // $('.page-header .top-nav ul').css('margin-top', '0');
            $('.page-header').stop().animate({
                height:'138px'
            }, 0);
        }  
    }
});