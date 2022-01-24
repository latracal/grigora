<?php

if ( ! function_exists( 'girgora_options_menu' ) ) {
    function girgora_options_menu() {
        add_theme_page( 'grigora-options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

function custom_do_settings_fields($page, $section) {
    global $wp_settings_fields;

    if ( !isset($wp_settings_fields) ||
         !isset($wp_settings_fields[$page]) ||
         !isset($wp_settings_fields[$page][$section]) )
        return;

    foreach ( (array) $wp_settings_fields[$page][$section] as $field ) {
        echo '<div class="settings-form-row">';
            echo '<div class="settings-form-row-label">';
                if ( !empty($field['args']['label_for']) ){
                    echo '<p><label for="' . $field['args']['label_for'] . '">' .
                        $field['title'] . '</label><br />';                   
                }
                else{
                    echo '<p>' . $field['title'] . '<br />';
                }
            echo '</div>';
            echo '<div class="settings-form-row-callback">';
                call_user_func($field['callback'], $field['args']);
            echo '</div>';
        echo '</p></div>';
    }
}

// add_filter( 'do_settings_fields' , 'custom_do_settings_fields' );

if ( ! function_exists( 'grigora_options_page' ) ) {
    function grigora_options_page() {
        wp_enqueue_style( 'theme-options', get_template_directory_uri() . '/dist/css/admin-options.css' );
        wp_enqueue_script( 'theme-options', get_template_directory_uri() . '/js/admin-options.js' ); 
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<div class="admin-container">';
        settings_errors();
        ?>
<div class="setting-title">
    <h1>Grigora</h1>
</div>
<form action="options.php" method="post" class="customizer">
    <h2>Customizer Options</h2>
    <?php
            settings_fields("grigora_customizer_section");
            custom_do_settings_fields("grigora-options", "grigora_customizer_section");
            submit_button();
        ?>
</form>
<form action="options.php" method="post" class="customizer">
    <h2>Performance</h2>
    <p>Performance Info Text</p>
    <?php
            settings_fields("grigora_performance_section");
            custom_do_settings_fields("grigora-options", "grigora_performance_section");
            submit_button();
        ?>
</form>
</div>
<?php
    }
}

add_action( 'admin_menu', 'girgora_options_menu' );
 
function grigora_customize_settings_section() {
 	add_settings_section(
		'grigora_customizer_section',
		'Customizer Options',
		'grigora_customizer_section_callback_function',
		'grigora-options'
	);

 	add_settings_field(
		'grigora_customizer_section_colors',
		'Colors',
		'grigora_customizer_section_colors_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_colors' );

    add_settings_field(
		'grigora_customizer_section_background',
		'Background',
		'grigora_customizer_section_background_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_background' );

    add_settings_field(
		'grigora_customizer_section_typography',
		'Typography',
		'grigora_customizer_section_typography_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_typography' );

    add_settings_field(
		'grigora_customizer_section_spacing',
		'Spacing',
		'grigora_customizer_section_spacing_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_spacing' );

    add_settings_field(
		'grigora_customizer_section_blog',
		'Blog Layout',
		'grigora_customizer_section_blog_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_blog' );

    add_settings_field(
		'grigora_customizer_section_toc',
		'Table Of Contents',
		'grigora_customizer_section_toc_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 	register_setting( 'grigora_customizer_section', 'grigora_customizer_section_toc' );

    add_settings_field(
		'grigora_customizer_section_scroll',
		'Scroll To Top',
		'grigora_customizer_section_scroll_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    register_setting( 'grigora_customizer_section', 'grigora_customizer_section_scroll' );

 }
 
 add_action( 'admin_init', 'grigora_customize_settings_section' );
 
 function grigora_performance_settings_section() {
    add_settings_section(
       'grigora_performance_section',
       'Performance',
       'grigora_performance_section_callback_function',
       'grigora-options'
   );

    add_settings_field(
       'grigora_performance_section_emoji',
       'Disable Emojis',
       'grigora_performance_section_emoji_callback_function',
       'grigora-options',
       'grigora_performance_section'
   );

    register_setting( 'grigora_performance_section', 'grigora_performance_section_emoji' );

}

add_action( 'admin_init', 'grigora_performance_settings_section' );


function grigora_customizer_section_callback_function() {
 	echo '<p>Customizer Settings Text</p>';
 }

 function grigora_performance_section_callback_function() {
    echo '<p>Performance Settings Text</p>';
}
 
function grigora_customizer_section_colors_callback_function() {
 	echo '<input name="grigora_customizer_section_colors" id="grigora_customizer_section_colors" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_colors' ), false ) . ' /><span class="slide circle"></span>';
 }
 function grigora_customizer_section_background_callback_function() {
    echo '<input name="grigora_customizer_section_background" id="grigora_customizer_section_background" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_background' ), false ) . ' /><span class="slide circle"></span>';
}
function grigora_customizer_section_typography_callback_function() {
    echo '<input name="grigora_customizer_section_typography" id="grigora_customizer_section_typography" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_typography' ), false ) . ' /><span class="slide circle"></span>';
}
function grigora_customizer_section_spacing_callback_function() {
    echo '<input name="grigora_customizer_section_spacing" id="grigora_customizer_section_spacing" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_spacing' ), false ) . ' /><span class="slide circle"></span>';
}
function grigora_customizer_section_blog_callback_function() {
    echo '<input name="grigora_customizer_section_blog" id="grigora_customizer_section_blog" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_blog' ), false ) . ' /><span class="slide circle"></span>';
}
function grigora_customizer_section_toc_callback_function() {
    echo '<input name="grigora_customizer_section_toc" id="grigora_customizer_section_toc" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_toc' ), false ) . ' /><span class="slide circle"></span>';
}
function grigora_customizer_section_scroll_callback_function() {
    echo '<input name="grigora_customizer_section_scroll" id="grigora_customizer_section_scroll" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_customizer_section_scroll' ), false ) . ' /><span class="slide circle"></span>';
}
 
function grigora_performance_section_emoji_callback_function() {
    echo '<input name="grigora_performance_section_emoji" id="grigora_performance_section_emoji" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'grigora_performance_section_emoji' ), false ) . ' /><span class="slide circle"></span>';
}
 
 ?>