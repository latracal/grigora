<?php

if ( ! function_exists( 'grigora_get_defaults' ) ) {

	/**
	 * Predefined default values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array values
	 */
	
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
				'cookie' => 0,
				'popup' => 0,
				'procontable' => 0,
				'emoji' => 0,
				'embeds' => 0,
				'xmlrpc' => 0,
				'jquerymigrate' => 0,
				'jquery' => 0,
				'dashicons' => 0,
				'hidewpversion' => 0,
				'minify' => 0,
				'dynamicexternal' => 0,
				'colordefaultsset' => 0,
			)
		);
	}
}

if ( ! function_exists( 'grigora_color_defaults' ) ) {
	
	/**
	 * Predefined default color values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array color values
	 */

	function grigora_color_defaults() {
			return array(
				'grg_bg-color' => '#f2f2f2',
				'grg_header_bg-color' => '#e9e9e9',
				'grg_header_menu_bg-color' => '#c4c4c4',
				'grg_header_submenu_bg-color' => '#c4c4c4',
				'grg_header_searchbox_bg-color' => '#c4c4c4',
				'grg_header_text-color' => '#000',
				'grg_menu_text-color' => '#000',
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
				'grg_comment_title_colors' => '#000',				
				'grg_comment_text_colors' => '#000',				
				'grg_comment_date_colors' => '#7b7b7b',				
				'grg_comment_reply_colors' => '#c4c4c4',				
				'grg_comment_reply_text_colors' => '#000',				
				'grg_related_post_title_colors' => '#000',				
				'grg_related_post_title_hover_colors' => '#000',				
				'grg_post_nav_colors' => '#c4c4c4',				
				'grg_post_nav_text_colors' => '#000',				
				'grg_scroll_colors' => '#c4c4c4',				
				'grg_scroll_icon_colors' => '#000',		
				'grg_colors_toc_background'=> '#fff',
				'grg_colors_toc_border'=> '#aaaaaa',
				'grg_colors_toc_title'=> '#000',
				'grg_colors_toc_links'=> '#0170b9',
				'grg_colors_toc_links_hover'=> '#0170b9',
				'grg_colors_toc_links_visited'	=> '#0170b9',	
				'grg_colors_toc_toggle'	=> '#0170b9',	
				'grg_colors_cookie_background' => '#fff',
				'grg_colors_cookie_text' => '#000',
				'grg_colors_cookie_button_background' => '#025640',
				'grg_colors_cookie_button_text' => '#fff',
			);
	}

	/**
	 * Predefined default spacing values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array spacing values
	 */

	function grigora_spacing_defaults() {
		return array(
			'grg_header-height' => '155',
			'grg_header_style' => 'style1',
			'grg_header_image_height' => 100,
			'grg_header_image_height_mobile' => 80,	
			'grg_sidebar-alignment' => 'row',		
			'grg_sidebar-width' => '30',	
			'grg_sidebar-padding' => 15,
			'grg_container-width'=> '1366',		
			'grg_container-top-padding'=> '0',		
			'grg_container-right-padding'=> '0',		
			'grg_container-bottom-padding'=> '0',		
			'grg_container-left-padding'=> '0',
			'grg_toc_location' => 'firstheading',
			'grg_toc_heading2' => 1,
			'grg_toc_heading3' => 1,
			'grg_toc_heading4' => 1,
			'grg_toc_heading5' => 1,
			'grg_toc_heading6' => 1,
			'grg_footer_text' => 'Copyright [copy] [grg_year] | [blog_name] | Built with&nbsp;<a href="https://wpgrigora.com/">Grigora</a>',
			'grg_cookie_text' => 'This website uses cookies to provide necessary website functionality, improve your experience and analyze our traffic. By using our website, you agree to our Privacy Policy and our cookies usage.'
		);
	}

	/**
	 * Predefined default scroll values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array scroll values
	 */

	function grigora_scroll_defaults() {
		return array(
			'grg_scrollborder' => '5',
			'grg_scrolliconsize' => '13',
			'grg_scroll-position' => 'right',
			'grg_scroll-display' => 'both'
		);
	}

	/**
	 * Predefined default typography font values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array typography font values
	 */

	function grigora_typography_defaults_fonts() {
		return array(
			"grg_typography_body_font" => "Verdana",
			"grg_typography_site_title_font" => "Arial",
			"grg_typography_site_desc_font" => "Arial",
			"grg_typography_site_menu_font" => "Verdana",
			"grg_typography_button_font" => "Verdana",
			"grg_typography_h1_font" => "Arial",
			"grg_typography_h2_font" => "Arial",
			"grg_typography_h3_font" => "Arial",
			"grg_typography_h4_font" => "Arial",
			"grg_typography_h5_font" => "Arial",
			"grg_typography_h6_font" => "Arial",
			"grg_typography_footer_font" => "Verdana",
		);
	}

	/**
	 * Predefined default typography values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array typography values
	 */

	function grigora_typography_defaults() {
		return array(
			"grg_typography_body_weight" => "500",
			"grg_typography_body_font_size" => "18",
			"grg_typography_site_title_weight" => "700",
			"grg_typography_site_title_size" => "30",
			"grg_typography_site_desc_weight" => "500",
			"grg_typography_site_desc_size" => "25",
			"grg_typography_site_menu_weight" => "500",
			"grg_typography_site_menu_size" => "18",
			"grg_typography_button_weight" => "500",
			"grg_typography_button_size" => "18",
			"grg_typography_h1_weight" => "700",
			"grg_typography_h1_size" => "25",
			"grg_typography_h2_weight" => "700",
			"grg_typography_h2_size" => "24",
			"grg_typography_h3_weight" => "700",
			"grg_typography_h3_size" => "23",
			"grg_typography_h4_weight" => "700",
			"grg_typography_h4_size" => "22",
			"grg_typography_h5_weight" => "700",
			"grg_typography_h5_size" => "21",
			"grg_typography_h6_weight" => "700",
			"grg_typography_h6_size" => "20",
			"grg_typography_footer_weight" => "500",
			"grg_typography_footer_size" => "18",
			"grg_typography_body_font_transform" => "none",
			"grg_typography_site_title_transform" => "none",
			"grg_typography_site_desc_transform" => "none",
			"grg_typography_site_menu_transform" => "none",
			"grg_typography_button_transform" => "none",
			"grg_typography_h1_transform" => "none",
			"grg_typography_h2_transform" => "none",
			"grg_typography_h3_transform" => "none",
			"grg_typography_h4_transform" => "none",
			"grg_typography_h5_transform" => "none",
			"grg_typography_h6_transform" => "none",
			"grg_typography_footer_transform" => "none",
		);
	}

	/**
	 * Predefined default blogpage values that will used in customizer settings.
	 * 
	 * @since  1.000
	 * 
	 * @return array blogpage values
	 */

	function grigora_blog_defaults(){
		return array(
			"grg_blog_archive_excerpt_words" => 55,
			"grg_blog_archive_read_more_display" => 1,
			"grg_blog_archive_read_more" => "Read More",
			"grg_blog_archive_date_display" => 1,
			"grg_blog_archive_author_display" => 1,
			"grg_blog_archive_image_display" => 1,
			"grg_blog_single_author_display" => 1,
			"grg_blog_single_date_display" => 1,
			"grg_blog_single_social_share" => 1,
			"grg_blog_single_category" => 1,
			"grg_blog_single_tag" => 1,
			"grg_blog_single_author_box" => 1,
			"grg_blog_single_related_posts" => 1,
			"grg_blog_single_postnav" => 1,
			"grg_blog_single_featuredim_loc" => "column",
			"grg_blog_single_featuredim_align" => "center",
		);
	}
}