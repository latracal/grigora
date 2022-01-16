<?php

// Setup
define( 'ltr_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'ltr_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'ltr_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
// add_theme_support( 'custom-logo' ); 
add_action( 'after_setup_theme', 'grigora_custom_logo_setup' );