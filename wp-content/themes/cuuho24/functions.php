<?php 
   register_nav_menu('topmenu', __('Menu chính'));

   //load dòng sản phẩm
   add_action('wp_ajax_showChild', 'showCateFunc');
   add_action('wp_ajax_nopriv_showChild', 'showCateFunc');
   function showCateFunc() {
      if(isset($_POST['slug']) && $_POST['slug']){
         $slug = $_POST['slug'];
         $parent = get_term_by('slug', $slug, 'hang-san-xuat');
         if ($slug != "-1") {
            $args = array( 
               'hide_empty' => 0,
               'taxonomy' => 'hang-san-xuat',
               'parent' => $parent->term_id
               ); 
            $cates = get_categories( $args );
            $k = 0;
            $data = "";
            foreach ( $cates as $cate ) {
               $data = $data.' <li class="label-box-device">
                              <div class="custom-control custom-radio custom-control-inline ">
                        <input type="radio" class="custom-control-input" id="prdtInline'.$k.'" name="devices" data-id="5e7b472d8c9b7c1180dad803" value="'.$cate->slug.'">
                        <label class="custom-control-label label-device" for="prdtInline0">'. $cate->name .'</label>
                     </div>
                     <input value="'.$k.'" name="index" type="hidden">
                     <input value="'.$cate->name.'" type="hidden">
                     </li>';
               $k++;
            }
         } else {
            $args = array( 
               'hide_empty' => 0,
               'taxonomy' => 'hang-san-xuat',
               'parent' => 0
               ); 
            $cates = get_categories( $args ); 
            $k = 0;
            $data = "";
            foreach ( $cates as $cate ) {  
               $args2 = array( 
                  'hide_empty' => 0,
                  'taxonomy' => 'hang-san-xuat',
                  'parent' => $cate->term_id
                  ); 
               $cates2 = get_categories( $args2 ); 
               foreach ( $cates2 as $cate2 ) {
                  $data = $data.' <li class="label-box-device">
                              <div class="custom-control custom-radio custom-control-inline ">
                        <input type="radio" class="custom-control-input" id="prdtInline'.$k.'" name="devices" data-id="'.$cate2->slug.'" value="'.$cate2->slug.'">
                        <label class="custom-control-label label-device" for="prdtInline.'.$k.'">'. $cate2->name .'</label>
                     </div>
                     <input value="'.$cate2->slug.'" name="index" type="hidden">
                     <input value="'.$cate2->slug.'" type="hidden">
                     </li>';
                  $k++; 
               } 
            } 
         }
         
         if ($data !="") {
            echo '<ul class="filter-device-box">
                  <li>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="prdtInline-1" name="devices" data-id="-1" value="-1">
                        <label class="custom-control-label" for="prdtInline-1">Bỏ chọn</label>
                     </div>
                  </li>'.$data.'</ul>';
         }
      } else {
         echo "";
      }
      die();
   }

   //sản phẩm
   add_action('wp_ajax_showChildProduct', 'showCateFuncProduct');
   add_action('wp_ajax_nopriv_showChildProduct', 'showCateFuncProduct');
   function showCateFuncProduct() {
      $slugHSX = $_POST['slugHSX'];
      $slugService = $_POST['slugService'];
      $slugProduct = $_POST['slugProduct'];
      $dataSearch = $_POST['dataSearch'];
      $args = array(
         'showposts'		=> 10,
         'post_type'		=> 'ourservice',
         's'				=> $dataSearch,
      );

      if ($slugService != "-1") {
         $args2 = array('loai-dich-vu'	=> $slugService);
         $args = array_merge($args,$args2);         
      }

      if ($slugHSX != "-1"){
         $args1 = array('hang-san-xuat' => $slugHSX);
         $args = array_merge($args,$args1);

         if ($slugProduct != "-1") {
            $args3 = array('hang-san-xuat' => $slugProduct);
            $args = array_merge($args,$args3);
         }

         $the_query = new WP_Query( $args ); 
         $data = "";
         if( $the_query->have_posts() ): 
         while( $the_query->have_posts() ) : $the_query->the_post(); 
         $id = get_post_meta( get_the_ID(), '_yoast_wpseo_primary_loai-dich-vu', true );
         $image = get_post_meta( get_the_ID(), 'wpcf-anh-dai-dien', true );
         $names = wp_get_post_terms(get_the_ID(), "hang-san-xuat",  array("fields" => "names"));
         if ($names[1]){
            $name = $names[1];
         } elseif ($names[0]) {
            $name = $names[0];
         } else {
            $name = "";
         }
         $data = $data.'<li>
                  <img class="li-image" src="'.$image.'">
                  <h5><span class="li-name">'.$name.'</span></h5>
                     <h5><span class="li-service">'.get_the_category_by_ID( $id ).'</span></h5>
                  <p><span class="li-price">'. get_post_meta( get_the_ID(), 'wpcf-gia', true ) .'₫</span></p>
            </li>';
         endwhile; 
         endif; 

      } else {
         if ($slugProduct != "-1") {
            $args3 = array('hang-san-xuat' => $slugProduct);
            $args4 = array_merge($args,$args3);
            $the_query = new WP_Query( $args4 ); 
            $data = "";
            if( $the_query->have_posts() ): 
            while( $the_query->have_posts() ) : $the_query->the_post(); 
            $id = get_post_meta( get_the_ID(), '_yoast_wpseo_primary_loai-dich-vu', true );
            $image = get_post_meta( get_the_ID(), 'wpcf-anh-dai-dien', true );
            $names = wp_get_post_terms(get_the_ID(), "hang-san-xuat",  array("fields" => "names"));
            if ($names[1]){
               $name = $names[1];
            } elseif ($names[0]) {
               $name = $names[0];
            } else {
               $name = "";
            }
            $data = $data.'<li>
                     <img class="li-image" src="'.$image.'">
                     <h5><span class="li-name">'.$name.'</span></h5>
                        <h5><span class="li-service">'.get_the_category_by_ID( $id ).'</span></h5>
                     <p><span class="li-price">'. get_post_meta( get_the_ID(), 'wpcf-gia', true ) .'₫</span></p>
               </li>';
            endwhile; 
            endif; 
         } else {
            $args1 = array( 
               'hide_empty' => 0,
               'taxonomy' => 'hang-san-xuat',
               'parent' => 0
               ); 
            $cates = get_categories( $args1 ); 
            $k = 0;
            $data = "";
            foreach ( $cates as $cate ) {  
               $args3 = array('hang-san-xuat' => $cate->slug);
               $args4 = array_merge($args,$args3);
               $the_query = new WP_Query( $args4 ); 
               if( $the_query->have_posts() ):
               while( $the_query->have_posts() ) : $the_query->the_post(); 
               $id = get_post_meta( get_the_ID(), '_yoast_wpseo_primary_loai-dich-vu', true );
               $image = get_post_meta( get_the_ID(), 'wpcf-anh-dai-dien', true );
               $names = wp_get_post_terms(get_the_ID(), "hang-san-xuat",  array("fields" => "names"));
               if ($names[1]){
                  $name = $names[1];
               } elseif ($names[0]) {
                  $name = $names[0];
               } else {
                  $name = "";
               }
               $data = $data.'<li>
                        <img class="li-image" src="'.$image.'">
                        <h5><span class="li-name">'.$name.'</span></h5>
                           <h5><span class="li-service">'.get_the_category_by_ID( $id ).'</span></h5>
                        <p><span class="li-price">'. get_post_meta( get_the_ID(), 'wpcf-gia', true ) .'₫</span></p>
                  </li>';
               endwhile; 
               wp_reset_query();
               endif; 
               unset($args3);
               unset($args4);
            }
         } 
      }

      if ($data != ""){
         echo '<ul class="list-result">'.$data.'</ul>';
      } else {
         echo "";
      }
      wp_reset_query(); 
      die();
   }

   // 
