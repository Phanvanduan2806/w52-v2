<?php
add_shortcode('cb_marketing_content', function () {
    ob_start();
    ?>
   <section class="marketing_content_area section-padding">
    <div class="container">
        <div class="section-title">
            <h2>TẠI SAO CHỌN DaykemIT</h2>
            <p>Tìm hiểu những <span><u>tính năng tốt nhất</u></span> của DaykemIT.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-book ss_one"></span>
                        <h2><a href="#" target="_blank">Học ở mọi nơi</a></h2>
                    </div>
                    <p>Đào tạo online đã trở thành một phần không thể thiếu trong việc cung cấp giáo dục và đào tạo chất
                        lượng cao, đặc biệt trong lĩnh vực công nghệ thông tin.</p>
                </div>
            </div><!-- END COL -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-heart ss_two"></span>
                        <h2><a href="#" target="_blank">Giảng viên chuyên nghiệp</a></h2>
                    </div>
                    <p>Kỹ năng của giảng viên IT (Công nghệ thông tin) là một yếu tố quan trọng không chỉ giúp họ truyền
                        đạt kiến thức một cách hiệu quả mà còn ảnh hưởng đến sự phát triển của học viên.</p>
                </div>
            </div><!-- END COL -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-user ss_three"></span>
                        <h2><a href="#" target="_blank">Team <br />Quản lí nhóm</a></h2>
                    </div>
                    <p>Đưa ra khả năng tạo lớp học, bài giảng, bài kiểm tra, diễn đàn thảo luận, và theo dõi tiến
                        trình học tập của học viên.
                    </p>
                </div>
            </div><!-- END COL -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-eye ss_four"></span>
                        <h2><a href="#" target="_blank">Course <br /> Kế hoạch khoá học</a></h2>
                    </div>
                    <p>Đưa ra khả năng tạo lớp học, bài giảng, bài kiểm tra, diễn đàn thảo luận, và theo dõi tiến
                        trình học tập của học viên.</p>
                </div>
            </div><!-- END COL -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-light-bulb ss_five"></span>
                        <h2><a href="#" target="_blank">Giám sát giáo viên</a></h2>
                    </div>
                    <p>Đưa ra khả năng tạo lớp học, bài giảng, bài kiểm tra, diễn đàn thảo luận, và theo dõi tiến
                        trình học tập của học viên..</p>
                </div>
            </div><!-- END COL -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                data-wow-offset="0">
                <div class="single_feature_one">
                    <div class="sf_top">
                        <span class="ti-email ss_six"></span>
                        <h2><a href="#" target="_blank">Hổ trợ 24/7</a></h2>
                    </div>
                    <p>Đưa ra khả năng tạo lớp học, bài giảng, bài kiểm tra, diễn đàn thảo luận, và theo dõi tiến
                        trình học tập của học viên.</p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
    <?php
    return ob_get_clean();
});
?>