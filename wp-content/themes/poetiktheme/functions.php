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


// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// https://www.peterbateman.co.uk/how-to-stop-contact-form-7-from-loading-on-all-pages/

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'load_wpcf7_scripts');
function load_wpcf7_scripts() {
  if ( is_front_page('front-page') ) {
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
      wpcf7_enqueue_styles();
    }
  }
}