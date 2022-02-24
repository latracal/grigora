<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Customize Promo Section
 * 
 * @since  1.001
 * 
 */
if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Grigora_Customize_Promo' ) ) {
    class Grigora_Customize_Promo extends WP_Customize_Section {

        public $type = 'grigora-customize-promo-section';

        public $id = '';
        public $promo_url = '';
        public $promo_text = '';

        public function json() {
			$json = parent::json();
            $json['id'] = $this->id;
			$json['promo_text'] = $this->promo_text;
			$json['promo_url']  = esc_url( $this->promo_url );
			return $json;
		}

        protected function render_template() {
			?>
			<li class="grigora-customize-promo cannot-expand accordion-section" id="accordion-section-{{ data.id }}">
				<h3><a href="{{{ data.promo_url }}}" target="_blank">{{ data.promo_text }}</a></h3>
			</li>
			<?php
		}
    }
}

/**
 * Enqueue CSS for Customize Promo
 * 
 * @since  1.001
 * 
 */
if ( ! function_exists( 'grigora_customize_promo_css' ) ) {
	add_action( 'customize_controls_enqueue_scripts', 'grigora_customize_promo_css' );


	function grigora_customize_promo_css() {
        wp_enqueue_style( 'grigora-customize-promo', get_template_directory_uri() . '/dist/css/grigora-customize-promo.min.css', array(), grg_VERSION, 'all' );

	}
}

/**
 * Register section and add setting in it
 * 
 * @since  1.001
 * 
 */
if ( ! function_exists( 'grigora_add_promo' ) ) {
    add_action( 'customize_register', 'grigora_add_promo', 20 );
    function grigora_add_promo( $wp_customize ) {

        if ( method_exists( $wp_customize, 'register_section_type' ) ) {
			$wp_customize->register_section_type( 'Grigora_Customize_Promo' );
		}

        $wp_customize->add_section(
            new Grigora_Customize_Promo(
                $wp_customize,
                'grigora-customize-promo-section',
                array(
                    'id' => "grigora-customize-promo-section",
                    'promo_text' => __( 'Get More Customization Options in Grigora Pro', 'grigora' ),
                    'promo_url' => 'https://wpgrigora.com/pro',
                    'capability' => 'edit_theme_options',
                    'type' => 'grigora-customize-promo-section',
                    'priority' => 0,
                )
            )
        );

        $wp_customize->add_setting(
			'grigora_promo_dummy',
            array(
                'default' => '',
                'sanitize_callback' => 'grg_dummy_promo'
            )
		);

        $wp_customize->add_control(
			'grigora_promo_dummy',
			array(
				'type' => 'checkbox',
				'label' => __( '', 'grigora' ),
				'section' => 'grigora-customize-promo-section',
				'priority' => 1,
			)
		);
    }
}