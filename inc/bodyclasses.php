<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
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