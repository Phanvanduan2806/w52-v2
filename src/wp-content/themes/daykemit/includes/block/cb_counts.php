<?php
add_shortcode('cb_counts', function () {
    ob_start();
    ?>
    <section id="counts" class="counts section-padding">
        <div class="container count_bg" data-aos="fade-up">
            <div class="section-title">
                <h2>MỘT SỐ SỰ THẬT THÚ VỊ</h2>
                <p>Những <span><u>thành tựu</u></span> của chúng tôi</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-face-smile" style="color: #11312c;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="8232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Sinh viên đã đăng ký</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-files" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Chương trình học</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-headphone-alt" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Giải thưởng</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-user" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Chứng nhận tốt nghiệp</p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <?php
    return ob_get_clean();
});
?>