<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Enqueue basic global css and main js
 *
 * @since  1.000
 * 
 */
function grg_global_enqueue(){
	$uri = get_template_directory_uri();
	$ver = grg_DEV_MODE ? time() : grg_VERSION;
	
	//endueue style sheet to header
	wp_enqueue_style('grg_global_style', $uri . '/dist/css/global.min.css', [], $ver);	
    
    //use false as laster parameter to load script in footer
	wp_register_script('grg_global_scripts1', $uri . '/js/app.js', [], $ver, true);
	
    // load default jquery provided by wordpress
	// wp_enqueue_script( 'jquery' );	
	wp_enqueue_script('grg_global_scripts1');

} 