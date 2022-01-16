<?php

function ltr_enqueue(){
	$uri = get_theme_file_uri();
	$ver = ltr_DEV_MODE ? time() : true;
	
	//endueue style sheet to header
	wp_enqueue_style( 'ltr_style' );
	wp_enqueue_style('ltr_style', $uri . '/dist/css/global.css', [], $ver);	
    
    //use false as laster parameter to load script in footer
	wp_register_script( 'ltr_scripts1', $uri . '/js/app.js', [], $ver, true );
	

    // load default jquery provided by wordpress
	wp_enqueue_script( 'jquery' );	
	wp_enqueue_script( 'ltr_scripts1' );

} 