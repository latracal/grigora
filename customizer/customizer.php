<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}
/**
 * Free customization options
 * 
 * @since  1.001
 * 
 */
if(!is_grigora_pro_active()){
    include( get_theme_file_path( '/customizer/grigora-custom-customizers.php' ) );
    include( get_theme_file_path( '/customizer/accordian.php' ) );
    include( get_theme_file_path( '/customizer/sanitize.php' ) );
    include( get_theme_file_path( '/customizer/panels.php' ) );

}