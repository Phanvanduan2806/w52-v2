<?php
add_shortcode('c_list_khoa_hoc', function () {
    ob_start();
    
    $parent_term = get_term_by('slug', 'khoa-hoc', 'category');

    if (!$parent_term) {
        return 'Category không tồn tại.';
    }

    $terms = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'parent' => $parent_term->term_id,
    ));
    $arr_hinh_anh = array(
        'design' => '/wp-content/themes/daykemit/assets/images/icon/ct3.svg',
        'coding' => '/wp-content/uploads/2024/03/coding.jpg',
        'marketing' => '/wp-content/uploads/2024/03/marketing.jpg',
        // Thêm các slug và hình ảnh tương ứng ở đây
    );

    echo '<div class="row">';
    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            $term_count = $term->count;
            $img_url = isset($arr_hinh_anh[$term->slug]) ? $arr_hinh_anh[$term->slug] : '/wp-content/themes/daykemit/assets/images/icon/ct1.svg';
            ?>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_one">
                    <img src="<?php echo $img_url; ?>" alt="" />
                    <h2><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></h2>
                    <span><?php echo $term_count; ?> Khóa học</span>
                </div>
            </div>
            <?php
        }
    } else {
        echo 'Không có category con nào.';
    }
    echo '</div>';

    return ob_get_clean();
});
