<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Register Menus
 *
 * @since  1.000
 * 
 */
function grg_setup_theme(){
	register_nav_menu('primary', __('Primary Menu', 'grigora'));
	register_nav_menu('footer', __('Footer Menu', 'grigora'));
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
 * Add theme support for title tag
 *
 * @since  1.000
 * 
 */
add_theme_support( 'title-tag' );

/**
 * Add theme support for html5
 *
 * @since  1.001
 * 
 */
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

/**
 * Add theme support for automatic feed link
 *
 * @since  1.001
 * 
 */
add_theme_support( 'automatic-feed-links' ); 


/**
 * Add theme support for woocommerce
 *
 * @since  1.001
 * 
 */
add_theme_support( 'woocommerce' );

/**
 * Add theme support for align wide
 *
 * @since  1.001
 * 
 */
add_theme_support( 'align-wide' );

/**
 * Add theme support for responsive embeds
 *
 * @since  1.001
 * 
 */
add_theme_support( 'responsive-embeds' );

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

/**
 * Register Primary Sidebar
 *
 * @since  1.000
 * 
 */
function grg_sidebar(){
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar', 'grigora' ),
            'description'   => __( 'Primary Sidebar for the theme.', 'grigora' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
