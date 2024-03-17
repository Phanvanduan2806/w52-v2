<?php
add_shortcode('c_about_us', function () {
    ob_start();
    $query = new WP_Query(
        array (
            'category_name' => 've-chung-toi', // Thay thế 've-chung-toi' bằng slug chính xác của danh mục bạn muốn
            'posts_per_page' => 3, // Số lượng bài viết hiển thị
        )
    );

    if ($query->have_posts()) {
        echo '<div class="row">';

        while ($query->have_posts()) {
            $query->the_post();
            echo '<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">';
            echo '<div class="single_tp">';
            echo '<h3>' . get_the_title() . '</h3>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_permalink() . '" class="cta"><span>Xem thêm</span><svg width="13px" height="10px" viewBox="0 0 13 10"><path d="M1,5 L11,5"></path><polyline points="8 1 12 5 8 9"></polyline></svg></a>';
            echo '</div>';
            echo '</div><!-- END COL -->';
        }

        echo '</div><!-- END ROW -->';
    } else {
        echo 'Không có bài viết nào trong danh mục này.';
    }

    wp_reset_postdata();
    return ob_get_clean();
});
