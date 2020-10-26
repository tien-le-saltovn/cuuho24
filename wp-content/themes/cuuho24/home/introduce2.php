<div class="cta2">
    <div class="container">
      <div class="row white text-center">
        <h3 class="wd75 fnt-24">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=introduce'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php echo  get_the_excerpt(); ?>
            <?php endwhile; wp_reset_postdata(); ?>.
        </h3>
        <p class="cta-sub-title"></p>
      </div>
    </div>
  </div>