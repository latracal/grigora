<?php

function grg_blogname( $atts ) {
    return get_bloginfo('name');
}

function grg_copysym( $atts ) {
    return "©";
}

function grg_curr_year( $atts ) {
    return date('Y');
}

add_shortcode('blog_name', 'grg_blogname');
add_shortcode('grg_year', 'grg_curr_year');
add_shortcode('copy', 'grg_copysym');