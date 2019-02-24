$(window).scroll(function(){
    parallax();    
    var wScroll = $(window).scrollTop();
    var introPos = document.getElementById('intro').offsetTop;
    var describePos = document.getElementById('describe').offsetTop;
    
    if( wScroll > introPos - 100 )      
    {
        // document.getElementById('intro').style.webkitTransition = 'opacity 1s';
        // $('.intro-section').css('opacity','1');
        $('.intro-section').animate({
            opacity: 1,
        },1200);
    }

    if( wScroll > describePos - 100 )
    {
        $('.describe-section').css('background-color','#f62459');        
    }
    
})

function parallax()
{
    var scroll = $(window).scrollTop();
    $(".hero-section").css("background-position","center "+ (scroll * 0.5)+"px");
}