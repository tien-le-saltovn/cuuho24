<?php
/*
 Template Name: Location
 */
?>
<?php get_header(); ?>
<section>
        <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">
                    24/7 hiện đang mở rộng triển khai nhiều nơi
                </h1>
                <p class="cta-sub-title">
                    24/7 sẽ gi&#250;p kh&#225;ch h&#224;ng nhanh ch&#243;ng t&#236;m kiếm kỹ thuật vi&#234;n giải quyết lỗi điện thoại gặp phải trong thời gian sớm nhất v&#224; mọi l&#250;c mọi nơi.
                </p>
            </div>
        </div>
    </div>
<div id="store" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="page-title text-center">
                <h1>T&#236;m kiếm bưu điện</h1>
                <div><p>Hiện ch&uacute;ng t&ocirc;i đang mở rộng cửa h&agrave;ng của m&igrave;nh tr&ecirc;n khắp th&agrave;nh phố Hồ Ch&iacute; Minh.</p>
                </div>
                <hr class="pg-titl-bdr-btm" />
            </div>
            <div class="col-md-12">
                <div class="s003">
                    <form method="post" action="<?php bloginfo( 'url' ); ?>/?page_id=29">
                        <div class="inner-form">
                            <div class="input-field first-wrap">
                                
                                <div class="location-title"><strong>Tìm kiếm</strong></div>
                            </div>
                            <div class="input-field second-wrap">
                                <input id="search" type="text" name="location" placeholder="Nhập từ khóa?" />
                            </div>
                            <div class="input-field third-wrap">
                                <button class="btn-search" type="submit">
                                    <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
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
<div id="service" class="section-padding">
    <div class="container"> 
        <?php
            if ($_POST['location'] && isset($_POST['location'])) {
                $search = $_POST['location'];
                $args = array(
                    'showposts'		=> 100,
                    'post_type'		=> 'localtion',
                    's'				=> $search
                );
                $the_query = new WP_Query( $args ); 
                $data = "";
                if( $the_query->have_posts() ): 
                    while( $the_query->have_posts() ) : $the_query->the_post(); 
                    $id = get_post_meta( get_the_ID(), '', true );
                    
                    $data = $data.
                        '<div class="row">
                            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12" style="margin-bottom: 15px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                        <div class="service-box" style="display: block; overflow:hidden; margin: 0 0 10px;">
                                            <div class="service-icon"><i class="fa fa-map-marker"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                        <div class="service-text" style="background-color: #f70d0244; padding: 10px 15px; box-sizing:border-box">
                                            <h3 style="font-weight: bold; color: #f70d02">Địa chỉ</h3>
                                            <h4>'.get_the_excerpt().'</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    </div>
                                </div>
                            </div>
                        </div>';
                    endwhile; 
                endif; 

                if ($data != "") {
                    echo '<div class="row">
                            <div class="page-title text-center">
                                <h1>Kết quả tìm kiếm</h1>
                                <p>Có '.$the_query->found_posts.' địa điểm</p>
                                <hr class="pg-titl-bdr-btm">
                            </div>
                            '.$data.'
                        </div>';
                } else {
                    echo '<div class="row">
                            <div class="col-md-12">
                                <h4 style="text-align:center;">Không có kết quả nào hoặc bạn chưa nhập từ khóa</h4>
                            </div>
                        </div>';
                }
            } else {
                echo '<div class="row">
                            <div class="col-md-12">
                                <h4 style="text-align:center;">Không có kết quả nào hoặc bạn chưa nhập từ khóa</h4>
                            </div>
                        </div>';
            }
        ?>
    </div>
</div>
</section>
<?php get_footer() ?>
