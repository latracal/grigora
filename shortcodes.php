<?php

function grg_blogname( $atts ) {
    return get_bloginfo('name');
}

add_shortcode('blog_name', 'grg_blogname');