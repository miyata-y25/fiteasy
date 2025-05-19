<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="utf-8" />
<title>
  <?php
    if (is_singular('wordpress_customize')) {
      echo 'フィットイージーサービスサイト'; wp_title('｜',true,'right');
    } else if ( is_home() || is_front_page() || is_page('home-test') ) {
      bloginfo('name');
    } else {
      wp_title('｜',true,'right'); bloginfo('name');
    }
  ?>
</title>
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="telephone=no" name="format-detection" />
<meta content="width=device-width,initial-scale=1" name="viewport" />
<meta content="" name="keywords" />
<meta content="" name="description" />
<meta content="" property="og:title" />
<meta content="" property="og:description" />
<meta content="" property="og:url" />
<meta content="" property="og:image" />
<meta content="website" property="og:type" />
<meta content="" property="og:site_name" />
<meta content="" property="og:site_url" />
<link href="<?php echo home_url('/'); ?>assets/css/modal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo home_url('/'); ?>assets/css/base.css" rel="stylesheet" type="text/css" />

<?php if ( is_home() || is_front_page() || is_page('home-test') ) { ?>
<link href="<?php echo home_url('/'); ?>assets/css/top.css" rel="stylesheet" type="text/css" />
<?php } ?>

<link href="<?php echo home_url('/'); ?>assets/css/particles2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo home_url('/'); ?>assets/css/canvas-bg-01.css" rel="stylesheet" type="text/css" />

<?php if ( !is_home() && !is_front_page() && !is_page('home-test') ) { ?>
<link href="<?php echo home_url('/'); ?>assets/css/page.css" rel="stylesheet" type="text/css" />
<?php } ?>

<?php if ( is_page(array( 'bouldering', 'bouldering_test' ) ) ) { ?>
<link href="<?php echo home_url('/'); ?>assets/css/bouldering.css" rel="stylesheet" type="text/css" />
<?php } ?>

<?php if ( is_page(array( 'fit-lounge', 'fit-lounge_test' ) ) ) { ?>
<link href="<?php echo home_url('/'); ?>assets/css/lounge.css" rel="stylesheet" type="text/css" />
<?php } ?>

<?php if ( is_page(array( 'o2-room', 'o2-room_test' ) ) ) { ?>
<link href="<?php echo home_url('/'); ?>assets/css/o2.css" rel="stylesheet" type="text/css" />
<?php } ?>

<link rel="icon" href="<?php echo home_url('/'); ?>cropped-fe-favicon-32x32.jpg" sizes="32x32" />
<link rel="icon" href="<?php echo home_url('/'); ?>cropped-fe-favicon-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo home_url('/'); ?>cropped-fe-favicon-180x180.jpg" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=M+PLUS+Rounded+1c:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<?php if ( is_page(array( 'self-esthe', 'self-esthe' ) ) ) { ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<?php } ?>

<?php if ( !is_page(array( 'bouldering', 'bouldering_test' ) ) ) { ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css"
integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
<?php } ?>

<?php if ( is_page(array( 'fit-aero', 'fit-aero_test' ) ) ) { ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css">
<?php } ?>

<?php if ( is_page(array( 'fit-ride', 'fit-ride_test' ) ) ) { ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css">
<?php } ?>

<?php wp_head(); ?>
</head>

<?php
// 親ポストのスラッグ取得
$parent = get_post( $post->post_parent );
$parent_slug = $parent ? $parent->post_name : '';
?>
<?php if( $parent_slug == 'services' ){ ?>
<body class="<?php echo $parent_slug ?>">
<?php } else { ?>
<body class="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
<?php } ?>

<?php if ( is_home() || is_front_page() || is_page('home-test') ) { ?>
<div id="loader-bg">
    <div id="loader">
        <img src="<?php echo home_url('/'); ?>assets/img/common/loading_img.png" alt="">
        <p>Now Loading...</p>
    </div>
</div>

<div id="loader-wrap">
<?php } ?>

<header class="site-header">
    <div class="site-header__inner">
        <?php if ( is_home() || is_front_page() || is_page('home-test') ) { ?>
        <h1 class="header-logo"><img src="<?php echo home_url('/'); ?>assets/img/common/logo.svg" alt=""></h1>
        <?php } else { ?>
		<p class="header-logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url('/'); ?>assets/img/common/logo.svg" alt=""></a></p>
        <?php } ?>
        <div class="header-btns">
            <a href="https://shops.fiteasy.jp/join/" class="btn btn--greW entry-btn">入会はこちら</a>
            <a href="https://join.fiteasy.jp/mypage/" target="_blank" class="mypage-btn">
                <img src="<?php echo home_url('/'); ?>assets/img/common/icon_mypage.svg" alt="">
                <span>MY PAGE</span>
            </a>
            <button type="button" class="menu-btn"><span><span></span><span></span><span></span></span>MENU</button>
        </div>
        <div class="header-cont">
            <nav class="header-nav">
                <ul class="g-nav">
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>advantages">FIT-EASYはこんなフィットネスクラブです</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>services">FIT-EASYのサービスコンテンツ</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>customer-testimonials">体験者の声</a></li>
					<li class="g-nav__list"><a href="https://shops.fiteasy.jp/">店舗検索（エリア・サービスから探す）</a></li>
                    <li class="g-nav__list"><a href="https://shops.fiteasy.jp/map_search">店舗検索（マップから探す）</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>news">お知らせ</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>faq">よくあるご質問</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>column">コラム</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>terms-of-service">利用規約</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>privacy">プライバシーポリシー</a></li>
					<li class="g-nav__list"><a href="<?php echo home_url('/'); ?>legal-notice">特定商取引法に基づく表記</a></li>
					<li class="g-nav__list"><a href="https://join.fiteasy.jp/mypage/" target="_blank">マイページ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="wrap">

<?php if ( !is_home() && !is_front_page() && !is_page('home-test') && $parent_slug != 'services' ) { ?>
<div class="sub-head sub-head--index">
    <div class="sub-head__inner">
        <h1 class="sub-main">
            <?php if ( is_page() ){ //固定ページの場合 ?>
            <span class="sub-main__en anim slideinL"><?php the_field('main_ttl') ?></span>
            <span class="sub-main__jp anim slideinR"><?php the_title(); ?></span>
            <?php } elseif ( is_post_type_archive('blog') || is_singular('blog') ){ //ブログの場合 ?>
            <span class="sub-main__en anim slideinL">COLUMN</span>
            <span class="sub-main__jp anim slideinR">コラム</span>
            <?php } elseif ( is_single() ){ //投稿｜記事ページの場合 ?>
            <span class="sub-main__en anim slideinL">NEWS</span>
            <span class="sub-main__jp anim slideinR">お知らせ</span>
            <?php } ?>
        </h1>
    </div>
</div>
<div class="sub-body sub-body--index">
<?php } ?>