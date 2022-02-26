<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Import woocommerce modules
 *
 * @since  1.001
 * 
 */
if(class_exists( 'WooCommerce' )){
    include( get_theme_file_path( '/compatibility/woocommerce/woocommerce-compat.php' ) );
}