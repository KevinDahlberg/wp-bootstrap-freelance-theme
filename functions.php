<?php
// Add scripts and stylesheets

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css', array() );
  wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery'), '3.3.6', true );
  wp_enqueue_script( 'easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '3.3.6', true);
  wp_enqueue_script( 'freelancerjs', get_template_directory_uri() . '/js/freelancer.js', array('jquery', 'bootstrapJs', 'easing'), '3.3.6', true);

}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function startwordpress_google_fonts() {
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome');
  wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
		wp_enqueue_style('montserrat');
  wp_register_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	wp_enqueue_style('lato');

 }

add_action('wp_print_styles', 'startwordpress_google_fonts');

function bootstrap_freelance_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
		add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'bootstrap_freelance_setup' );


function themename_custom_post_formats_setup() {
    // add post-formats to post_type 'page'
    add_post_type_support( 'page', 'post-formats' );

    // add post-formats to post_type 'my_custom_post_type'
    add_post_type_support( 'my_custom_post_type', 'post-formats' );
}
add_action( 'init', 'themename_custom_post_formats_setup' );
