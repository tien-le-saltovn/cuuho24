<div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=ourService&offset=1,&offset=2,&offset=3'); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="page-title text-center">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <hr class="pg-titl-bdr-btm" />  
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=ourService'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-icon">
                    <i class="fa fa-search-plus"></i>
                    </div>
                    <div class="service-text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    </div>
                </div>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>
        
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=ourService&offset=1'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-md-4">
                <div class="service-box">
                <div class="service-icon"><i class="fa fa-car"></i></div>
                    <div class="service-text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    </div>
                </div>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>

        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=ourService&offset=1&offset=2'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-md-4">
                <div class="service-box">
                <div class="service-icon"><i class="fa fa-eye"></i></div>
                    <div class="service-text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    </div>
                </div>
                </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>