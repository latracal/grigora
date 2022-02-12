<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php

// Setup
define( 'grg_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/sidebarfunction.php' ) );
include( get_theme_file_path( '/inc/commentstemplate.php' ) );
include( get_theme_file_path( '/shortcodes.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'grg_global_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'grg_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image
add_action( 'after_setup_theme', 'grigora_custom_logo_setup' );
add_filter( 'excerpt_more', 'change_excerpt_end_bracket' ); //Change excerpt end to ...
add_action( 'widgets_init', 'grg_sidebar' ); //sidebar
add_theme_support( 'title-tag' );

// Options
include( get_theme_file_path( '/settings-functions/defaults.php' ) );
include( get_theme_file_path( '/settings-functions/options-controls.php' ) );
include( get_theme_file_path( '/settings-functions/fonts-loading.php' ) );
include( get_theme_file_path( '/settings-functions/dynamic-css.php' ) );
include( get_theme_file_path( '/settings-functions/blog.php' ) );
include( get_theme_file_path( '/settings-functions/schema.php' ) );

// Metabox
include( get_theme_file_path( '/settings-functions/metabox/metabox.php' ) );

// Plugin Compatibilities
include( get_theme_file_path( '/compatibility/init.php' ) );

add_filter( 'body_class', function( $classes ) {
	if(
		(is_single() || is_page()) &&
		get_post_meta(get_the_ID(), '_grigora-sidebar-align', true ) &&
		get_post_meta( get_the_ID(), '_grigora-sidebar-align', true ) != get_theme_mod('grg_sidebar-alignment', grigora_spacing_defaults()['grg_sidebar-alignment'])
	){
		$sidebar_layout = get_post_meta(get_the_ID(), '_grigora-sidebar-align', true );
		if($sidebar_layout == "row"){
			return array_merge( $classes, array( 'grg-right-sidebar' ) );
		}
		else if($sidebar_layout == "row-reverse"){
			return array_merge( $classes, array( 'grg-left-sidebar' ) );
		}
		else if($sidebar_layout == "none"){
			return array_merge( $classes, array( 'grg-no-sidebar' ) );
		}
	}
	$sidebar_layout = get_theme_mod('grg_sidebar-alignment', grigora_spacing_defaults()['grg_sidebar-alignment']);
	if($sidebar_layout == "row"){
		return array_merge( $classes, array( 'grg-right-sidebar' ) );
	}
	else if($sidebar_layout == "row-reverse"){
		return array_merge( $classes, array( 'grg-left-sidebar' ) );
	}
	else if($sidebar_layout == "none"){
		return array_merge( $classes, array( 'grg-no-sidebar' ) );
	}
    return array_merge( $classes, array( '' ) );
} );