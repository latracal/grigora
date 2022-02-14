<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<?php

if (grigora_get_option("typography") && function_exists('google_fonts')){

    /**
     * Import used Google Fonts
     *
     * @since  1.000
     * 
     */

    function grigora_add_google_fonts() {

        if(grigora_get_option("localfonts")){
            require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
        }
        
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
            if(!grigora_get_option("localfonts")){
                wp_enqueue_style( 'grigora-google-fonts', $font_request, false ); 
            }
            else{
                wp_enqueue_style( 'grigora-google-fonts', wptt_get_webfont_url(esc_url_raw($font_request)), false ); 
            }
        }
        
    }
         
    add_action( 'wp_enqueue_scripts', 'grigora_add_google_fonts' );

}