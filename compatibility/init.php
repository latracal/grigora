<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<?php


if(class_exists( 'WooCommerce' )){
    include( get_theme_file_path( '/compatibility/woocommerce/woocommerce-compat.php' ) );
}