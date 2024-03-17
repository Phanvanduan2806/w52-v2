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
                <h1>Tài liệu</h1>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li> / Tài liệu</li>
                </ul>
            </div><!-- //.HERO-TEXT -->
        </div><!--- END COL -->
    </div><!--- END CONTAINER -->
</section>

<!-- END SECTION TOP -->

<div class="best-cpurse section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Tài liệu </h2>
            <p>Các <span><u>khoá học</u></span> hàng đầu</p>
        </div>
        <?= do_shortcode('[c_khoa_hoc]'); ?>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="course-slide">
                    <div class="course-img">
                        <img src="/wp-content/themes/daykemit/assets/images/all-img/c1.png" alt="">
                        <div class="course-date">
                            <span class="month">$49</span>
                        </div>
                    </div>
                    <div class="course-content"><a class="c_btn" href="/">Arts & Design</a>
                        <h3><a href="single_course.html">Basic Fundamentals of Interior & Graphics Design</a></h3>
                        <span><i class="fa fa-calendar"></i>3 Lessons</span>
                        <span><i class="fa fa-clock-o"></i>3h 45m</span>
                        <span><i class="fa fa-star"></i>4.9</span>
                        <span><i class="fa fa-table"></i><strong>30 Seats Available</strong></span>

                    </div>
                </div>
            </div>
 
        </div> -->
    </div><!--END CONTAINER -->
</div>

<?php
//get_sidebar();
get_footer();