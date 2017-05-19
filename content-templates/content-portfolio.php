<!-- Portfolio Grid Section -->
<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Portfolio</h2>
        <hr class="star-primary">
      </div>
    </div>
    <?php
    $post_num = 0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();

    if ( in_category ( 'Portfolio') ) :
      if($post_num == 0) {
        echo '<div class="row">';
      }

      $post_num++;
      get_template_part('content-templates/home', 'portfolio-content');

      if($post_num == 2) {
        echo '</div>';
        $post_num = 0;
      }
    endif;
  endwhile; endif;

  if ($post_num != 0) {
    echo '</div>';
  }
  ?>


</div>
</section>
