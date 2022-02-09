<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php

/**
 * Shortcode for blogname
 *
 * @since  1.000
 * 
 * @return str blogname
 * 
 */
function grg_blogname( $atts ) {
    return get_bloginfo('name');
}

/**
 * Shortcode for copyright symbol
 *
 * @since  1.000
 * 
 * @return str copyright symbol
 * 
 */
function grg_copysym( $atts ) {
    return "©";
}

/**
 * Shortcode for current year
 *
 * @since  1.000
 * 
 * @return str year
 * 
 */
function grg_curr_year( $atts ) {
    return date('Y');
}

add_shortcode('blog_name', 'grg_blogname');
add_shortcode('grg_year', 'grg_curr_year');
add_shortcode('copy', 'grg_copysym');