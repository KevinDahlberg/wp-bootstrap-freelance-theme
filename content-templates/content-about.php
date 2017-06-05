<!-- About Section -->
<section class="success" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>
        <?php
        $id=5;
        $post = get_post($id);
        $title = apply_filters('the_title', $post->post_title);
        echo $title;
        ?>
        </h2>
        <hr class="star-light">
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-offset-2">
        <?php
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
        ?>
      </div>
    </div>
  </div>
</section>
