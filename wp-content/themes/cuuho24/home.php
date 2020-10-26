<?php
/*
 Template Name: Home
 */
?>
<?php get_header(); ?>
<section>
  <!--BANNER START-->
  <?php get_template_part('slider') ?>
  <!--BANNER END-->
  <!--CTA1 START-->
  <?php get_template_part('home/introduce1') ?>
  <!--CTA1 END-->
  <!--SERVICE START-->
  <?php get_template_part('home/ourService') ?>
  <!--SERVICE END-->
  <!--PORTFOLIO START-->

  <!--PORTFOLIO END-->
  <!--TEAM START-->

  <!--TEAM END-->
  <!--CTA2 START-->
  <?php get_template_part('home/introduce2') ?>
  <!--CTA2 END-->
  <!--SEARCH LOCATION-->

  <div id="store" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>T&#236;m kiếm bưu điện</h1>
          <div>
            <p>
              Hiện ch&uacute;ng t&ocirc;i đang mở rộng cửa h&agrave;ng của
              m&igrave;nh tr&ecirc;n khắp th&agrave;nh phố Hồ Ch&iacute;
              Minh.
            </p>
          </div>
          <hr class="pg-titl-bdr-btm" />
        </div>
        <div class="col-md-12">
          <div class="s003">
          
            <form method="post" action="<?php bloginfo( 'url' ); ?>/?page_id=29" role="form">
              <div class="inner-form">
                <div class="input-field first-wrap">
                  <div class="location-title">
                    <strong>Tìm kiếm</strong>
                  </div>
                </div>
                <div class="input-field second-wrap">
                  <input
                    id="search"
                    type="text"
                    name="location"
                    placeholder="Nhập từ khóa?"
                  />
                </div>
                <div class="input-field third-wrap">
                  <button class="btn-search" type="submit">
                    <svg
                      class="svg-inline--fa fa-search fa-w-16"
                      aria-hidden="true"
                      data-prefix="fas"
                      data-icon="search"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SEARCH LOCATION END-->
  <!--CONTACT START-->

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

  <!--CONTACT END-->
</section>
<?php get_footer() ?>
