<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php get_header(); ?>

<section class="not-found">
    <h2><?php echo esc_html( __( "Error 404!", "grg" )); ?></h2>
    <h4><?php echo esc_html( __( "The page you requested does not exist or has moved.", "grg" )); ?></h4>
</section>

<?php get_footer(); ?>