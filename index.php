<?php get_header(); ?>

<div class="content-wrapper">
<?php get_template_part('content-templates/content', 'portfolio'); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

  get_template_part( 'content-templates/content', 'portfolio-modals', get_post_format() );

endwhile; endif;
?>
<?php get_template_part('content-templates/content', 'about'); ?>

<?php get_template_part('content-templates/content', 'contact'); ?>

<?php get_footer(); ?>
</div>
