<?php
add_shortcode('c_khoa_hoc', function () {
    ob_start();

    $args = array (
        'category_name' => 'khoa-hoc',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):
        ob_start();
        echo '<div class="row">';
        while ($query->have_posts()):
            $query->the_post();

            // Get data from the post
            $course_title = get_the_title();
            $course_link = get_permalink();
            $course_content = get_the_content();
            $course_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
            $categories = get_the_category();

            // Display course information
            ?>
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="course-slide">
                    <div class="course-img">
                        <img src="<?php echo esc_url($course_thumbnail); ?>" alt="<?php echo esc_attr($course_title); ?>">
                        <div class="course-date">
                            <!-- <span class="month">
                                <?php echo '$49'; ?>
                            </span> -->
                        </div>
                    </div>
                    <div class="course-content">
                        <?php
                        if (!empty ($categories)):
                            foreach ($categories as $category):
                                ?>
                                <a class="c_btn" href="<?php echo esc_url($course_link); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                                <?php
                            endforeach;
                        else:
                            echo esc_html__('Uncategorized', 'your-text-domain');
                        endif;
                        ?>
                        <h3><a href="<?php echo esc_url($course_link); ?>">
                                <?php echo esc_html($course_title); ?>
                            </a></h3>
                        <?php echo wp_kses_post($course_content); ?>
                    </div>
                </div><!-- END COURSE SLIDE -->
            </div>
            <?php
        endwhile;

        wp_reset_postdata();
        echo '</div>';
        echo ob_get_clean();

    else:
        echo esc_html__('No courses found.', 'your-text-domain');
    endif;
});
