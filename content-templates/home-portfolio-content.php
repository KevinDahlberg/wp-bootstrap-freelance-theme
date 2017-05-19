<div class="col-sm-4 portfolio-item">
  <a href="#portfolioModal<?php echo get_post_meta($post->ID, 'portfolio-order', true); ?>" class="portfolio-link" data-toggle="modal">
    <div class="caption">
      <div class="caption-content">
        <i class="fa fa-search-plus fa-3x"></i>
      </div>
    </div>
    <div class="row">
      <h3><?php the_title(); ?></h3>
    </div>
    <div class="roe">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
  </a>
</div>
