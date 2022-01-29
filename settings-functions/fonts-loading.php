<?php

if (grigora_get_option("typography") && function_exists('google_fonts')){

    function grigora_add_google_fonts() {
        $mods = array();
        foreach(grigora_typography_defaults_fonts() as $key => $font){
            array_push($mods, get_theme_mod($key, $font));
        }

        $mods = array_unique($mods);
        $font_request = 'https://fonts.googleapis.com/css?family=';
        foreach ($mods as $key => $font) {
            $font_request = $font_request.google_fonts()[$font].'|';
        }
        wp_enqueue_style( 'grigora-google-fonts', $font_request, false ); 
    }
         
    add_action( 'wp_enqueue_scripts', 'grigora_add_google_fonts' );

}