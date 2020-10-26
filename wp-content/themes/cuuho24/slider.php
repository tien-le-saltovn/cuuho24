<div class="banner-slider">
    <div class="owl-carousel owl-theme owl-loaded">
      <div class="owl-stage-outer">
        <div class="owl-stage">
          <!-- Get post News Query -->
          <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=slider'); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="owl-item">
              <div class="item">
                <img src="<?php echo $featured_img_url; ?>" alt="First slide" />
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>

          <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=slider&offset=1'); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
            <div class="owl-item">
              <div class="item">
                <img src="<?php echo $featured_img_url; ?>" alt="First slide" />
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
          <!-- Get post News Query -->
        </div>
      </div>
    </div>
</div>