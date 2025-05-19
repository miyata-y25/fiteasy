<?php
/*
 *
 * Template Name: ブログ一覧
 *  
 */
?>
<?php get_header(); ?>

<div class="sec-cont sec-cont--1090">
    <div class="inner">
        <div class="news-list grid grid--3">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $day  = 7; // 表示させる期間の日数
                $today = date_i18n('U');
                $post_day = get_the_time('U');
                $term = date('U',($today - $post_day)) / 86400;
                $args = array(
                    'post_type' => 'blog',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                  while ($my_query->have_posts()) : $my_query->the_post();
            ?>
            <div class="news-list__list grid__list">
                <a href="<?php the_permalink(); ?>">
                    <figure class="news-thum">
                      <?php if ( has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'large');
                        echo '<img src="' . $thumb_url[0] . '" alt="" class="img-fit">';
                        } else {
                          echo '<img src="' . home_url() . '/assets/img/top/blog_thum.png" alt="" class="img-fit">';
                      } ?>
                    </figure>
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="font-en"><?php echo get_post_time('Y.n.j D'); ?><?php if( $day > $term ){ echo '<span class="new-icon">New</span>'; } ?></time>
                    <p class="news-txt"><?php the_title(); ?></p>
                </a>
            </div>
            <?php endwhile; endif;
                wp_reset_postdata();
            ?>
        </div>
        <?php
            if(function_exists('wp_pagenavi')) {
                wp_pagenavi(array('query' => $my_query));
            }
        ?>
    </div>
</div>


<?php get_footer(); ?>
