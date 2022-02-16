<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php

/**
 * Register Menus
 *
 * @since  1.000
 * 
 */
function grg_setup_theme(){
	register_nav_menu('primary', __('Primary Menu', 'grigora'));
	register_nav_menu('footer', __('footer Menu', 'grigora'));
}

/**
 * Add custom logo setup
 *
 * @since  1.000
 * 
 */
function grigora_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'grg-site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

/**
 * Change excerpt suffix
 *
 * @since  1.000
 * 
 */
function change_excerpt_end_bracket( $more ) {
    return '&#46;&#46;&#46;';
}

/**
 * Dynamic CSS External File Cache Version
 *
 * @since  1.000
 * 
 */
add_option("grg_dynamic_cache_ver", 1);

/**
 * Customized custom logo render
 *
 * @since  1.000
 * 
 */
add_filter( 'get_custom_logo', 'grg_custom_logo' );

/**
 * Customized custom logo render to display itemprop
 *
 * @since  1.000
 * 
 */
function grg_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    // $html = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
    //     'class'    => 'custom-logo',
    // ));
    $html = sprintf( '<a href="%1$s" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
}


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


add_filter( 'body_class', function( $classes ) {
	if(
		(is_single() || is_page()) &&
		get_post_meta(get_the_ID(), '_grigora-empty-canvas', true )
	){
		$empty_canvas = get_post_meta(get_the_ID(), '_grigora-empty-canvas', true );
		if($empty_canvas){
			return array_merge( $classes, array( 'grg-empty-canvas' ) );
		}
		else{
			return array_merge( $classes, array( '' ) );
		}
	}
    return array_merge( $classes, array( '' ) );
} );