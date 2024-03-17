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
 * @package daykemit
 */

get_header();
?>

<!-- START SECTION TOP -->
<section class="section-top"
	style="	background: url(/wp-content/themes/daykemit/assets/images/daykem-it/banner-1920x1200.jpg);">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
				data-wow-offset="0">
				<h1>About Us</h1>
				<?= do_shortcode('[c_breadcrumb]'); ?>
				<!-- <ul>
					<li><a href="index.html">Home</a></li>
					<li> / About</li>
				</ul> -->
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>
<!-- END SECTION TOP -->

<!-- START TOP PROMO FEATURES -->
<section class="tp_feature section-padding">
	<div class="container-fluid">
		<?= do_shortcode('[c_about_us]'); ?>
		<!-- <div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
				data-wow-offset="0">
				<div class="single_tp">
					<h3>Quality Education</h3>
					<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
						ut labore. </p>
					<a href="#" class="cta"><span>Explore</span>
						<svg width="13px" height="10px" viewBox="0 0 13 10">
							<path d="M1,5 L11,5"></path>
							<polyline points="8 1 12 5 8 9"></polyline>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
				data-wow-offset="0">
				<div class="single_tp">
					<h3>Experienced Teachers</h3>
					<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
						ut labore.</p>
					<a href="#" class="cta"><span>Explore</span>
						<svg width="13px" height="10px" viewBox="0 0 13 10">
							<path d="M1,5 L11,5"></path>
							<polyline points="8 1 12 5 8 9"></polyline>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
				data-wow-offset="0">
				<div class="single_tp">
					<h3>Life Time Support</h3>
					<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
						ut labore.</p>
					<a href="#" class="cta"><span>Explore</span>
						<svg width="13px" height="10px" viewBox="0 0 13 10">
							<path d="M1,5 L11,5"></path>
							<polyline points="8 1 12 5 8 9"></polyline>
						</svg>
					</a>
				</div>
			</div>
		</div> -->
	</div><!-- END CONTAINER -->
</section>
<!-- END TOP PROMO FEATURES -->

<!-- START ABOUT US HOME ONE -->
<section class="ab_one section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
				data-wow-offset="0">
				<div class="ab_img">
					<img src="/wp-content/themes/daykemit/assets/images/daykem-it/banner-1024-1084.jpg" class="img-fluid"
						alt="image">
				</div>
			</div><!--- END COL -->
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
				data-wow-offset="0">
				<div class="ab_content">
					<h2>Learn new skills to go <u><span>ahead for your </span></u> career.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
						ut labore et simply. From blogs to emails to ad copies, auto-generate catchy, original, and
						high-converting copies in popular tones languages.From blogs to emails to ad copies,
						auto-generate catchy, original and high-converting copies.</p>
					<p><strong>Auto-generate catchy original and high-converting copies in popular tones languages. From
							blogs to emails to ad copies auto-generate catchy</strong></p>
					<a class="btn_one" href="about.html">Read More us</a>
				</div>
			</div><!--- END COL -->
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END ABOUT US HOME ONE -->

<!-- START WHY CHOOSE US-->
<?= do_shortcode('[cb_marketing_content]'); ?>

<!-- END WHY CHOOSE US -->
<?= do_shortcode('[cb_counts]'); ?>

<!-- START COUNTER -->

<!-- END COUNTER -->

<!-- START TEAM-->
<?= do_shortcode('[cb_team_member]'); ?>

<!-- END TEAM -->

<!-- START FAQ -->
<section class="faq_area section-padding">
	<div class="container">
		<div class="section-title">
			<h2>Frequently Asked Question</h2>
			<p>General <span><u>Questions</u></span></p>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What does it take excellent author?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time
								and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to
								use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Who will view my content?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time
								and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to
								use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								What does it take become an author?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time
								and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to
								use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How to Change my Password easily?
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time
								and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to
								use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								How does it create content?
							</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time
								and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to
								use.
							</div>
						</div>
					</div><!-- END ACCORDION ITEM  -->
				</div>
			</div><!-- END COL  -->
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="pt_faq">
					<img src="/wp-content/themes/daykemit/assets/images/daykem-it/banner-560x637.jpg" class="img-fluid"
						alt="image" />
				</div>
			</div><!-- END COL  -->
		</div><!--END  ROW  -->
	</div><!--- END CONTAINER -->
</section>
<!-- END FAQ -->

<!-- START COMPANY PARTNER LOGO  -->
<div class="partner-logo section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="partner_title">
					<h3>Trusted Company Arround The World! </h3>
				</div>
				<div class="partner">
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/1.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/2.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/3.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/4.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/5.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/2.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/1.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/3.png"
							alt="image"></a>
					<a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/4.png"
							alt="image"></a>
				</div>
			</div><!-- END COL  -->
		</div><!--END  ROW  -->
	</div><!-- END CONTAINER  -->
</div>

<?php
get_footer();
