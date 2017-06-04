<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_post_meta($post->ID, 'portfolio-order', true); ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container modal-wrapper">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-1">
          <?php the_post_thumbnail('medium_large'); ?>
        </div>
        <div class="col-lg-6">
          <?php echo get_post_meta($post->ID, 'source-code', true); ?>
          <h2>Summary</h2>
          <?php echo get_post_meta($post->ID, 'summary', true); ?>
          <h2>Features</h2>
          <?php echo get_post_meta($post->ID, 'features', true); ?>
          <h2>Takeaways</h2>
          <?php echo get_post_meta($post->ID, 'takeaways', true); ?>
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
