<?php


// custom div using hooks

add_action( 'woocommerce_before_main_content', 'wcm_container_open', 5 );
add_action( 'dynamic_sidebar_after', 'wcm_container_close', 5 );