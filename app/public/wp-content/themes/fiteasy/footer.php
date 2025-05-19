<?php if ( !is_home() && !is_front_page() && !is_page('home-test') ) { ?>
</div><!-- /.sub-body -->
<?php } ?>
</div><!-- /.wrap -->

<div class="btm-bnr anim slideinB">
    <div class="btm-bnr__inner">
        <a href="https://page.line.me/fit-easy" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/btm_bnr.png" alt=""></a>
        <p class="btm-bnr__txt">フィットイージーのLINE公式アカウントに登録して最新の情報を受け取る</p>
    </div>
</div>

<div class="btm-logo anim slideinB">
    <div class="btm-logo__inner">
        <ul class="btm-logo__ul">
            <li class="logo02"><img src="<?php echo home_url('/'); ?>assets/img/common/logo02.png" alt=""></li>
            <li class="logo01"><img src="<?php echo home_url('/'); ?>assets/img/common/logo01.png" alt=""></li>
            <!--<li><img src="<?php echo home_url('/'); ?>assets/img/common/logo03.png" alt=""></li>-->
        </ul>
        <p class="btm-logo__txt">FIT-EASYは日本のスポーツを応援しています！</p>
    </div>
</div>

<?php if ( is_page('corporate-membership') ){ ?>
<div class="circle_container">
    <a href="#form-area">
        <img src="<?php echo home_url('/'); ?>assets/img/common/fixed_txt3.svg" class="text_circle">
        <img src="<?php echo home_url('/'); ?>assets/img/common/fixed_icon.svg" class="icon_img">
    </a>
</div>
<?php } else { ?>
<div class="circle_container">
    <a href="https://shops.fiteasy.jp/join/">
        <img src="<?php echo home_url('/'); ?>assets/img/common/fixed_txt.svg" class="text_circle">
        <img src="<?php echo home_url('/'); ?>assets/img/common/fixed_icon.svg" class="icon_img">
    </a>
</div>
<?php } ?>

<!-- count particles -->
<div class="count-particles">
    <span class="js-count-particles">--</span> particles
</div>
  
<!-- particles.js container -->
<div id="particles-js"></div>

<footer class="site-footer anim fadein">
  <div class="inner">
	  <p class="footer-logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_wt.svg" alt=""></a></p>
    <ul class="footer-sns">
        <li><a href="https://www.instagram.com/fiteasy.jp/" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_in.svg" alt=""></a></li>
        <li><a href="https://www.youtube.com/@fit-easyofficial4129" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_yt.svg" alt=""></a></li>
        <li><a href="https://www.tiktok.com/@fiteasy.jp" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_tt.svg" alt=""></a></li>
        <li><a href="https://page.line.me/fit-easy" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_ln.svg" alt=""></a></li>
        <li><a href="https://www.facebook.com/fiteasy.24/" target="_blank"><img src="<?php echo home_url('/'); ?>assets/img/common/logo_fb.svg" alt=""></a></li>
    </ul>
    <ul class="footer-link">
        <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
        <li><a href="<?php echo home_url('/'); ?>advantages">FIT-EASYはこんなフィットネスクラブです</a></li>
        <li><a href="<?php echo home_url('/'); ?>services">FIT-EASYのサービスコンテンツ</a></li>
        <li><a href="<?php echo home_url('/'); ?>customer-testimonials">体験者の声</a></li>
		<li><a href="https://join.fiteasy.jp/mypage/" target="_blank">マイページ</a></li>
    </ul>
    <ul class="footer-link">
		<li>店舗検索 > <a href="https://shops.fiteasy.jp/">（エリア・サービスから探す）</a>・<a href="https://shops.fiteasy.jp/map_search/">（マップから探す）</a></li>
		<li><a href="<?php echo home_url('/'); ?>news">お知らせ</a></li>
        <li><a href="<?php echo home_url('/'); ?>faq">よくあるご質問</a></li>
		<li><a href="<?php echo home_url('/'); ?>column">コラム</a></li>
		<li><a href="https://fiteasy.co.jp/" target=”_blank”>コーポレートサイト</a></li>
        <!--<li><a href="https://recruit.fiteasy.co.jp/" target="_blank">採用情報</a></li>-->
    </ul>
	<ul class="footer-link">
		<li><a href="<?php echo home_url('/'); ?>corporate-membership">法人契約のご案内</a></li>
        <li><a href="<?php echo home_url('/'); ?>terms-of-service">利用規約</a></li>
		<li><a href="<?php echo home_url('/'); ?>privacy">プライバシーポリシー</a></li>
        <li><a href="<?php echo home_url('/'); ?>legal-notice">特定商取引法に基づく表記</a></li>
    </ul>
    <p class="copyright">
        Copyright © フィットイージー ［FIT-EASY］<br>
        アミューズメントフィットネスクラブ<br>
        All rights Reserved.
    </p>
  </div>
