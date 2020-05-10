<?php

function blog_assets(){
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('google-custom-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], '1.0', true);
}
add_theme_support( 'post-thumbnails' );
add_theme_support('title-tag');
add_image_size( 'single-post-thumbnail', 730, 243);
add_image_size( 'home-post-thumbnail', 728, 291);
add_action('wp_enqueue_scripts', 'blog_assets');
