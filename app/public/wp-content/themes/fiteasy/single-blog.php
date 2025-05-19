<?php get_header(); ?>

<div class="sec-cont sec-cont--1090">
    <div class="inner">
        <h2 class="sec-cont__head">
            <span class="head-main alignL"><?php the_title(); ?></span>
            <div class="blog-ttl-data">
                <?php
                    $terms = get_the_terms($post->ID, 'blog_cat');
                    foreach ( $terms as $term ) {
                        echo '<span class="blog-ttl-data__cate">' .$term->name. '</span>';
                    }
                ?>
                <time class="blog-ttl-data__time" datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y.n.j D'); ?></time>
            </div>
            <div class="blog-ttl-tag">
                <?php
                    $terms = get_the_terms($post->ID, 'blog_tag');
                    foreach ( $terms as $term ) {
                        echo '<span>#' .$term->name. '</span>';
                    }
                ?>
            </div>
        </h2>
        <h2 class="sec-cont__head"><span class="head-main"></span></h2>
        <div class="cms-area">
            <p class="alignR font-en bold"></p>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<a href="<?php echo home_url('/'); ?>blog" class="btn btn--312 btn--back about-btn">一覧へ戻る</a>

<?php get_footer(); ?>
