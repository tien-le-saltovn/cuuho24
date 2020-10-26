<?php
/*
 Template Name: Service
 */
?>
<?php get_header(); ?>
<section>
    <div class="cta-1">
        <div class="container">
            <div class="row text-center white">
                <h1 class="cta-title">
                    Dịch vụ của ch&#250;ng t&#244;i
                </h1>
                <p class="cta-sub-title">
                    Với quy tr&#236;nh bảo h&#224;nh chuy&#234;n nghiệp, kh&#225;ch h&#224;ng sẽ được kỹ thuật vi&#234;n hỗ trợ v&#224; giải quyết sớm nhất nếu sử dụng dịch vụ xảy ra t&#236;nh trạng bất cập. 
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="filter-box">
            <h2>Tìm kiếm giá cả dịch vụ</h2>
            <div class="row" >
                <h4>Chọn dịch vụ</h4>
                <form id="filter-services-form">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="serviceInline-1" name="service" data-id="-1" value="-1">
                        <label class="custom-control-label" for="serviceInline-1">Bỏ chọn</label>
                    </div>
                    <?php 
                        $args = array( 
                            'hide_empty' => 0,
                            'taxonomy' => 'loai-dich-vu',
                            'parent' => 0
                            ); 
                        $cates = get_categories( $args ); 
                        $j = 0;
                        foreach ( $cates as $cate ){
                            echo '<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="serviceInline'.$j.'" name="service" data-id="5e846c6b8c9b7e15bc35fc7a" value="'.$cate->slug.'">
                            <label class="custom-control-label" for="serviceInline5">'. $cate->name .'</label>
                            </div>
                            <input value="'.$j.'" name="index" type="hidden" />';
                            $j++;
                        }
                    ?>           
                </form>
                <!-- </form> -->
            </div>
            <div class="row" >
                <h4>Chọn hãng sản xuất</h4>
                <form id="filter-manufactures-form">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="manuInline-1" name="manufacture" data-id="-1" value="-1">
                        <label class="custom-control-label" for="manuInline-1">Bỏ chọn</label>
                    </div>
                    <?php $args2 = array( 
                                'hide_empty' => 0,
                                'taxonomy' => 'hang-san-xuat',
                                'parent' => 0
                                ); 
                                $cates2 = get_categories( $args2 ); 
                                $i = 0;
                                foreach ( $cates2 as $cate2 ) {
                                    echo '<div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="manuInline'.$i.'" name="manufacture" data-id="'.$cate2->slug.'" value="'.$cate2->slug.'">
                                        <label class="custom-control-label" for="manuInline'.$i.'">'. $cate2->name . '</label>
                                    </div>
                                    <input value='.$i.' name="index" type="hidden" />';
                                    $i++;
                            } ?>
                </form>
            </div>
            <div class="row filter-devices">
                <h4>Chọn máy bạn đang sử dụng</h4>
                <label for="searchdevice" class="label-search-device">Tìm kiếm</label>
                <input type="text" id="searchdevices" class="filter-search-device" maxlength="40">
                <form id="filter-devices-form">
                </form>
            </div>
        </div>
        <div class="filter-result">
    </div>
</div>
<div class="cacbon">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cacbon-box">
                        <div class="cacbon-image">
                            <img src="Content/Images/Service/5-24/7--screen.png" alt="" class="src" />
                        </div>
                        <div class="cacbon-text">
                            <h3>24/7 - Screen</h3>
                            <p>
                                App 24/7 không chỉ giúp khách hàng có vấn đề vơi màn hình điện thoại được sửa chữa mà
                                còn giúp những người kinh doanh dịch vụ thay màn hình có được nguồn hàng tốt nhất.
                                Chỉ cần tải ứng dụng, tìm kiếm nhu cầu của bạn và sau đó chúng tôi sẽ đáp ứng cho bạn tốt nhất.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mono-box">
                        <div class="mono-text">
                            <p>
                                Cùng với đó nếu bạn là một người kinh doanh dịch vụ thay màn hình,
                                thì bạn không cần phải đi tìm nguồn hàng đâu xa,
                                chỉ đơn giản là thao tác trên ứng dụng là bạn đã có thể tìm được nguồn hàng với giá cả tốt nhất,
                                giao hàng tận nơi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pg-titl-bdr-btm" />
            <div class="row">
                <div class="col-md-12">
                    <div class="cacbon-box">
                        <div class="cacbon-image">
                            <img src="Content/Images/Service/6-24/7--glass.png" alt="" class="src" />
                        </div>
                        <div class="cacbon-text">
                            <h3>24/7 - Glass</h3>
                            <p>
                                Đến tận nơi - Không cần chờ đợi, 24/7 - Glass cung cấp dịch vụ thay mặt kính điện thoại các loại đến khách hàng tận nơi,
                                thực hiện tại chỗ, chỉ mất 30 phút thời gian thay thế nhanh chóng, khách hàng tận mắt quan sát,
                                giá cả được niêm yết, với quy trình làm việc rõ ràng và nghiêm túc hoàn toàn về thời gian hoàn thành máy sửa.
                                Chúng tôi cam kết tất cả các linh kiện, phụ kiện trên chiếc điện thoại của bạn được bảo vệ cẩn thận,
                                hạn chế thấp nhất vấn đề trầy xước trong quá trình thay thế.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mono-box">
                        <div class="mono-text">
                            <p>
                                Cùng với đó nếu bạn là một người kinh doanh dịch vụ mặt kính điện thoại,
                                thì bạn không cần phải đi tìm nguồn hàng đâu xa,
                                chỉ đơn giản là thao tác trên ứng dụng là bạn đã có thể tìm được nguồn hàng với giá cả tốt nhất,
                                giao hàng tận nơi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pg-titl-bdr-btm" />
            <div class="row">
                <div class="col-md-12">
                    <div class="cacbon-box">
                        <div class="cacbon-image">
                            <img src="Content/Images/Service/23-24/7--battery.png" alt="" class="src" />
                        </div>
                        <div class="cacbon-text">
                            <h3>24/7 - Battery</h3>
                            <p>
                                24/7 - Battery mang dịch vụ thay pin điện thoại các loại, thay thế trực tiếp tại chỗ,
                                hướng tới tiêu chí chất lượng tốt nhất,
                                sự hài lòng tuyệt đối nhất cho khách hàng. Với đội ngũ kỹ thuật viên giỏi kỹ thuật
                                cùng trang thiết bị sửa chữa hiện đại sẽ mang đến cho khách hàng những dịch vụ sửa chữa
                                thay pin chất lượng, uy tín nhất, làm hài lòng những khách hàng khó tính.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mono-box">
                        <div class="mono-text">
                            <p>
                                Cùng với đó nếu bạn là một người kinh doanh dịch vụthay pin điện thoại,
                                thì bạn không cần phải đi tìm nguồn hàng đâu xa,
                                chỉ đơn giản là thao tác trên ứng dụng là bạn đã có thể tìm được nguồn hàng với giá cả tốt nhất,
                                giao hàng tận nơi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="pg-titl-bdr-btm" />
        </div>
    </div>
    <div>
        <p class="doit"></p>
        <p class="cslder">
            <span class="cswrap">
                <span class="csdot"></span>
                <span class="csdot"></span>
                <span class="csdot"></span>
            </span>
        </p>
    </div>
</section>
<?php get_footer() ?>
