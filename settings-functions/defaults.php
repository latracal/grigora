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
			)
		);
	}
}