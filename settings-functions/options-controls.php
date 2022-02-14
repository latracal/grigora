<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<?php

/**
* Grigora Options in Appearance Menu
*/

if ( ! function_exists( 'girgora_options_menu' ) ) { 
    function girgora_options_menu() {
        add_theme_page( 'grigora-options', 'Grigora Options', 'manage_options', 'grigora-options', 'grigora_options_page' );
    }
}

/**
 * Checks the state of Grigora plugin pro
 *
 * @since  1.000
 *
 * @return true if pro is active
 */

function is_grigora_pro_active(){   
    return function_exists("grigora_pro_active");
}

/**
 * Render setting options in a custom div
 *
 * @since  1.000
 * 
 * @param $page list of setting field
 * @return render
 */

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

/**
 * Get the default setting values
 *
 * @since  1.000
 * 
 * @param $option list of default values
 * @return defaults
 */

function grigora_get_option( $option ) {

$defaults = grigora_get_defaults();

$options = wp_parse_args(
get_option( 'grigora_settings', array() ),
$defaults
);

return $options[$option];
}

if ( ! function_exists( 'grigora_options_page' ) ) {

/**
 * Render Grigora Options Page layout
 * enqueue necessary css and js file that required for the options page.
 * If the Grigora Pro Plugin is not active. It will show a notification regarding purchasing the
 * plugin
 *
 * @since  1.000
 * 
 */
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
        echo '<div class="pro-notification"><p>Activate All Powerful Options By Purchasing Girgora Pro </p><a href="https://wpgrigora.com/pro/" target="_blank"><button class="pro-btn">Buy Now</button></a></div>';
    }
?>
<div class="grigora-settings">
    <div class="tab-container">
        <div class="tab">
            <button class="tab-btn" onclick="controlName(event, 'grigora_customizer_section')" id="default">Customizer
                Options</button>
            <button class="tab-btn" onclick="controlName(event, 'grigora_performance_section')">Performance</button>
            <button class="tab-btn IE-tab" onclick="controlName(event, 'grigora_importexport_section')">Import &
                Export</button>
        </div>
        <div class="tab-content">
            <form action="options.php" method="post" class=" <?php echo (is_grigora_pro_active() ? '' : 'disabled') ?>">

                <?php
            settings_fields("grigora_settings");
            custom_do_settings_sections("grigora-options");
            submit_button();
        ?>
            </form>
            <form enctype="multipart/form-data" action="<?php echo get_admin_url( null, 'admin-post.php' ) ?>"
                method="post" class="IETab <?php echo (is_grigora_pro_active() ? '' : 'disabled') ?>">
                <div class="grigora_importexport_section customizer " id="grigora_importexport_section">
                    <h2>Import &amp; Export</h2>
                    <input type="hidden" name="action" value="grigora_import">
                    <p>Save and Restore your Grigora Settings in One Click!</p>
                    <table class="form-table" role="presentation">
                        <tbody>
                            <tr>
                                <th scope="row">Export</th>
                                <td><?php grigora_importexport_section_export_callback_function(); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Import</th>
                                <td><?php grigora_importexport_section_import_callback_function(); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    submit_button();
                ?>
                </div>
            </form>
        </div>
    </div>
    <div class="grigora-admin-sidebar">
        <?php if(is_grigora_pro_active()){ ?>
        <?php if(get_option("grigora_license_key_status") == "valid"){
            ?>
        <div class="license-valid">
            <div class="header">License Status</div>
            <div class="status">Valid</div>
        </div>
        <div class="deactivation-form">
            <form action="<?php echo esc_url( admin_url('admin-post.php' ) ) ?>" method="post">
                <div class="header">Grigora Pro License</div>
                <input type="hidden" name="action" value="grigora_update_license_key">
                <input type="hidden" id="grigora_license_key" name="grigora_license_key" value="">
                <?php wp_nonce_field( 'grigora_activation_nonce', 'grigora_activation_nonce' ); ?>
                <p>Press Deactivate button to disable auto updates.</p>
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Deactivate">
            </form>
        </div>
        <?php } else { ?>
        <div class="license-invalid">
            <div class="header">License Status</div>
            <div class="status">Not Active</div>
        </div>
        <div class="activation-form">
            <form action="<?php echo esc_url( admin_url('admin-post.php' ) ) ?>" method="post" class="grg-active">
                <div class="header">Grigora Pro License</div>
                <input type="hidden" name="action" value="grigora_update_license_key">
                <?php wp_nonce_field( 'grigora_activation_nonce', 'grigora_activation_nonce' ); ?>
                <p>Enter your <a href="https://wpgrigora.com/pro/">license key</a> to enable auto updates. </p>
                <input type="password" id="grigora_license_key" name="grigora_license_key">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Activate">
            </form>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<?php
    }
}

