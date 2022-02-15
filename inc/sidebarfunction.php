<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register sidebar
 *
 * @since  1.000
 * 
 */
function grg_sidebar(){
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar', 'grigora' ),
            'description'   => __( 'Primary Sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}