<div class="col-sm-4 portfolio-item">
  <a href="#portfolioModal<?php echo get_post_meta($post->ID, 'portfolio-order', true); ?>" class="portfolio-link" data-toggle="modal">
    <div class="caption">
      <div class="caption-content">
        <i class="fa fa-search-plus fa-3x"></i>
      </div>
    </div>
    <div class="row">
      <h3 class="text-center"><?php the_title(); ?></h3>
    </div>
    <div class="row">
      <?php the_post_thumbnail('thumbnail', array ('class' => 'center-block img-rounded')); ?>
    </div>
  </a>
</div>
