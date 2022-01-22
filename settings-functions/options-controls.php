<?php

if ( ! function_exists( 'girgora_options_menu' ) ) {
    function girgora_options_menu() {
        add_theme_page( 'Grigora Options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

if ( ! function_exists( 'grigora_options_page' ) ) {
    function grigora_options_page() {
        wp_enqueue_style( 'theme-options', get_template_directory_uri() . '/dist/css/admin-options.css' );
        wp_enqueue_script( 'theme-options', get_template_directory_uri() . '/js/admin-options.js' ); 
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<div class="admin-container">';

        grigora_options_page_elements();

        echo '</div>';
    }
}

if ( ! function_exists( 'grigora_options_page_elements' ) ) {
    function grigora_options_page_elements() {?>
        <div class="button-cover">
            <div class="button-box r" id="button-8">
                <input type="checkbox" class="checkbox-custom">
                <div class="knobs">
                    <span></span>
                </div>
                <div class="layer"></div>
            </div>
        </div>
    <?php }
}

add_action( 'admin_menu', 'girgora_options_menu' );

?>