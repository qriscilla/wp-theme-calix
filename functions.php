<?php

function stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'stylesheets');

add_theme_support( 'post-thumbnails' );