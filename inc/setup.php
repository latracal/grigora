<?php

function ltr_setup_theme(){

	register_nav_menu('primary', __('Primary Menu', 'ltr2022'));
	
}

function grigora_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
    );
 
    add_theme_support( 'custom-logo', $defaults );
}