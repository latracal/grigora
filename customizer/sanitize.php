<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

if(!function_exists('grg_sanitize_select')){
	//select sanitization function
	function grg_sanitize_select( $input, $setting ){
			
		$input = sanitize_key($input);

		$choices = $setting->manager->get_control( $setting->id )->choices;
						
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
		
	}
}

if(!function_exists('grg_sanitize_range')){
	//select sanitization function
	function grg_sanitize_range( $input, $setting ){
			
		$input = sanitize_key($input);

		$choices = $setting->manager->get_control( $setting->id )->choices;
						
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
		
	}
}