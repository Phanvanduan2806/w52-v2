<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package daykemit
 */

get_header();
?>

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
				data-wow-offset="0">
				<h1>Chi tiết bài viết</h1>
				<?= do_shortcode('[c_breadcrumb]'); ?>
				<!-- <ul>
					<li><a href="/">Trang chủ</a></li>
					<li> / Single Blog</li>
				</ul> -->
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- START BLOG -->
<section class="blog-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-sm-12 col-xs-12">
				<div class="arti_single">
					<?php the_content(); ?>
					<div class="share_sp">
						<h4>Share</h4>
						<ul>
							<li><a href="#"><span class="ti-facebook"></span> Facebook</a></li>
							<li><a href="#"><span class="ti-twitter"></span> Twitter</a></li>
							<li><a href="#"><span class="ti-instagram"></span> Instagram</a></li>
							<li><a href="#"><span class="ti-linkedin"></span> Linkedin</a></li>
						</ul>
					</div>
				</div><!-- END ARTI SINGLE  -->
				<!-- <div class="author_part">
					<h3 class="blog_head_title">About the author</h3>
					<div class="single_author">
						<img src="/wp-content/themes/daykemit/assets/images/blog/author.jpg" alt="" />
						<h4>Marina Mojo</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel
							gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div>
				</div>
				<div class="comments_part">
					<h3 class="blog_head_title">Comments</h3>
					<div class="single_comment">
						<img src="/wp-content/themes/daykemit/assets/images/blog/c1.jpg" alt="" />
						<h4>Ayoub Fennouni</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel
							gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div>
					<div class="single_comment sc_left">
						<img src="/wp-content/themes/daykemit/assets/images/blog/c3.jpg" alt="" />
						<h4>Kader Bhai</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel
							gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div>
					<div class="single_comment single_comment_mbnone">
						<img src="/wp-content/themes/daykemit/assets/images/blog/c2.jpg" alt="" />
						<h4>Mark Linomi</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel
							gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
					</div>
				</div>
				<div class="comment_form">
					<h3 class="blog_head_title">Add a Comment</h3>
					<div class="contact comment-box">
						<form id="contact-form" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" id="first-name"
										placeholder="Name" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" id="first-email"
										placeholder="Email" required="required">
								</div>
								<div class="form-group col-md-12">
									<input type="text" name="subject" class="form-control" id="subject"
										placeholder="Subject" required="required">
								</div>
								<div class="form-group col-md-12">
									<textarea rows="6" name="message" class="form-control" id="description"
										placeholder="Your Message" required="required"></textarea>
								</div>
								<div class="col-md-12">
									<div class="actions">
										<button type="submit" value="Send message" name="submit" id="submitButton"
											class="btn btn_one" title="Submit Your Message!">Submit Comment</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> -->
			</div><!-- END COL-->
			<div class="col-lg-5 col-sm-12 col-xs-12">
				<div class="sidebar-post">
					<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
						<input type="search" class="form-control"
							placeholder="<?php echo esc_attr_x('Key word', 'placeholder') ?>"
							value="<?php echo get_search_query() ?>" name="s">
					</form>
				</div><!-- END SINGLE POST -->
				<div class="sidebar-post">
					<div class="newsletter-form">
						<h4>Subscribe for get updates</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi my
							business</p>
						<form action="#" class="subscribe">
							<input type="text" class="subscribe__input" placeholder="Email Address">
							<button type="button" class="sub_btn">Subscribe</button>
						</form>
					</div>
				</div><!-- END SINGLE POST -->
				<div class="sidebar-post">
					<div class="sidebar_title">
						<h4>Bài viết phổ biển</h4>
					</div>
					<?= do_shortcode('[c_post_sidebar]'); ?>
					<!-- <div class="single_popular">
						<a href="single_blog.html"><img src="/wp-content/themes/daykemit/assets/images/blog/blog-5.png"
								alt="" /></a>
						<h5><a href="single_blog.html">This is the only read you would need before sitting down to
								prepare</a></h5>
					</div> -->
				</div><!-- END SIDEBAR POST -->
				<div class="sidebar-post">
					<div class="sidebar_title">
						<h4>Theo dõi chúng tôi</h4>
					</div>
					<div class="single_social">
						<ul>
							<li>
								<div class="social_item b_facebook"><a href="#" title="facebook"><i
											class="fa fa-facebook"></i><span class="item-list">150K Likes</span></a>
								</div>
							</li>

							<li>
								<div class="social_item b_twitter"><a href="#" title="twitter"><i
											class="fa fa-twitter"></i><span class="item-list">138K Followers</span></a>
								</div>
							</li>

							<li>
								<div class="social_item b_youtube"><a href="#" title="youtube"><i
											class="fa fa-youtube"></i><span class="item-list">90K Subscribers</span></a>
								</div>
							</li>

							<li>
								<div class="social_item b_pinterest"><a href="#" title="pinterest"><i
											class="fa fa-pinterest"></i><span class="item-list">350K
											Followers</span></a></div>
							</li>

							<li>
								<div class="social_item b_tumblr"><a href="#" title="rss"><i
											class="fa fa-tumblr"></i><span class="item-list">901 Followers</span></a>
								</div>
							</li>

							<li>
								<div class="social_item b_rss"><a href="#" title="rss"><i class="fa fa-rss"></i><span
											class="item-list">411 Followers</span></a></div>
							</li>
						</ul>
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->
				<div class="sidebar-post">
					<div class="sidebar_title">
						<h4>Danh mục</h4>
					</div>
					<div class="single_category">
						<?php
						$categories = get_categories();
						echo '<ul>';
						foreach ($categories as $category) {
							// Bỏ qua danh mục 'Uncategorized'
							if ($category->name !== 'Uncategorized') {
								// Sử dụng count để lấy số lượng bài viết trong mỗi danh mục
								$category_link = get_category_link($category->term_id);
								echo '<li><a href="' . esc_url($post_link) . '">' . esc_html($category->name) . ' <sup>' . esc_html($category->count) . '</sup></a></li>';
							}
						}
						echo '</ul>';

						?>
						<!-- <ul>
							<li><a href="#">Education <sup>11</sup></a></li>
							<li><a href="#">Ai Content <sup>44</sup></a></li>
							<li><a href="#">New Course <sup>33</sup></a></li>
							<li><a href="#">Marketing <sup>14</sup></a></li>
							<li><a href="#">Software <sup>21</sup></a></li>
							<li><a href="#">Design <sup>01</sup></a></li>
						</ul> -->
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->
				<div class="sidebar-post">
					<div class="tag">
						<div class="sidebar_title">
							<h4>Popular Tag</h4>
						</div>
						<?php
						$tags = get_tags();
						$html = '';
						foreach ($tags as $tag) {
							$tag_link = get_tag_link($tag->term_id);

							$html .= '<a href="' . esc_url($tag_link) . '">' . esc_html($tag->name) . '</a>';
						}
						echo $html;

						?>
						<!-- <a href="#">Education</a> -->


					</div>
				</div>
				<div class="sidebar-post">
					<div class="sidebar_title">
						<h4>Ảnh nổi bật</h4>
					</div>
					<div class="sidebar-banner">
						<a href="#"><img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-370x250.jpg"
								class="img-fluid" alt="" /></a>
					</div><!-- END SOCIAL MEDIA POST -->
				</div><!-- END SIDEBAR POST -->
			</div><!--- END COL -->
		</div><!-- END ROW-->
	</div><!-- END CONTAINER-->
</section>
<!-- END BLOG -->

<?php
get_footer();
