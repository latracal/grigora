<?php

if (grigora_get_option("typography") && function_exists('google_fonts')){

    /**
     * Import used Google Fonts
     *
     * @since  1.000
     * 
     */

    function grigora_add_google_fonts() {
        $safewebfonts = array(
            "Arial",
            "Times New Roman",
            "Times",
            "Courier New",
            "Courier",
            "Verdana",
            "Georgia",
            "Palatino",
            "Garamond",
            "Bookman",
            "Tahoma",
            "Trebuchet MS",
            "Arial Black",
            "Impact",
            "Comic Sans MS"
        );
        $mods = array();
        foreach(grigora_typography_defaults_fonts() as $key => $font){
            array_push($mods, get_theme_mod($key, $font));
        }
        $count = 0;
        $mods = array_unique($mods);
        $font_request = 'https://fonts.googleapis.com/css?family=';
        foreach ($mods as $key => $font) {
            if(!in_array($font, $safewebfonts)){
                $font_request = $font_request.google_fonts()[$font].'|';
                $count++;
            }
        }
        if($count>0){
            $font_request = $font_request.'&display=fallback';
            wp_enqueue_style( 'grigora-google-fonts', $font_request, false ); 
        }
        
    }
         
    add_action( 'wp_enqueue_scripts', 'grigora_add_google_fonts' );

}