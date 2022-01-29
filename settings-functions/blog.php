<?php
if (grigora_get_option("blog")){
    function grigora_custom_excerpt_length( $length ) {
        return get_theme_mod( 'grg_blog_archive_excerpt_words' , grigora_blog_defaults()['grg_blog_archive_excerpt_words']);
    }
    add_filter( 'excerpt_length', 'grigora_custom_excerpt_length', 999 );
}