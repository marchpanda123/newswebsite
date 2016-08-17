$(function() {
    $('a[href="#toggle-search"], .news-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
        event.preventDefault();
        $('.news-search .input-group > input').val('');
        $('.news-search').toggleClass('open');
        $('a[href="#toggle-search"]').closest('li').toggleClass('active');

        if ($('.news-search').hasClass('open')) {
            setTimeout(function() {
                $('.news-search .form-control').focus();
            }, 100);
        }
    });

    $(document).on('keyup', function(event) {
        if (event.which == 27 && $('.news-search').hasClass('open')) {
            $('a[href="#toggle-search"]').trigger('click');
        }
    });

});


$(function(){
  $(".top-text-xcode").mouseenter(function(event) {
        $(".top-qrcode-img").css('display','block');
        $(".top-qrcode").css('z-index','10');

    });
  
  $(".top-text-xcode").mouseleave(function(event) {
        $(".top-qrcode-img").css('display','none');
        $(".top-qrcode").css('z-index','-1');
    });
  
});


//headerbar
$(function(){
        $(".bdNavbtnbar").click(function(event) {
            /* Act on the event */
            $(".hdNavbar").slideToggle('fast', function() {
                'display','block'
            });
        });
});




jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $("div").scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) { 
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('div').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });
});

$(function(){
    $(".changelarge").click(function(event){
        $("#article-text").css("font-size","20px");
    });
});

$(function(){
    $(".changemiddle").click(function(event){
        $("#article-text").css("font-size","16px");
    });
});

$(function(){
    $(".changesmall").click(function(event){
        $("#article-text").css("font-size","14px");
    });
});


/*push*/
$(document).ready(function(){
    //To switch directions up/down and left/right just place a "-" in front of the top/left attribute
    //Vertical Sliding
    //Caption Sliding (Partially Hidden to Visible)
    $('.boxgrid.caption').hover(function(){
        $(".cover", this).stop().animate({top:'120px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
    });
});



/*duoshuo*/
