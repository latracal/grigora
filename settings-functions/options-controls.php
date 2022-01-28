<?php

if ( ! function_exists( 'girgora_options_menu' ) ) {
    function girgora_options_menu() {
        add_theme_page( 'grigora-options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

function is_grigora_pro_active(){
    return function_exists("grigora_pro_active");
}

function custom_do_settings_sections( $page ) {
    global $wp_settings_sections, $wp_settings_fields;
 
    if ( ! isset( $wp_settings_sections[ $page ] ) ) {
        return;
    }
 
    foreach ( (array) $wp_settings_sections[ $page ] as $section ) {
        echo "<div class='{$section['id']} customizer ". (is_grigora_pro_active() ? '' : 'disabled') ."'
id='{$section['id']}'>
";
if ( $section['title'] ) {
echo "<h2>{$section['title']}</h2>\n";
}

if ( $section['callback'] ) {
call_user_func( $section['callback'], $section );
}

if ( ! isset( $wp_settings_fields ) || ! isset( $wp_settings_fields[ $page ] ) || ! isset( $wp_settings_fields[ $page ][
$section['id'] ] ) ) {
continue;
}
echo '<table class="form-table" role="presentation">';
    do_settings_fields( $page, $section['id'] );
    echo '</table>';
echo '</div>';
}
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
if ( !current_user_can( 'manage_options' ) ) {
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
        <button class="tab-btn" onclick="controlName(event, 'grigora_customizer_section')" id="default">Customizer
            Options</button>
        <button class="tab-btn" onclick="controlName(event, 'grigora_performance_section')">Performance</button>
    </div>
    <div class="tab-content">
        <form action="options.php" method="post" class=" <?php echo (is_grigora_pro_active() ? '' : 'disabled') ?>">

            <?php
            settings_fields("grigora_settings");
            custom_do_settings_sections("grigora-options");
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

function grigora_set_default_colors(){
    if (!grigora_get_option("colordefaultsset")){
        $defaults = grigora_color_defaults();
        $mods = get_theme_mods();

        foreach($defaults as $k => $value){
            if(!$mods[$k]){
                set_theme_mod($k, $value);
            }
        }

        $my_options = get_option('grigora_settings');
        if(!$my_options){
            $my_options = array();
        }
        $my_options['colordefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

function grigora_set_default_spacing(){
    if (!grigora_get_option("spacingdefaultsset")){
        $defaults = grigora_spacing_defaults();
        $mods = get_theme_mods();

        foreach($defaults as $k => $value){
            if(!$mods[$k]){
                set_theme_mod($k, $value);
            }
        }

        $my_options = get_option('grigora_settings');
        if(!$my_options){
            $my_options = array();
        }
        $my_options['spacingdefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

function grigora_set_default_scroll(){
    if (!grigora_get_option("scrolldefaultsset")){
        $defaults = grigora_scroll_defaults();
        $mods = get_theme_mods();

        foreach($defaults as $k => $value){
            if(!$mods[$k]){
                set_theme_mod($k, $value);
            }
        }

        $my_options = get_option('grigora_settings');
        if(!$my_options){
            $my_options = array();
        }
        $my_options['scrolldefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

function grigora_set_default_typography_font(){
    if (!grigora_get_option("typographyfontdefaultsset")){
        $defaults = grigora_typography_defaults_fonts();
        $mods = get_theme_mods();

        foreach($defaults as $k => $value){
            if(!$mods[$k]){
                set_theme_mod($k, $value);
            }
        }

        $my_options = get_option('grigora_settings');
        if(!$my_options){
            $my_options = array();
        }
        $my_options['typographyfontdefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

function grigora_set_default_typography(){
    if (!grigora_get_option("typographydefaultsset")){
        $defaults = grigora_typography_defaults();
        $mods = get_theme_mods();

        foreach($defaults as $k => $value){
            if(!$mods[$k]){
                set_theme_mod($k, $value);
            }
        }

        $my_options = get_option('grigora_settings');
        if(!$my_options){
            $my_options = array();
        }
        $my_options['typographydefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

function grigora_customize_settings_section() {
    
    grigora_set_default_colors();
    grigora_set_default_spacing();
    grigora_set_default_scroll();
    grigora_set_default_typography_font();
    grigora_set_default_typography();

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
		'grigora_customizer_section_typography',
		'Typography',
		'grigora_customizer_section_typography_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_spacing',
		'Spacing/Layout',
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
        'grigora_performance_section_jquerymigrate',
        'Disable Jquery Migrate',
        'grigora_performance_section_jquerymigrate_callback_function',
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

}

add_action( 'admin_init', 'grigora_performance_settings_section' );

function grigora_customizer_section_callback_function() {
 	echo '<p>Customizer Settings Text</p>';
 }

function grigora_performance_section_callback_function() {
    echo '<p>Performance Settings Text</p>';
}

function grigora_customizer_section_colors_callback_function() {
 	echo '<input name="grigora_settings[color]" id="grigora_settings[color]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'color' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_typography_callback_function() {
    echo '<input name="grigora_settings[typography]" id="grigora_settings[typography]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'typography' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_spacing_callback_function() {
    echo '<input name="grigora_settings[spacing]" id="grigora_settings[spacing]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'spacing' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_blog_callback_function() {
    echo '<input name="grigora_settings[blog]" id="grigora_settings[blog]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'blog' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_toc_callback_function() {
    echo '<input name="grigora_settings[toc]" id="grigora_settings[toc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'toc' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_scroll_callback_function() {
    echo '<input name="grigora_settings[scroll]" id="grigora_settings[scroll]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'scroll' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_popup_callback_function() {
    echo '<input name="grigora_settings[popup]" id="grigora_settings[popup]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'popup' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_procontable_callback_function() {
    echo '<input name="grigora_settings[procontable]" id="grigora_settings[procontable]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'procontable' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_emoji_callback_function() {
    echo '<input name="grigora_settings[emoji]" id="grigora_settings[emoji]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'emoji' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_embeds_callback_function() {
    echo '<input name="grigora_settings[embeds]" id="grigora_settings[embeds]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'embeds' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_xmlrpc_callback_function() {
    echo '<input name="grigora_settings[xmlrpc]" id="grigora_settings[xmlrpc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'xmlrpc' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquerymigrate_callback_function() {
    echo '<input name="grigora_settings[jquerymigrate]" id="grigora_settings[jquerymigrate]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquerymigrate' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquery_callback_function() {
    echo '<input name="grigora_settings[jquery]" id="grigora_settings[jquery]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquery' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_dashicons_callback_function() {
    echo '<input name="grigora_settings[dashicons]" id="grigora_settings[dashicons]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'dashicons' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
