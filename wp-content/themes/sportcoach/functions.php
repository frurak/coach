<?php

//load stylesheets
function load_css() {
    wp_register_style('mainstylesheet', get_template_directory_uri() . '/dist/app.css', array(), false, 'all');
    wp_enqueue_style('mainstylesheet');
}

add_action('wp_enqueue_scripts', 'load_css');

//load scripts
function load_js() {
    wp_enqueue_script('jquery');
    wp_register_script('mainapp', get_template_directory_uri() . '/dist/app.js', ['jquery'], false, true);
    wp_enqueue_script('mainapp');
}

add_action('wp_enqueue_scripts', 'load_js');

//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');

//menus
register_nav_menus(

    array(
        'main-menu' => 'Main menu Location',
        'main-mobile-menu' => 'Main mobile menu Location',

    )

);

//excerpt length
function my_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');
