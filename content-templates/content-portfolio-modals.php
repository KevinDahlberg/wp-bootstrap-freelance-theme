<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_post_meta($post->ID, 'portfolio-order', true); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h1><?php the_title(); ?></h1>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <div class="row">
                          <?php echo get_post_meta($post->ID, 'source-code', true); ?>
                        </div>
                        <div class = "row">
                        <h2>Summary</h2>
                          <?php echo get_post_meta($post->ID, 'summary', true); ?>
                        </div>
                        <div class = "row">
                          <h2>Features</h2>
                          <?php echo get_post_meta($post->ID, 'features', true); ?>
                        </div>
                          <h2>Takeaways</h2>
                        <div class = "row">
                          <?php echo get_post_meta($post->ID, 'takeaways', true); ?>
                        </div>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
