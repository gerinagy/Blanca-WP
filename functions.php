<?php
function fn_theme_scripts(){

    wp_enqueue_style('bootstrap_min', get_template_directory_uri() .'/css/bootstrap.min.css');

    wp_enqueue_style('font-awesome.min', get_template_directory_uri() .'/css/font-awesome.min.css');
    
    wp_enqueue_style('swiper.min', get_template_directory_uri() .'/css/swiper.min.css');

    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fn_theme_scripts');



//adding new features to wp theme
function fn_theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');


// Register Nav menu
function fn_nav_menu(){
    register_nav_menus(array(
        'primary-menu'=>__('Primary Menu', 'text_domain'),
        'footer-menu'=>__
    ))
}


?>