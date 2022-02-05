<?php


// custom div using hooks
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_before_main_content', 'grg_main_container_open', 5 );
add_action( 'woocommerce_after_main_content', 'grg_main_container_close', 5 );
add_action( 'woocommerce_sidebar', 'grg_render_sidebar' );

// add_action( 'dynamic_sidebar_after', 'wcm_container_close', 5 );


function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}	 

function grg_main_container_open(){
    echo '<div class="container"><section class="post-content"><article class="single-post" itemtype="'.grg_get_schema_tag('creativework')['itemtype'].'"
    itemscope="'.grg_get_schema_tag('creativework')['itemscope'].'" >';
}

function grg_main_container_close(){
    echo '</article></section>';
}

function grg_render_sidebar(){
    get_sidebar();
}