</footer>

<?php if ( is_home() || is_front_page() || is_page('home-test') ) { ?>
</div><!-- /#loader-wrap -->
<?php } ?>

  
<script src="<?php echo home_url('/'); ?>assets/js/lib/jquery.min.js"></script>

<?php if ( is_page(array( 'fit-aero', 'fit-aero_test' ) ) ) { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
<script>
jQuery(function($) {
    $(".iziModal_iframe,.iziModal_iframe2,.iziModal_iframe3,.iziModal_iframe4,.iziModal_iframe5,.iziModal_iframe6,.iziModal_iframe7,.iziModal_iframe8").iziModal({
      iframe: true,
      fullscreen:true,
      title: "FE STUDIO",
      loop: true,
    });
  })
</script>
<?php } ?>

<?php if ( is_page(array( 'fit-golf', 'fit-golf_test' ) ) ) { ?>
<script>
jQuery(function () {
  jQuery('.faq-accordion__header').click(function () {
    jQuery(this).next('.faq-accordion__inner').slideToggle();
    jQuery(this).toggleClass("open");
  });
});

jQuery(window).scroll(function () {
  if (window.matchMedia && window.matchMedia('(max-device-width: 640px)').matches) {
    if (jQuery(window).scrollTop() > 50) {
      jQuery('.floating__button').addClass('fixed');
    } else {
      jQuery('.floating__button').removeClass('fixed');
    }
  } else {
    if (jQuery(window).scrollTop() > 100) {
      jQuery('.floating__button').addClass('fixed');
    } else {
      jQuery('.floating__button').removeClass('fixed');
    }
  }
});
</script>
<?php } ?>

<?php if ( is_page(array( 'fit-ride', 'fit-ride_test' ) ) ) { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
<script>
jQuery(function($) {
    $(".iziModal_iframe,.iziModal_iframe2,.iziModal_iframe3,.iziModal_iframe4,.iziModal_iframe5,.iziModal_iframe6,.iziModal_iframe7,.iziModal_iframe8").iziModal({
      iframe: true,
      fullscreen:true,
      title: "FE STUDIO",
      loop: true,
    });
  })
</script>
<?php } ?>

<?php if ( is_page(array( 'self-esthe', 'self-esthe' ) ) ) { ?>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $('.slider-esthe').slick({
    centerMode: true,
    centerPadding: '20%',
    slidesToShow: 1,
    variableWidth: true,
    adaptiveHeight: true,
    prevArrow: '<div class="slide-arrow prev-arrow"><img src="../../assets/img/services/self-esthe/arrow-prev.svg">',
    nextArrow: '<div class="slide-arrow next-arrow"><img src="../../assets/img/services/self-esthe/arrow-next.svg">',
  });
</script>
<?php } ?>

<script src="<?php echo home_url('/'); ?>assets/js/common.js"></script>


<!-- scripts -->
<script src="<?php echo home_url('/'); ?>assets/js/particles.min.js"></script>
<script src="<?php echo home_url('/'); ?>assets/js/app2.js"></script>

<!-- stats.js -->
<script src="<?php echo home_url('/'); ?>assets/js/lib/stats.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

