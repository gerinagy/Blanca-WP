  
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->

    <!-- FontAwesome CSS -->
    <!--<link rel="stylesheet" href="./css/font-awesome.min.css"> -->

    <!-- Swiper CSS -->
    <!--<link rel="stylesheet" href="./css/swiper.min.css"> -->

    <!-- Styles -->
    <!--<link rel="stylesheet" href="./style.css">   -->

<?php

function fn_theme_scripts(){

    wp_enqueue_style('bootstrap_min', get_template_directory_uri() .'/css/bootstrap.min.css');

    wp_enqueue_style('font-awesome.min', get_template_directory_uri() .'/css/font-awesome.min.css');
    
    wp_enqueue_style('swiper.min', get_template_directory_uri() .'/css/swiper.min.css');

    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fn_theme_scripts');