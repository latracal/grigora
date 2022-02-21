<?php

add_action( 'customize_register', 'my_customize_register' );

function my_customize_register($wp_customize) {
    class grg_customize_width_range_control extends WP_Customize_Control {
        public $type = 'range';

        public function enqueue() {
			wp_enqueue_style( 'grigora-customizer-css', get_template_directory_uri() . '/dist/css/customizer.min.css', array(), grg_VERSION, 'all' );
            wp_enqueue_style( 'grigora-customize-promo', get_template_directory_uri() . '/dist/css/grigora-customize-promo.min.css', array(), grg_VERSION, 'all' );
		}

        public function render_content() {
        ?>
<label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <div class="grg-range-picker">
        <input type="range" class="range slider" min="<?php echo esc_html($this->input_attrs['min']); ?>"
            max="<?php echo esc_html($this->input_attrs['max']); ?>" value="<?php echo esc_html($this->value()); ?>"
            <?php $this->link(); ?>>
        <div class="unit">
            <input type="number" class="number" min="<?php echo esc_html($this->input_attrs['min']); ?>"
                max="<?php echo esc_html($this->input_attrs['max']); ?>" value="<?php echo esc_html($this->value()); ?>"
                <?php $this->link(); ?>><span class="px">PX</span>
        </div>
    </div>
</label>
<?php
        }
    }


    class grg_customize_color_control extends WP_Customize_Control {
        public $type = 'text';

        public function enqueue() {
            wp_enqueue_style( 'grigora-color-picker-css', get_template_directory_uri() . '/dist/css/spectrumcolorpicker.min.css', array(), grg_VERSION, 'all' );
			wp_enqueue_script( 'grigora-color-picker-external', get_template_directory_uri() . '/js/spectrumcolorpicker.min.js', array(), grg_VERSION, true );
			wp_enqueue_script( 'grigora-color-picker-js', get_template_directory_uri() . '/js/color-picker.js',  array(), grg_VERSION, true  );
		}

        public function render_content() {
        ?>
<div class="grigora-custom-color-picker">
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <input id="color-picker" class="color-picker" value='<?php $this->value(); ?>' <?php $this->link(); ?> />
</div>
<?php
        }
    }

    class grg_big_text extends WP_Customize_Control {
        public $type = 'text';

        public function enqueue() {
            wp_enqueue_style( 'grigora-big-text-css', get_template_directory_uri() . '/dist/css/customizer.min.css', array(), grg_VERSION, 'all' );
		}

        public function render_content() {
        ?>
<div class="grigora-custom-big-text">
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea id="footer-text" class="footer-text" value='<?php $this->value(); ?>'
        <?php $this->link(); ?> /></textarea>
    <p><code>[grg_year]</code> to update year automatically.</p>
    <p><code>[blog_name]</code> to add blog name.</p>
    <p><code>[copy]</code> to add copyright symbol.</p>
    <p>HTML & Shortcodes are allowed.</p>
</div>
<?php
        }
    }


    class grg_custom_html extends WP_Customize_Control {
        public $type = 'text';

        public function render_content() {
        ?>
<div class="custom-customizer-text">
    <?php echo $this->input_attrs['html'] ?>
</div>
<?php
        }
    }

    class grg_checkbox extends WP_Customize_Control {
        public $type = 'checkbox';

        public function enqueue() {
            wp_enqueue_style( 'grigora-customizer-css', get_template_directory_uri() . '/dist/css/customizer.min.css', array(), grg_VERSION, 'all' );
		}

        public function render_content() {
        ?>
<div class="grigora-custom-checkbox">
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <div class="grigora-custom">
        <input type="checkbox" id="footer-text" class="checkbox" value='<?php $this->value(); ?>'
            <?php $this->link(); ?> /></input><span class="knob"></span><span class="layer"></span>
    </div>
</div>
<?php
        }
    }
}