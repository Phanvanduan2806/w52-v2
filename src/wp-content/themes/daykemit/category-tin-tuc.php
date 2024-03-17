<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sun20
 */
get_header();
$category = get_queried_object();
$category = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page');
$args = array(
    'cat' => $category->cat_ID,
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
);
$query = new WP_Query($args);

$pagination_links = paginate_links(
    array(
        'total' => $query->max_num_pages,
    )
);
$pagination_links = str_replace('Trang sau ', '', $pagination_links);
$pagination_links = str_replace(' Trang trước', '', $pagination_links);
$pagination_links = str_replace('Next ', '', $pagination_links);
$pagination_links = str_replace(' Previous', '', $pagination_links);

?>
<!-- START SECTION TOP -->
<section class="section-top"
    style="	background: url(/wp-content/themes/daykemit/assets/images/daykem-it/banner-1920x1200.jpg);">
    <div class="container">
        <div class="col-lg-10 offset-lg-1 text-center">
            <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                data-wow-offset="0">
                <h1>Tin tức</h1>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li> / Tin tức</li>
                </ul>
            </div><!-- //.HERO-TEXT -->
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- START BLOG -->
<section class="blog_area_bg section-padding">
    <div class="container">
        <?= do_shortcode('[c_tin_tuc]'); ?>
        <!-- <div class="row">		
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="single_blog">
                        <img src="assets/images/blog/1.png" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>August 25, 2024 | <a href="blog_single.html">Design</a></span>
                            <h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
                            <a href="blog_single.html" class="cta"><span>READ MORE</span>
                              <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                              </svg>
                            </a>							
                        </div>
                    </div>
                </div>
                            
            </div> -->
    </div><!-- END CONTAINER  -->
</section>
<!-- END BLOG -->

<?php
//get_sidebar();
get_footer();