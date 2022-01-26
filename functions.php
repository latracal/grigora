<?php

// Setup
define( 'ltr_DEV_MODE', true );

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


/**
 * Disable the emoji's
 */
// function disable_emojis() {
//     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
//     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
//     remove_action( 'wp_print_styles', 'print_emoji_styles' );
//     remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
//     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
//     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
//     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
//     add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
//     add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
//    }
//    add_action( 'init', 'disable_emojis' );
   
   /**
    * Filter function used to remove the tinymce emoji plugin.
    * 
    * @param array $plugins 
    * @return array Difference betwen the two arrays
    */
//    function disable_emojis_tinymce( $plugins ) {
//     if ( is_array( $plugins ) ) {
//     return array_diff( $plugins, array( 'wpemoji' ) );
//     } else {
//     return array();
//     }
//    }
   
   /**
    * Remove emoji CDN hostname from DNS prefetching hints.
    *
    * @param array $urls URLs to print for resource hints.
    * @param string $relation_type The relation type the URLs are printed for.
    * @return array Difference betwen the two arrays.
    */
//    function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
//     if ( 'dns-prefetch' == $relation_type ) {
//     /** This filter is documented in wp-includes/formatting.php */
//     $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
   
//    $urls = array_diff( $urls, array( $emoji_svg_url ) );
//     }
   
//    return $urls;
//    }



/**
 * Disable the gutenberg blocks
 */

// function smartwp_remove_wp_block_library_css(){
//     wp_dequeue_style( 'wp-block-library' );
//     wp_dequeue_style( 'wp-block-library-theme' );
//     wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
// } 
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/**
 * Disable the jquery
 */
// if ( !is_admin() ) wp_deregister_script('jquery');