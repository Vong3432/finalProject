$(window).scroll(function(){
    parallax();    
    var wScroll = $(window).scrollTop();
    var introPos = document.getElementById('intro').offsetTop;

    if( wScroll > introPos - 100 )      
    {
        // document.getElementById('intro').style.webkitTransition = 'opacity 1s';
        $('.intro-section').css('opacity','1');
    }
    
})

function parallax()
{
    var scroll = $(window).scrollTop();
    $(".hero-section").css("background-position","center "+ (scroll * 0.5)+"px");
}