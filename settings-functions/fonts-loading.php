<?php

if (grigora_get_option("typography") && function_exists('google_fonts')){

    function grigora_add_google_fonts() {

        $mods = get_theme_mods();

        if(!$mods){
            $mods = array();
        }

        $all_fonts = array();

        foreach(grigora_typography_defaults_fonts() as $mod => $font) {
            if(array_key_exists($mod, $mods)){
                array_push($all_fonts, $mods[$mod]);
            }
            else{
                array_push($all_fonts, $font);
            }
        }
        $all_fonts = array_unique($all_fonts);
        $font_request = 'https://fonts.googleapis.com/css?family=';
        foreach ($all_fonts as $font) {
            $font_request = $font_request.google_fonts()[$font].'|';
        }
        wp_enqueue_style( 'grigora-google-fonts', $font_request, false ); 
    }
         
    add_action( 'wp_enqueue_scripts', 'grigora_add_google_fonts' );

}