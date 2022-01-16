<?php

// Setup
define( 'ltr_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/theme-customizer.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'ltr_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'ltr_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
add_action( 'customize_register', 'ltr_customize_register' );
add_action( 'wp_head', 'mytheme_customize_css' );
add_theme_support( 'custom-logo' );