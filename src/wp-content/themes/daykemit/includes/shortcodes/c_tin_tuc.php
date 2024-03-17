<?php
add_shortcode('c_tin_tuc', function () {
    // Start output buffering
    ob_start();

    // Define the query arguments
    $args = array (
        'category_name' => 'tin-tuc', // Use your category slug here
        'posts_per_page' => 3, // Adjust the number of posts as needed
    );

    // Execute the query
    $query = new WP_Query($args);

    echo '<div class="row">';
    // Check if the query returns any posts
    if ($query->have_posts()) {
        // Loop through the posts
        while ($query->have_posts()) {
            $query->the_post();
            // Display the post data
            ?>

            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="single_blog">
                    <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <div class="content_box">
                        <span>
                            <?php echo get_the_date('F j, Y'); ?> | <a href="<?php the_permalink(); ?>">
                                <?php the_category(', '); ?>
                            </a>
                        </span>
                        <h2><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a></h2>
                        <a href="<?php the_permalink(); ?>" class="cta"><span>READ MORE</span></a>
                    </div>
                </div>
            </div>
            <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // No posts found
        echo '<p>No posts found.</p>';
    }
    echo '</div>';
    // Get the buffer contents and end buffering
    $output = ob_get_clean();

    return $output;
});
