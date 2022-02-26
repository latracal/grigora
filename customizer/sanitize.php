<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Select sanitize
 *
 * @since  1.001
 * 
 */
if(!function_exists('grg_sanitize_select')){
	//select sanitization function
	function grg_sanitize_select( $input, $setting ){
		$choices = $setting->manager->get_control( $setting->id )->choices;
		return array_key_exists( $input, $choices ) ? $input : $setting->default ;                
		
	}
}


/**
 * Checkbox sanitize
 *
 * @since  1.001
 * 
 */
if(!function_exists('grg_sanitize_checkbox')){
	//checkbox sanitization function
	function grg_sanitize_checkbox( $input ){
        if($input){
			return 1;
		}
		return 0;
	}
}


/**
 * Dummy variable sanitize
 *
 * @since  1.001
 * 
 */
if(!function_exists('grg_dummy_promo')){
	//dummy variable sanitization
	function grg_dummy_promo( $input ){
              
		return '';
		
	}
}