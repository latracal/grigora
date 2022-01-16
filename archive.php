<?php

get_header();

?>

<?php


    if ( $the_query->have_posts() ) {
        
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('template-parts/posts/content');
        }
        
    }

?>

<?php get_footer(); ?>