<div class="cta-1">
    <div class="container">
      <div class="row text-center white">
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=introduce&offset=1'); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; ?>
          <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
             <h1 class="cta-title">
                <?php the_title(); ?>
            </h1>
            <?php echo '<p class="cta-sub-title">' . get_the_excerpt() . '</p>'; ?>
          <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>