grigora_set_default_colors();
grigora_set_default_spacing();
grigora_set_default_scroll();
grigora_set_default_typography_font();
grigora_set_default_typography();
grigora_set_default_blog();
grigora_set_default_breadcrumbs();

add_action( 'admin_menu', 'girgora_options_menu' );

register_setting( 'grigora_settings', 'grigora_settings' );

/**
 * Set default color theme mods
 *
 * @since  1.000
 * 
 */
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

/**
 * Set default spacing layout theme mods
 *
 * @since  1.000
 * 
 */
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

/**
 * Set default scroll theme mods
 *
 * @since  1.000
 * 
 */
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

/**
 * Set default typography fonts
 *
 * @since  1.000
 * 
 */
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

/**
 * Set typography defaults
 *
 * @since  1.000
 * 
 */
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

/**
 * Set default blog theme mods
 *
 * @since  1.000
 * 
 */

function grigora_set_default_blog(){
    if (!grigora_get_option("blogdefaultsset")){
        $defaults = grigora_blog_defaults();
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
        $my_options['blogdefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}

/**
 * Set breadcrumbs settings
 *
 * @since  1.000
 * 
 */

function grigora_set_default_breadcrumbs(){
    if (!grigora_get_option("breadcrumbsdefaultsset")){
        $defaults = grigora_breadcrumbs_defaults();
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
        $my_options['breadcrumbsdefaultsset'] = 1;
        update_option('grigora_settings', $my_options);
    }
}


/**
 * Renders customizer setting in div having specific class name for each individual setting in
 * customizer options.
 *
 * @since  1.000
 * 
 */

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
		'grigora_customizer_section_cookie',
		'Cookie Notice',
		'grigora_customizer_section_cookie_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_popup',
		'Pop Ups (Upcoming)',
		'grigora_customizer_section_popup_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

    add_settings_field(
		'grigora_customizer_section_procontable',
		'Pros Cons Table (Upcoming)',
		'grigora_customizer_section_procontable_callback_function',
		'grigora-options',
		'grigora_customizer_section'
	);

 }
 
 add_action( 'admin_init', 'grigora_customize_settings_section' );
 
/**
 * Renders customizer setting in div having specific class name for each individual setting
 *
 * @since  1.000
 * 
 * @return div with custom class
 */

 function grigora_performance_settings_section() {

    add_settings_section(
       'grigora_performance_section',
       'Performance',
       'grigora_performance_section_callback_function',
       'grigora-options'
   );

   add_settings_field(
        'grigora_performance_section_minify',
        'Minify CSS',
        'grigora_performance_section_minify_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_dynamicexternal',
        'Dynamic CSS in External File',
        'grigora_performance_section_dynamicexternal_callback_function',
        'grigora-options',
        'grigora_performance_section'
    );

    add_settings_field(
        'grigora_performance_section_localfonts',
        'Host Google Fonts Locally',
        'grigora_performance_section_localfonts_callback_function',
        'grigora-options',
        'grigora_performance_section'
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

    // add_settings_field(
    //     'grigora_performance_section_xmlrpc',
    //     'Disable XML RPC',
    //     'grigora_performance_section_xmlrpc_callback_function',
    //     'grigora-options',
    //     'grigora_performance_section'
    // );

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

/**
 * renders necessary field such as lable and input fields
 *
 * @since  1.000
 * 
 * @return label and input fields
 */

function grigora_customizer_section_callback_function() {
 	echo '<p>Customize your theme!</p>';
 }

function grigora_performance_section_callback_function() {
    echo '<p>Make your website fast by removing unnecessary imports!</p>';
}

function grigora_importexport_section_callback_function() {
    echo '<p>Save and Restore your Grigora Settings in One Click!</p>';
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

function grigora_customizer_section_cookie_callback_function() {
    echo '<input name="grigora_settings[cookie]" id="grigora_settings[cookie]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'cookie' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_customizer_section_popup_callback_function() {
    // echo '<input name="grigora_settings[popup]" id="grigora_settings[popup]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'popup' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
    // echo 'Upcoming';
}

function grigora_customizer_section_procontable_callback_function() {
    // echo '<input name="grigora_settings[procontable]" id="grigora_settings[procontable]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'procontable' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
    // echo 'Upcoming';
}
function grigora_performance_section_minify_callback_function() {
    echo '<input name="grigora_settings[minify]" id="grigora_settings[minify]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'minify' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_dynamicexternal_callback_function() {
    echo '<input name="grigora_settings[dynamicexternal]" id="grigora_settings[dynamicexternal]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'dynamicexternal' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_localfonts_callback_function() {
    echo '<input name="grigora_settings[localfonts]" id="grigora_settings[localfonts]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'localfonts' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}
function grigora_performance_section_emoji_callback_function() {
    echo '<input name="grigora_settings[emoji]" id="grigora_settings[emoji]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'emoji' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_embeds_callback_function() {
    echo '<input name="grigora_settings[embeds]" id="grigora_settings[embeds]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'embeds' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

// function grigora_performance_section_xmlrpc_callback_function() {
//     echo '<input name="grigora_settings[xmlrpc]" id="grigora_settings[xmlrpc]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'xmlrpc' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
// }

function grigora_performance_section_jquerymigrate_callback_function() {
    echo '<input name="grigora_settings[jquerymigrate]" id="grigora_settings[jquerymigrate]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquerymigrate' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_jquery_callback_function() {
    echo '<input name="grigora_settings[jquery]" id="grigora_settings[jquery]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'jquery' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_performance_section_dashicons_callback_function() {
    echo '<input name="grigora_settings[dashicons]" id="grigora_settings[dashicons]" type="checkbox" value="1" class="checkbox" ' . checked( 1, grigora_get_option( 'dashicons' ), false ) . ' /><span class="knob"></span><span class="layer"></span>';
}

function grigora_importexport_section_export_callback_function() {
    $url = get_admin_url( null, 'admin-post.php?' );
    $url = $url."action=grigora_export&_wpnonce=".wp_create_nonce( 'grigora_export' );
    echo '<div class=""grigora-export-button"><a href="'.$url.'">Download Settings</a></div>';
}

function grigora_importexport_section_import_callback_function() {
    echo '<input name="grigora_import" id="grigora_import" type="file">';
}

add_action( 'admin_post_grigora_export', 'grigora_admin_export_data' );

/**
 * exports setting backup file in json format
 *
 * @since  1.000
 * 
 * @return JSON export file
 */

function grigora_admin_export_data() {
    if( isset($_GET["_wpnonce"])&&$_GET["_wpnonce"] ) {
        if ( ! wp_verify_nonce( $_GET["_wpnonce"], 'grigora_export' ) ) {
            wp_die( __( 'The link you followed has expired.', 'grigora' ) ); 
        } else {
            header('Content-disposition: attachment; filename=grigora_export.json');
            header('Content-type: application/json');
            $grg_options = get_option("grigora_settings");
            $theme_mods = get_theme_mods();
            if(!$grg_options){
                $grg_options = array();
            }
            if(!$theme_mods){
                $theme_mods = array();
            }
            $export = array(
                "grg_options" => $grg_options,
                "theme_mods" => $theme_mods,
            );
            $json = json_encode($export);
            echo $json;
        }
        exit();
       }
       exit();
}


add_action( 'admin_post_grigora_import', 'grigora_admin_import_data' );

/**
 * allows to upload the json format exported file to restore the settings
 *
 * @since  1.000
 * 
 */

function grigora_admin_import_data() {
    if(isset($_POST["submit"])) {
        if(empty($_FILES)) {
            exit();
        } 
        $file_ext=strtolower(end(explode('.',$_FILES['grigora_import']['name'])));
        $file_tmp = $_FILES['grigora_import']['tmp_name'];
        $extensions = array('json');
        if(in_array($file_ext,$extensions)=== false){
            wp_die( __( 'Please upload Json file', 'grigora' ) ); 
        }
        $str = file_get_contents($file_tmp);
        $json = json_decode($str, true);
        switch(json_last_error()) {
            case JSON_ERROR_DEPTH:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
            case JSON_ERROR_CTRL_CHAR:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
            case JSON_ERROR_SYNTAX:
                wp_die( __( 'JSON Parse Error', 'grigora' ) ); 
            break;
        }
        if(array_key_exists("grg_options", $json)){
            update_option('grigora_settings', $json['grg_options']);
        }
        if(array_key_exists("theme_mods", $json)){
            foreach($json['theme_mods'] as $key => $value ){
                set_theme_mod( $key, $value );
            }
        }
        wp_redirect(admin_url('admin.php?page=grigora-options'));
    }
       exit();
}

?>