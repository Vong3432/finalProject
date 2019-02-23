$(window).scroll(function(){
    parallax();    
})

function parallax()
{
    var scroll = $(window).scrollTop();
    $(".hero-section").css("background-position","center "+ (scroll * 0.5)+"px");
}