<?php if ( is_home() || is_front_page() || is_page('home-test') ) { ?>
<link rel="stylesheet" href="<?php echo home_url('/'); ?>assets/js/plugin/swiper/swiper.min.css">
<script src="<?php echo home_url('/'); ?>assets/js/plugin/swiper/swiper.min.js"></script>
<script>
var mySwiperMain = new Swiper ('.main-slider .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '1', // 何枚のスライドを表示するか
    loopedSlides: null, // ループの後に、いくつのクローンを用意するか。
    spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'fade', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    // autoplay: true 　のみなら既定値での自動再生
    autoplay: {
        delay: 5000, // スライドが切り替わるまでの表示時間(ミリ秒)
        stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
        disableOnInteraction: false // ユーザーのスワイプ操作を検出したら自動再生を中止するか
    },

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.main-slider .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.main-slider .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    // ページネーションを表示する場合
    pagination: {
        el: '.main-slider .swiper-pagination',
        clickable: true
    },
});
var mySwiperSupport = new Swiper ('.news-slider .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 600, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '2', // 何枚のスライドを表示するか
    loopedSlides: null, // ループの後に、いくつのクローンを用意するか。
    spaceBetween: 30, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.news-slider .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.news-slider .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    // ページネーションを表示する場合
    pagination: {
        el: '.news-slider .swiper-pagination',
        clickable: true
    },
    breakpoints: {
        768: {
            slidesPerView: 1
        }
    },
});
var mySwiperSupport = new Swiper ('.open-slider .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 600, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    loopedSlides: null, // ループの後に、いくつのクローンを用意するか。
    spaceBetween: 30, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
    centeredSlides: true,

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.open-slider .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.open-slider .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    // ページネーションを表示する場合
    pagination: {
        el: '.open-slider .swiper-pagination',
        clickable: true
    },
    breakpoints: {
        768: {
            slidesPerView: 1
        }
    },
});
</script>
<?php } ?>
<?php if ( is_page('services') ){ //固定ページ｜サービスの場合 ?>
<script>
$(function(){
  $('.service-tab .grid__list').on('click', function(){
    let index = $('.service-tab .grid__list').index(this);

    $('.service-tab .grid__list').removeClass('cur');
    $(this).addClass('cur');
    $('.tab-area').removeClass('cur');
    $('.tab-area').eq(index).addClass('cur');
  });
});
</script>
<?php } ?>
<?php if ( is_page('corporate-membership') ){ ?>
<script src="<?php echo home_url('/'); ?>assets/corporate-membership/js/plugin/modaal.min.js"></script>

<script>
$(".contents01").modaal({
    content_source: '#contents01',
    hide_close: 'true'
});
$(".contents02").modaal({
    content_source: '#contents02',
    hide_close: 'true'
});
$(".contents03").modaal({
    content_source: '#contents03',
    hide_close: 'true'
});
$(".contents04").modaal({
    content_source: '#contents04',
    hide_close: 'true'
});
$(".contents05").modaal({
    content_source: '#contents05',
    hide_close: 'true'
});
$(".contents06").modaal({
    content_source: '#contents06',
    hide_close: 'true'
});
$(".contents07").modaal({
    content_source: '#contents07',
    hide_close: 'true'
});
$(".contents08").modaal({
    content_source: '#contents08',
    hide_close: 'true'
});
$(".contents09").modaal({
    content_source: '#contents09',
    hide_close: 'true'
});
$(".contents10").modaal({
    content_source: '#contents10',
    hide_close: 'true'
});
$(".contents11").modaal({
    content_source: '#contents11',
    hide_close: 'true'
});
$(".contents12").modaal({
    content_source: '#contents12',
    hide_close: 'true'
});
$(".contents13").modaal({
    content_source: '#contents13',
    hide_close: 'true'
});
$(".contents14").modaal({
    content_source: '#contents14',
    hide_close: 'true'
});
$('.js-modaal-close').on('click', function () {
    $('.contents01').modaal('close');
    $('.contents02').modaal('close');
    $('.contents03').modaal('close');
    $('.contents04').modaal('close');
    $('.contents05').modaal('close');
    $('.contents06').modaal('close');
    $('.contents07').modaal('close');
    $('.contents08').modaal('close');
    $('.contents09').modaal('close');
    $('.contents10').modaal('close');
    $('.contents11').modaal('close');
    $('.contents12').modaal('close');
    $('.contents13').modaal('close');
    $('.contents14').modaal('close');
});
</script>

<script>
$(".amusement01").modaal({
    content_source: '#amusement01',
    hide_close: 'true'
});
$(".amusement02").modaal({
    content_source: '#amusement02',
    hide_close: 'true'
});
$(".amusement03").modaal({
    content_source: '#amusement03',
    hide_close: 'true'
});
$(".amusement04").modaal({
    content_source: '#amusement04',
    hide_close: 'true'
});
$(".amusement05").modaal({
    content_source: '#amusement05',
    hide_close: 'true'
});
$(".amusement06").modaal({
    content_source: '#amusement06',
    hide_close: 'true'
});
$(".amusement07").modaal({
    content_source: '#amusement07',
    hide_close: 'true'
});
$(".amusement08").modaal({
    content_source: '#amusement08',
    hide_close: 'true'
});
$(".amusement09").modaal({
    content_source: '#amusement09',
    hide_close: 'true'
});
$(".amusement10").modaal({
    content_source: '#amusement10',
    hide_close: 'true'
});
$(".amusement11").modaal({
    content_source: '#amusement11',
    hide_close: 'true'
});
$(".amusement12").modaal({
    content_source: '#amusement12',
    hide_close: 'true'
});
$(".amusement13").modaal({
    content_source: '#amusement13',
    hide_close: 'true'
});
$(".amusement14").modaal({
    content_source: '#amusement14',
    hide_close: 'true'
});
$(".amusement15").modaal({
    content_source: '#amusement15',
    hide_close: 'true'
});
$(".amusement16").modaal({
    content_source: '#amusement16',
    hide_close: 'true'
});
$(".amusement17").modaal({
    content_source: '#amusement17',
    hide_close: 'true'
});
$(".amusement18").modaal({
    content_source: '#amusement18',
    hide_close: 'true'
});
$('.js-modaal-close').on('click', function () {
    $('.amusement01').modaal('close');
    $('.amusement02').modaal('close');
    $('.amusement03').modaal('close');
    $('.amusement04').modaal('close');
    $('.amusement05').modaal('close');
    $('.amusement06').modaal('close');
    $('.amusement07').modaal('close');
    $('.amusement08').modaal('close');
    $('.amusement09').modaal('close');
    $('.amusement10').modaal('close');
    $('.amusement11').modaal('close');
    $('.amusement12').modaal('close');
    $('.amusement13').modaal('close');
    $('.amusement14').modaal('close');
    $('.amusement15').modaal('close');
    $('.amusement16').modaal('close');
    $('.amusement17').modaal('close');
    $('.amusement18').modaal('close');
});
</script>

<link rel="stylesheet" href="<?php echo home_url('/'); ?>assets/js/plugin/swiper/swiper.min.css">
<script src="<?php echo home_url('/'); ?>assets/corporate-membership/js/plugin/swiper/swiper.min.js"></script>
<script>
var mySwiperMain = new Swiper ('.main-slider .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 1500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: 'auto', // 何枚のスライドを表示するか
    allowTouchMove: false,
    loopedSlides: null, // ループの後に、いくつのクローンを用意するか。
    spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'fade', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    // autoplay: true 　のみなら既定値での自動再生
    autoplay: {
        delay: 6000, // スライドが切り替わるまでの表示時間(ミリ秒)
        stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
        disableOnInteraction: false // ユーザーのスワイプ操作を検出したら自動再生を中止するか
    },
    // ページネーションを表示する場合
    pagination: {
        el: '.top-main .swiper-pagination',
        clickable: true
    },
});
</script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(() => {
  $(".sec.--03 .sec__ul").slick({
    infinite: true, // ループの有効化
    dots: true, // ドットインジケーターの表示
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    centerMode: true,
    centerPadding: '10%',
    arrows: false,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 960, // 399px以下のサイズに適用
        settings: {
            slidesToShow: 2,
        },
        breakpoint: 640, // 399px以下のサイズに適用
        settings: {
            slidesToShow: 1,
        },
      },
    ],
  });
  $(".sec.--03 .sec__ul").on('swipe', function(slick, direction) {
    return false;
  });
});
</script>
<script>
$(function(){
  $('.aco-btn').on('click',function(){
    $(this).toggleClass('active');
    $('.aco-body').slideToggle();
  });
});
</script>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>