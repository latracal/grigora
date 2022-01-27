<?php

// Setup
define( 'grg_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/sidebarfunction.php' ) );
include( get_theme_file_path( '/inc/commentstemplate.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'ltr_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'ltr_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
add_action( 'after_setup_theme', 'grigora_custom_logo_setup' );
add_filter( 'excerpt_more', 'change_excerpt_end_bracket' ); //Change excerpt end to ...
add_action( 'widgets_init', 'grg_sidebar' ); //sidebar

// Options
include( get_theme_file_path( '/settings-functions/defaults.php' ) );
include( get_theme_file_path( '/settings-functions/options-controls.php' ) );
include( get_theme_file_path( '/settings-functions/dynamic-css.php' ) );


/**
 * Disable the gutenberg blocks
 */

// function smartwp_remove_wp_block_library_css(){
//     wp_dequeue_style( 'wp-block-library' );
//     wp_dequeue_style( 'wp-block-library-theme' );
//     wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
// } 
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
