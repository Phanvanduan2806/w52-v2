<?php
add_shortcode('c_post_sidebar', function () {
    ob_start();

    $args = array (
        'post_type' => 'post',
        'posts_per_page' => 5,
        // Thêm tiêu chí sắp xếp tùy chỉnh của bạn ở đây
    );
    $query = new WP_Query($args);
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="single_popular">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" /></a>
                <h5><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a></h5>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;

    return ob_get_clean();
});
