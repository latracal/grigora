<?php


// custom div using hooks

add_action( 'woocommerce_before_main_content', 'wcm_container_open', 5 );
add_action( 'dynamic_sidebar_after', 'wcm_container_close', 5 );
add_action('woocommerce_before_shop_loop', 'wcm_product_open', 10);
add_action('loop_start', 'wcm_product_close', 1); 