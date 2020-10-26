<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>
    <section>
        <div id="service" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="page-title text-center">
                        <h1>Dịch vụ của chúng tôi</h1>
                        <p>Với quy trình bảo hành chuyên nghiệp, khách hàng sẽ được kỹ thuật viên hỗ trợ và giải quyết sớm nhất nếu sử dụng dịch vụ xảy ra tình trạng bất cập.</p>
                        <hr class="pg-titl-bdr-btm" />
                    </div>
                        <div class="col-md-4">
                            <div class="service-box contact-hover" id="contact-customer-link">
                                <div class="service-icon"><i class="fa fa-vcard"></i></div>
                                <div class="service-text">
                                    <h3>Hỗ trợ khách hàng</h3>
                                    <p> Nếu bạn là khách hàng và đang gặp phải sự cố.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box contact-hover" id="contact-partner-link">
                                <div class="service-icon"><i class="fa fa-handshake-o"></i></div>
                                <div class="service-text">
                                    <h3>Đăng ký đối tác</h3>
                                    <p> Nếu bạn mong muốn hợp tác với chúng tôi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box contact-hover" id="contact-practitioner-link">
                                <div class="service-icon"><i class="fa fa-pencil-square"></i></div>
                                <div class="service-text">
                                    <h3>Đăng ký học viên</h3>
                                    <p> Nếu bạn mong muốn trở thành kỹ thuật viên của chúng tôi.</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    <hr class="horizone-line pg-titl-bdr-btm" style="width: 50%" />
<div class="contact-form" id="contact-customer-form">
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="page-title text-center">
                        <h1>HỖ TRỢ KHÁCH HÀNG</h1>
                        
                        <hr class="pg-titl-bdr-btm" />
                    </div>
                </div>
                <div class="form-sec">
                    <?php echo do_shortcode( '[contact-form-7 id="77" title="Form liên hệ"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-form" id="contact-practitioner-form">
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>ĐĂNG KÝ TRỞ THÀNH HỌC VIÊN CỦA 24/7</h1>
                    <hr class="pg-titl-bdr-btm" />
                </div>
                <div class="form-sec">
                    <?php echo do_shortcode( '[contact-form-7 id="77" title="Form liên hệ"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-form" id="contact-partner-form">
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>ĐĂNG KÝ TRỞ THÀNH ĐỐI TÁC CỦA 24/7</h1>
                    <hr class="pg-titl-bdr-btm" />
                </div>
                <div class="form-sec">
                    <?php echo do_shortcode( '[contact-form-7 id="77" title="Form liên hệ"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="error"></div>
</section>
<?php get_footer() ?>
