(function ($) {
    //ページ内スクロール
    $('a[href*="#"]').on('click',function() {
        var target = $(this).attr('href');
        var position = $(target).offset().top;
        var $header     = $('.site-header');
        var fheaderH    = $header.innerHeight();
        $('body,html').animate({scrollTop:position - fheaderH}, 600, 'swing');
        return false;
    });
    //スマホグロナビボタン
    $('.menu-btn').on('click',function(){
        $(this).toggleClass('menu-btn--opened');
        $('body').toggleClass('opened');
        $('.header-cont').stop().fadeToggle();
    });

    $(window).on('load scroll', function(){
        var animTrigger = $('.anim');
        $(animTrigger).each(function(){
            var scroll = $(window).scrollTop(),
                elemTop = $(this).offset().top,
                windowHeight = $(window).height();

            if (scroll > elemTop - windowHeight + 200){
                $(this).addClass('is-animated');
            } else {
            }
        });
    });
    $(window).trigger('scroll');
    $('.is-animated').removeClass('is-animated');
})(jQuery);



$(function() {
    var h = $(window).height();
    $('#loader-bg').height(h).css('display','block');
    $('#loader').css('display','block');
});
    
$(window).on('load', function(){ //全ての読み込みが完了したら実行
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
    $('#loader-wrap').delay(600).fadeIn(100);
});
    
//10秒たったら強制的にロード画面を非表示
$(function(){
    setTimeout('stopload()',10000);
});

function stopload(){
    $('#loader-wrap').delay(900).fadeIn(100);
    $('#loader-bg').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
}



$(function($){
    var $header     = $('.site-header');
    var fheaderH    = $header.innerHeight();

    scrollCheck();
    $(window).scroll(scrollCheck);

    function scrollCheck(){
        var scrl = $(window).scrollTop();

        if (scrl > 0 ) {
            $header.addClass("cls");
        } else {
            $header.removeClass("cls");
        }
    }
});



$(function(){
	$('.-tablist input').on('click', function(){
		var index = $('.-tablist input').index(this);
		$('.-tabflex').eq(index).addClass('-act').siblings('div').removeClass('-act');
        $('body,html').animate({scrollTop:$('#-tablink').offset().top - $('.site-header').innerHeight()}, 400, 'swing');
	});
});


