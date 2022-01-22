<?php

if ( ! function_exists( 'grigora_options_customizer_options_settings' ) ) {
    function grigora_options_customizer_options_settings() {
        add_settings_section(
            "grigora_options_customizer_options_settings_section", // id of settings section
            "Grigora Customize Options", // title
            'grigora_options_customize_section_callback', // callback function
            "grigora-options" // page 
        );
        add_settings_field(
            "girgora_customizer_option",
            "Customizer On Off",
            "girgora_customizer_option",
            "grigora-options",
            "grigora_options_customizer_options_settings_section"
         );
        register_setting("grigora_options_customizer_options_settings_section","girgora_customizer_option");
    }
    add_action("admin_init", "grigora_options_customizer_options_settings");
}


function grigora_options_customize_section_callback(){
    ?>
        section
    <?php
}

?>