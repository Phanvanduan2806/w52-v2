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


<!-- START HOME -->
<section id="home" class="home_bg"
    style="	background: url(/wp-content/themes/daykemit/assets/images/daykem-it/banner-1920x1200.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                <div class="home_content">
                    <h1>Dạy Kèm IT cung cấp các khóa học lập trình, nội dung học chất lượng và cam kết việc làm sau tốt
                        nghiệp.</h1>
                    <p>Với đội ngũ giảng viên xuất sắc và môi trường học tập đầy tính năng động và hiện đại, chúng tôi
                        cam kết mang lại một trải nghiệm học tập vượt trội, giúp học viên phát triển kỹ năng một cách
                        tối ưu nhất.</p>
                </div>
                <div class="home_sb">
                    <form action="<?php echo home_url('/'); ?>" class="banner_subs">
                        <input type="text" class="form-control home_si" placeholder="Tìm kiếm khoá học của bạn" name="s"
                            required="required">
                        <button type="submit" class="subscribe__btn"><span>Tìm kiếm</span> <i
                                class="fa fa-paper-plane-o"></i></button>
                    </form>

                </div>
                <div class="home_tag">
                    <span>Khoá học:</span>
                    <a href="#">Design, </a>
                    <a href="#">Development, </a>
                    <a href="#">Graphics, </a>
                    <a href="#">Marketing </a>
                </div>
            </div><!-- END COL-->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END  HOME -->

<!-- START TOP PROMO FEATURES -->
<section class="tp_feature section-padding">
    <div class="container">
        <div class="section_top text-center">
            <h4>Bắt đầu học</h4>
            <h2>Xây dựng kỹ năng tốt hơn, nhanh hơn từ hôm nay.</h2>
            <p>Một môi trường học tập chất lượng cao, tập trung vào việc trang bị cho học viên không chỉ kiến thức
                chuyên môn sâu rộng mà còn cả những kỹ năng thiết yếu để thành công trong lĩnh vực CNTT.
            </p>
        </div>
        <?= do_shortcode('[c_about_us]'); ?>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                data-wow-offset="0">
                <div class="single_tp">
                    <h3>Giáo dục chất lượng</h3>
                    <p>IT là một lĩnh vực thường xuyên đối mặt với các thách thức và vấn đề kỹ thuật. Giảng viên cần có
                        kỹ năng giải quyết vấn đề để hướng dẫn học viên thông qua các tình huống thực tế. </p>
                    <a href="#" class="cta"><span>Xem thêm</span>
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
            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="ab_content">
                    <h2>Học hỏi và phát triển <u><span>kỹ năng của bạn</span></u> từ mọi nơi..</h2>
                    <p>Công nghệ thay đổi liên tục, vì vậy học viên IT cần có khả năng thích ứng nhanh chóng với những
                        thay đổi và luôn sẵn sàng học hỏi những điều mới.</p>
                </div>
                <div class="abmv">
                    <span class="ti-medall"></span>
                    <h4>Nhiệm vụ</h4>
                    <p>Cung cấp một chương trình giáo dục chất lượng cao, cập nhật với những tiến bộ công nghệ mới nhất,
                        đảm bảo rằng học viên có được kiến thức và kỹ năng cần thiết để thành công trong ngành IT.</p>
                </div>
                <div class="abmv">
                    <span class="ti-wand"></span>
                    <h4>Tầm nhìn</h4>
                    <p>Bên cạnh việc trang bị kiến thức chuyên môn, chúng ta cũng tập trung vào việc phát triển kỹ năng
                        mềm cho học viên.</p>
                </div>
                <a class="btn_one" href="/about">Khám phá</a>
            </div><!--- END COL -->
            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                data-wow-offset="0">
                <div class="ab_img">
                    <img src="/wp-content/themes/daykemit/assets/images/daykem-it/banner-1024-957.jpg" class="img-fluid"
                        alt="image">
                    <!-- <div class="wc_year">
                            <h3><span>6k+</span> <br />Happy Clients</h3>
                        </div> -->
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END ABOUT US HOME ONE -->

