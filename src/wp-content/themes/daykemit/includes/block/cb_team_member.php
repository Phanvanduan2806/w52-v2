<?php
add_shortcode('cb_team_member', function () {
    ob_start();
    ?>
    <section class="team_member section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Giảng viên của chúng tôi</h2>
                <p>Những <span><u>chuyên gia</u></span> của chúng tôi</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mr Ti</h3>
                            <span class="post">Fullstack Developer</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Khoá học</u></span>
                                <span class="ti-user"> <u>12 Học viên</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mr Thắng</h3>
                            <span class="post">Front End</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Khoá học</u></span>
                                <span class="ti-user"> <u>12 Học viên</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mr Dân</h3>
                            <span class="post">Seo/Wordpress</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Khoá học</u></span>
                                <span class="ti-user"> <u>12 Học viên</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="/wp-content/themes/daykemit/assets/images/daykem-it/item-270x270.jpg"
                                alt="team-image">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Mr Đạt</h3>
                            <span class="post">PHP/Wordpress</span>
                            <div class="sth_det2">
                                <span class="ti-file"> <u>5 Khoá học</u></span>
                                <span class="ti-user"> <u>12 Học viên</u></span>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <?php
    return ob_get_clean();
});
?>