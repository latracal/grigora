<?php

if ( ! function_exists( 'girgora_options_menu' ) ) {
    function girgora_options_menu() {
        add_theme_page( 'grigora-options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

function is_grigora_pro_active(){
    return function_exists("grigora_pro_active");
}


function grigora_get_option( $option ) {

	$defaults = grigora_get_defaults();

	$options = wp_parse_args(
		get_option( 'grigora_settings', array() ),
		$defaults
	);

	return $options[$option];
}

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
<?php 
    if ( !is_grigora_pro_active() ) {
        echo '<div class="pro-notification"><p>Activate All Powerful Options By Purchasing Girgora Pro </p><button class="pro-btn">Buy Now</button></div>';
    }
?>
<div class="grigora-settings">
    <div class="tab">
        <button class="tab-btn" onclick="controlName(event, 'c-options')" id="default">Customizer
            Options</button>
        <button class="tab-btn" onclick="controlName(event, 'performance')">Performance</button>
    </div>
    <div class="tab-content">
        <form action="options.php" method="post" class="customizer <?php echo (is_grigora_pro_active() ? '' : 'disabled') ?>" id="c-options">
            <h2 class="section-title">Customizer Options</h2>
            <?php
            settings_fields("grigora_settings");
            do_settings_sections("grigora-options");
            submit_button();
        ?>
        </form>
        <div class="other">

</div>
</div>
</div>
<?php
    }
}

add_action( 'admin_menu', 'girgora_options_menu' );

register_setting( 'grigora_settings', 'grigora_settings' );

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

    add_settings_field(
		'grigora_customizer_section_background',
		'Background',
		'grigora_customizer_section_background_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_typography',
		'Typography',
		'grigora_customizer_section_typography_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_spacing',
		'Spacing',
		'grigora_customizer_section_spacing_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_blog',
		'Blog Layout',
		'grigora_customizer_section_blog_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_toc',
		'Table Of Contents',
		'grigora_customizer_section_toc_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_scroll',
		'Scroll To Top',
		'grigora_customizer_section_scroll_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_popup',
		'Pop Ups',
		'grigora_customizer_section_popup_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_procontable',
		'Pros Cons Table',
		'grigora_customizer_section_procontable_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

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

    add_settings_field(
        'grigora_performance_section_embeds',
        'Disable Embeds',
        'grigora_performance_section_embeds_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_xmlrpc',
        'Disable XML RPC',
        'grigora_performance_section_xmlrpc_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_jquery',
        'Disable Jquery',
        'grigora_performance_section_jquery_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_dashicons',
        'Disable Dashicons',
        'grigora_performance_section_dashicons_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_hidewpversion',
        'Hide WP Version',
        'grigora_performance_section_hidewpversion_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

}

add_action( 'admin_init', 'grigora_performance_settings_section' );

function grigora_customizer_section_callback_function() {
 	echo '<p>Customizer Settings Text</p>';
 }

function grigora_performance_section_callback_function() {
    echo '<p>Performance Settings Text</p>';
}

function grigora_customizer_section_colors_callback_function() {
 	echo '<input name="grigora_settings[color]" id="grigora_settings[color]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['color'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_background_callback_function() {
    echo '<input name="grigora_settings[background]" id="grigora_settings[background]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['background'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_typography_callback_function() {
    echo '<input name="grigora_settings[typography]" id="grigora_settings[typography]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['typography'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_spacing_callback_function() {
    echo '<input name="grigora_settings[spacing]" id="grigora_settings[spacing]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['spacing'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_blog_callback_function() {
    echo '<input name="grigora_settings[blog]" id="grigora_settings[blog]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['blog'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_toc_callback_function() {
    echo '<input name="grigora_settings[toc]" id="grigora_settings[toc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['toc'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_scroll_callback_function() {
    echo '<input name="grigora_settings[scroll]" id="grigora_settings[scroll]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['scroll'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_popup_callback_function() {
    echo '<input name="grigora_settings[popup]" id="grigora_settings[popup]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['popup'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_procontable_callback_function() {
    echo '<input name="grigora_settings[procontable]" id="grigora_settings[procontable]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['procontable'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_emoji_callback_function() {
    echo '<input name="grigora_settings[emoji]" id="grigora_settings[emoji]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['emoji'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_embeds_callback_function() {
    echo '<input name="grigora_settings[embeds]" id="grigora_settings[embeds]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['embeds'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_xmlrpc_callback_function() {
    echo '<input name="grigora_settings[xmlrpc]" id="grigora_settings[xmlrpc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['xmlrpc'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquery_callback_function() {
    echo '<input name="grigora_settings[jquery]" id="grigora_settings[jquery]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['jquery'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_dashicons_callback_function() {
    echo '<input name="grigora_settings[dashicons]" id="grigora_settings[dashicons]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['dashicons'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_hidewpversion_callback_function() {
    echo '<input name="grigora_settings[hidewpversion]" id="grigora_settings[hidewpversion]" type="checkbox" value="1" class="checkbox" ' . checked( 1, get_option( 'grigora_settings' )['hidewpversion'], false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
