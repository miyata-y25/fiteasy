<?php get_header(); ?>

<div class="sec-cont sec-cont--1090">
    <div class="inner">
        <h2 class="sec-cont__head"><span class="head-main"><?php the_title(); ?></span></h2>
        <div class="cms-area">
            <p class="alignR font-en bold"><?php echo get_post_time('Y.n.j D'); ?></p>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<a href="<?php echo home_url('/'); ?>news" class="btn btn--312 btn--back about-btn">一覧へ戻る</a>

<?php get_footer(); ?>
