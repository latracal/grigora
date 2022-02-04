<?php

function grg_setup_theme(){
	register_nav_menu('primary', __('Primary Menu', 'grg'));
	register_nav_menu('footer', __('footer Menu', 'grg'));
}

function grigora_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'grg-site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

function change_excerpt_end_bracket( $more ) {
    return '&#46;&#46;&#46;';
}

add_option("grg_dynamic_cache_ver", 1);

add_filter( 'get_custom_logo', 'grg_custom_logo' );

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