<!-- START TOPIC-->
<section class="topic_content_p2 section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Bắt đầu học </h2>
            <p>Danh mục <span><u>phổ biến</u></span> từ hôm nay.</p>
        </div>
        <?= do_shortcode('[c_list_khoa_hoc]'); ?>

        <div class="col-lg-12 text-center">
            <div class="cc_btn">
                <a class="btn_one c-btn-xemthem" href="/">Xem thêm</a>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_one">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct1.svg" alt="" />
                    <h2><a href="#">UI/UX Design</a></h2>
                    <span>71 Khoá học</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_two">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct2.svg" alt="" />
                    <h2><a href="#">Digital Program</a></h2>
                    <span>59 Khoá học</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_three">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct3.svg" alt="" />
                    <h2><a href="#">Finance</a></h2>
                    <span>68 Khoá học</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_four">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct4.svg" alt="" />
                    <h2><a href="#">Modern Physics</a></h2>
                    <span>83 Khoá học</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_five">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct5.svg" alt="" />
                    <h2><a href="#">Music Production</a></h2>
                    <span>37 Khoá học</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="single_tca sc_six">
                    <img src="/wp-content/themes/daykemit/assets/images/icon/ct6.svg" alt="" />
                    <h2><a href="#">Data Science</a></h2>
                    <span>51 Khoá học</span>
                </div>
            </div>
            
        </div> -->
    </div><!-- END CONTAINER -->
</section>
<!-- END TOPIC -->

<!-- START WHY CHOOSE US-->
<?= do_shortcode('[cb_marketing_content]'); ?>

<!-- END WHY CHOOSE US -->

<!--START COURSE -->
<div class="best-cpurse section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Các khoá học phổ biến</h2>
            <p>Chọn <span><u>khoá học</u></span> của chúng tôi</p>
        </div>
        <?= do_shortcode('[c_khoa_hoc]'); ?>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="course-slide">
                    <div class="course-img">
                        <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-370x250.jpg" alt="">
                        <div class="course-date">
                            <span class="month">$49</span>
                        </div>
                    </div>
                    <div class="course-content"><a class="c_btn" href="single_course.html">Arts & Design</a>
                        <h3><a href="single_course.html">Nguyên Tắc Cơ Bản Cơ Bản Của Thiết Kế Nội Thất & Đồ Họa
                            </a></h3>
                        <span><i class="fa fa-calendar"></i>3 Bài học</span>
                        <span><i class="fa fa-clock-o"></i>3h 45m</span>
                        <span><i class="fa fa-star"></i>4.9</span>
                        <span><i class="fa fa-table"></i><strong>Có sẳn 30 chổ ngồi</strong></span>

                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12 text-center">
            <div class="cc_btn">
                <a class="btn_one c-btn-xemthem" href="#">Xem thêm</a>
            </div>
        </div>
    </div><!--END CONTAINER -->
</div>
<!--END COURSE -->

<!-- START COURSE PROMOTION -->
<section class="course_promo section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="cp_content">
                    <h4>Nền tảng học tập trực tuyến tốt nhất</h4>
                    <h2>Nhận <span><u>chứng chỉ</u></span> với DaykemIT</h2>
                    <p>From blogs to emails to ad copies, auto-generate catchy, original, and high-converting copies in
                        popular tones languages.</p>
                    <ul>
                        <li><span class="ti-check"></span>Tỷ lệ hài lòng trung bình 9/10</li>
                        <li><span class="ti-check"></span>Tỷ lệ hoàn thành 96%</li>
                        <li><span class="ti-check"></span>Môi trường thân thiện</li>
                    </ul>
                </div>
                <div class="cp_btn">
                    <a class="btn_one" href="#">Khám phá các khóa học của chúng tôi</a>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                data-wow-offset="0">
                <div class="cp_img">
                    <img src="/wp-content/themes/daykemit/assets/images/daykem-it/banner-775x685.jpg" class="img-fluid"
                        alt="image">
                    <!-- <div class="wc_year">
                            <h3>20 Years of Experience <br />from 2002</h3>
                        </div> -->
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END COURSE PROMOTION -->

<!-- START COUNTER -->
<?= do_shortcode('[cb_counts]'); ?>


<!-- END COUNTER -->

<!-- START COMPANY PARTNER LOGO  -->
<div class="partner-logo section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="partner_title">
                    <h4>ĐỐI TÁC CỦA CHÚNG TÔI</h4>
                    <h1>Công ty đáng tin cậy trên khắp thế giới!
                    </h1>
                    <p>Điều rất quan trọng là khách hàng có thể đạt được nhu cầu của mình, nhưng điều này cũng xảy ra
                        cùng một lúc.</p>
                </div>
            </div><!-- END COL  -->
            <div class="col-lg-6">
                <div class="row text-center">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/1.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/2.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/3.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/4.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/5.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="partner_logo">
                            <a href="#"><img src="/wp-content/themes/daykemit/assets/images/all-img/clients/1.png"
                                    alt="" class="img-fluid" /></a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!-- END COL  -->
        </div><!--END  ROW  -->
    </div><!-- END CONTAINER  -->
