<?php

function devduo_register_styles() {
    // $version = wp_get_theme()->get('Version');

    wp_register_style('devduo_style', get_template_directory_uri() . '/dist/app.css' , array(), false, 'all');
    wp_enqueue_style('devduo_style');

    wp_register_style('devduo_font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' , array(), '5.15.2', 'all');
    wp_enqueue_style('devduo_font');
}

add_action('wp_enqueue_scripts', 'devduo_register_styles');

function devduo_register_scripts() {
    wp_enqueue_style('jquery');

    wp_register_script('devduo_script', get_template_directory_uri() . '/dist/app.js' , array('jquery'), false, true);
    wp_enqueue_script('devduo_script');
}

add_action('wp_enqueue_scripts', 'devduo_register_scripts');