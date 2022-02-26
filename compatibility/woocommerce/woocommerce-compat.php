<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Remove default wrappers
 *
 * @since  1.001
 * 
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Add grigora wrappers
 *
 * @since  1.001
 * 
 */
add_action( 'woocommerce_before_main_content', 'grg_main_container_open', 5 );
add_action( 'woocommerce_after_main_content', 'grg_main_container_close', 5 );
add_action( 'woocommerce_sidebar', 'grg_render_sidebar' );
	 
/**
 * Custom wrapper for container open
 *
 * @since  1.001
 * 
 */
function grg_main_container_open(){
    echo '<div class="container"><section class="post-content"><article class="woocommerce-page" itemtype="'.grg_get_schema_tag('creativework')['itemtype'].'"
    itemscope="'.grg_get_schema_tag('creativework')['itemscope'].'" >';
}

/**
 * Custom wrapper for container close
 *
 * @since  1.001
 * 
 */
function grg_main_container_close(){
    echo '</article></section>';
}

/**
 * Render sidebar
 *
 * @since  1.001
 * 
 */
function grg_render_sidebar(){
    get_sidebar();
}

/**
 * Grigora woocommerce css
 *
 * @since  1.001
 * 
 */
function grigora_wcm_css(){
    $out = "
    .orderby{
        padding: .5rem;
        border:1px solid #aaaaaa;
        background-color: #fff;
    }

    .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea{
        padding: .5rem;
        border:1px solid #aaaaaa;
    }

    .woocommerce-MyAccount-navigation ul{
        list-style:none;
        border:1px solid #aaaaaa;
        border-radius:5px;
    }

    li.woocommerce-MyAccount-navigation-link {
        padding: .5rem;
        border-bottom:1px solid #aaaaaa;
    }

    li.woocommerce-MyAccount-navigation-link:last-child {        
        border-bottom:none;
    }

    li.woocommerce-MyAccount-navigation-link a {
        text-decoration:none;
        padding: .5rem 0;
    }

    .woocommerce .quantity .qty{
        padding: .5rem;
        border:1px solid #aaaaaa;
        margin-top: 0;
    }    

    .woocommerce div.product form.cart .variations select{
        padding: .5rem;
        margin-bottom: 1rem;
        border:1px solid #aaaaaa;
        background-color:#fff;
    }
    ";
    
    return $out;
}