</div>
<!-- END COMPANY PARTNER LOGO -->

<!-- START TEAM-->

<?= do_shortcode('[cb_team_member]'); ?>


<!-- END TEAM -->

<!-- START TESTIMONIALS-->
<section class="testi_home_area section-padding">
    <div class="container">
        <div class="section-title">
            <h2>LỜI CHỨNG THỰC</h2>
            <p>Những <span><u>học viên</u></span> nói gì</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testi_pic_title tpt_one">
                            <div class="pic">
                                <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg" alt="">
                            </div>
                            <h4>Trần Văn Đạt</h4>
                            <small class="post">- Design</small>
                        </div>
                        <div class="testimonial_content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải
                                thiện chất lượng khóa học.
                            </p>
                        </div>
                    </div><!-- END TESTIMONIAL -->
                    <div class="testimonial">
                        <div class="testimonial_content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải
                                thiện chất lượng khóa học.
                            </p>
                        </div>
                        <div class="testi_pic_title tpt_two">
                            <div class="pic">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg" alt="img">
                            </div>
                            <h4>Trần Văn Bảo</h4>
                            <small class="post">- Marketing</small>
                        </div>
                    </div><!-- END TESTIMONIAL -->
                    <div class="testimonial">
                        <div class="testi_pic_title tpt_three">
                            <div class="pic">
                                <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                    alt="img">
                            </div>
                            <h4>Nguyễn Văn Bình</h4>
                            <small class="post">- Web Fullstack</small>
                        </div>
                        <div class="testimonial_content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải
                                thiện chất lượng khóa học.
                            </p>
                        </div>
                    </div><!-- END TESTIMONIAL -->
                    <div class="testimonial">
                        <div class="testimonial_content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải
                                thiện chất lượng khóa học.
                            </p>
                        </div>
                        <div class="testi_pic_title tpt_one">
                            <div class="pic">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                    alt="img">
                            </div>
                            <h4>Lê Chí Bình</h4>
                            <small class="post">- PHP/Wordpress</small>
                        </div>
                    </div><!-- END TESTIMONIAL -->
                    <div class="testimonial">
                        <div class="testi_pic_title tpt_two">
                            <div class="pic">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                    alt="img">
                            </div>
                            <h4>Phan Văn Thoại</h4>
                            <small class="post">- Marketing</small>
                        </div>
                        <div class="testimonial_content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải
                                thiện chất lượng khóa học.
                            </p>
                        </div>
                    </div><!-- END TESTIMONIAL -->
                </div><!-- END TESTIMONIAL SLIDER -->
            </div><!-- END COL  -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
<!-- END TESTIMONIALS -->

<!-- START BLOG -->
<section id="blog" class="blog_area section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Tin tức</h2>
            <p>Những <span><u>tin tức</u></span> mới nhất</p>
        </div>
        <?= do_shortcode('[c_tin_tuc]'); ?>


        <!-- <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="single_blog">
                    <img src="/wp-content/themes/daykemit/assets/images/blog/1.png" class="img-fluid" alt="image" />
                    <div class="content_box">
                        <span>August 26, 2024 | <a href="blog_single.html">Education</a></span>
                        <h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
                        <a href="#" class="cta"><span>READ MORE</span>
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

<!-- START NEWSLETTER -->
<section class="newsletter_area section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
                <div class="subs_form">
                    <h3>Đăng ký nhận bản tin của chúng tôi.</h3>
                    <p>Lưu trữ và ghi nhận các phản hồi từ học viên, bao gồm cả lời cảm ơn, để phân tích và cải thiện
                        chất lượng khóa học.</p>
                    <form action="#" class="home_subs">
                        <input type="text" class="subscribe__input" placeholder="Nhập email của bạn">
                        <button type="button" class="subscribe__btn"><i class="fa fa-paper-plane-o"></i></button>
                    </form>
                </div>
            </div>
        </div><!-- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END NEWSLETTER -->
<?php
get_footer();
