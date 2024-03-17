<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package daykemit
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
				<h1>Tìm kiếm</h1>
				<ul>
					<li><a href="index.html">Trang chủ</a></li>
					<li> / Tìm kiếm</li>
				</ul>
			</div>
			<!-- <form action="<?php echo home_url('/'); ?>" class="banner_subs">
                        <input type="text" class="form-control home_si" placeholder="Tìm kiếm khoá học của bạn" name="s"
                            required="required">
                        <button type="submit" class="subscribe__btn">Tìm kiếm <i
                                class="fa fa-paper-plane-o"></i></button>
                    </form> -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- START BLOG -->
<section class="blog_area_bg section-padding">
	<div class="container">
		<div class="row">
			<?php if (have_posts()): ?>
				<h2 class="pb-3">
					<?php printf(__('Search Results for: %s', 'techno'), '<span>' . get_search_query() . '</span>'); ?>
				</h2>

				<?php while (have_posts()):
					the_post(); ?>
					<!-- Kiểm tra nếu bài viết có hình ảnh nổi bật và định dạng là bài viết thông thường -->
					<?php if (has_post_thumbnail() && 'post' == get_post_type()): ?>

						<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
							data-wow-offset="0">
							<div class="single_blog">
								<?php the_post_thumbnail('full', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
								<!-- <img src="assets/images/blog/1.png" class="img-fluid" alt="image" /> -->
								<div class="content_box">
									<span>
										<?php echo get_the_date(); ?> | <a href="<?php the_permalink(); ?>">
											<?php the_category(', '); ?>
										</a>
									</span>
									<h2><a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a></h2>
									<a href="<?php the_permalink(); ?>" class="cta"><span>READ MORE</span>
										<svg width="13px" height="10px" viewBox="0 0 13 10">
											<path d="M1,5 L11,5"></path>
											<polyline points="8 1 12 5 8 9"></polyline>
										</svg>
									</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else: ?>
				<h2>
					<?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'techno'); ?>
				</h2>
			<?php endif; ?>
		</div>
	</div><!-- END CONTAINER  -->
</section>
<!-- END BLOG -->

<?php
get_footer();
