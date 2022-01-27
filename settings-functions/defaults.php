<?php

if ( ! function_exists( 'grigora_get_defaults' ) ) {
	function grigora_get_defaults() {
		return apply_filters(
			'grigora_option_defaults',
			array(
				'color' => 0,
				'background' => 0,
				'typography' => 0,
				'spacing' => 0,
				'blog' => 0,
				'toc' => 0,
				'scroll' => 0,
				'popup' => 0,
				'procontable' => 0,
				'emoji' => 0,
				'embeds' => 0,
				'xmlrpc' => 0,
				'jquery' => 0,
				'dashicons' => 0,
				'hidewpversion' => 0,
				'colordefaultsset' => 0,
			)
		);
	}
}

if ( ! function_exists( 'grigora_color_defaults' ) ) {
	function grigora_color_defaults() {
			return array(
				'grg_bg-color' => '#f2f2f2',
				'grg_header_bg-color' => '#e9e9e9',
				'grg_header_menu_bg-color' => '#c4c4c4',
				'grg_header_text-color' => '#000',
				'grg_footer_menu_bg-color' => '#e9e9e9',
				'grg_footer_bg-color' => '#c4c4c4',
				'grg_footer_text-color' => '#000',
				'grg_text-color' => '#000',
				'grg_anchor-text-color' => '#0170b9',
				'grg_anchor-text-hover-color' => '#0170b9',
				'grg_btn-color' => '#c4c4c4',
				'grg_btn-text-color' => '#000',				
				'grg_h1-tag-color' => '#000',				
				'grg_h2-tag-color' => '#000',				
				'grg_h3-tag-color' => '#000',				
				'grg_h4-tag-color' => '#000',				
				'grg_h5-tag-color' => '#000',				
				'grg_h6-tag-color' => '#000',				
				'grg_breadcrumb-color' => '#454545',				
			);
	}
}