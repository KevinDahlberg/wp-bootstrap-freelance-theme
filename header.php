<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo get_bloginfo( 'name' ); ?>

    <?php wp_head();?>
</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

<!-- Nav bar sourcing in PHP goes right here -->
<?php get_template_part('navigation'); ?>
    <!-- Header -->
<?php get_template_part('hero-header'); ?>
