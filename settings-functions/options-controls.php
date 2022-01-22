<?php

if ( ! function_exists( 'girgora_options_menu' ) ) {
    function girgora_options_menu() {
        add_theme_page( 'Grigora Options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

if ( ! function_exists( 'grigora_options_page' ) ) {
    function grigora_options_page() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<div class="wrap">';
        echo '<p>Hi everyone.</p>';
        echo '</div>';
    }
}

add_action( 'admin_menu', 'girgora_options_menu' );

?>