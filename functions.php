<?php
// Add scripts and stylesheets

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js' );
  wp_enqueue_script( 'bootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js');
  wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js');
  wp_enqueue_script( 'freelancerjs', get_template_directory_uri() . '/js/freelancer.min.js');
  wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');

}



add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
