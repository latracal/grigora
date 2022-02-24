<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php

// Setup
define( 'grg_DEV_MODE', false );
define( 'grg_VERSION', '1.003' );

// Includes
include( get_theme_file_path( '/settings-functions/defaults.php' ) );
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/bodyclasses.php' ) );

include( get_theme_file_path( '/template-parts/comments.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'grg_global_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'grg_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
add_action( 'after_setup_theme', 'grigora_custom_logo_setup' );
add_filter( 'excerpt_more', 'change_excerpt_end_bracket' ); //Change excerpt end to ...
add_action( 'widgets_init', 'grg_sidebar' ); //sidebar


// Options
include( get_theme_file_path( '/settings-functions/options-controls.php' ) );
include( get_theme_file_path( '/customizer/customizer.php' ) );
include( get_theme_file_path( '/settings-functions/fonts-loading.php' ) );
include( get_theme_file_path( '/settings-functions/dynamic-css.php' ) );
include( get_theme_file_path( '/settings-functions/blog.php' ) );
include( get_theme_file_path( '/settings-functions/schema.php' ) );

// Metabox
include( get_theme_file_path( '/settings-functions/metabox/metabox.php' ) );

// Plugin Compatibilities
include( get_theme_file_path( '/compatibility/init.php' ) );