<?php

/**
 * Register Menus
 *
 * @since  1.000
 * 
 */
function grg_setup_theme(){
	register_nav_menu('primary', __('Primary Menu', 'grg'));
	register_nav_menu('footer', __('footer Menu', 'grg'));
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
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
}

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }	 