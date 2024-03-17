<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package daykemit
 */

get_header();
?>

	<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Không tìm thấy trang</h1>
					<ul>
						<li><a href="index.html">Trang chủ</a></li>
						<li> / 404</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- START 404 -->
	<section class="zero_area section-padding">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="error_page">
						<img src="/wp-content/themes/daykemit/assets/images/all-img/404.svg" class="img-fluid" alt="404 error" />
						<h2>Ôi! Không tìm thấy trang</h2>
						<p>Hmm. Chúng tôi đang gặp khó khăn khi tìm trang web đó. Hãy thử lại sau hoặc Kiểm tra kết nối mạng của bạn.</p>
						<div class="home_btn">
							<a href="/" class="btn_one">Về trang chủ</a>
						</div>	
					</div>
			  </div><!--- END COL -->				  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END 404 -->	

<?php
get_footer();
