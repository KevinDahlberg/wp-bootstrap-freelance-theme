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
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name"><?php echo get_bloginfo( 'name' ); ?></h1>
                        <hr class="star-light">
                        <span class="skills"><?php echo get_bloginfo( 'description' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
