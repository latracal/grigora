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