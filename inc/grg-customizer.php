<?php

function grg_customize_register( $wp_customize ){
 
    $wp_customize->add_section( 'grg_section', [
        'title' => __( 'Grigora Theme Settings', 'grg' ),
        'priority' => 30    
     ] );

    $wp_customize->add_setting( 'grg_bg-color', [ 
        'default' => '#AEFEFF'
    ] );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'grg_bg-setting',
        array(
            'label'          => __( 'Theme Background Color', 'Grigora' ),
            'section'        => 'grg_section',
            'settings'       => 'grg_bg-color',
        )
    ) );

    $wp_customize->add_setting( 'grg_btn-color', [ 
        'default' => '#35858B'
    ] );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'grg_btn-setting',
        array(
            'label'          => __( 'Read More Button Color', 'Grigora' ),
            'section'        => 'grg_section',
            'settings'       => 'grg_btn-color',
        )
    ) );

    $wp_customize->add_setting( 'grg_btn-hover-color', [ 
        'default' => '#4ed3b8'
    ] );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'grg_btn-hover-setting',
        array(
            'label'          => __( 'Read More Button Hover Color', 'Grigora' ),
            'section'        => 'grg_section',
            'settings'       => 'grg_btn-hover-color',
        )
    ) );
  
}
?>

<?php
function grg_customize_css() {
?>
<style type="text/css">
body {

    background-color: <?php echo get_theme_mod('grg_bg-color', '#cecece');
    ?>;
}

.read-btn {

    background-color: <?php echo get_theme_mod('grg_btn-color', '#35858B');
    ?>;

}

.read-btn:hover {
    background-color: <?php echo get_theme_mod('grg_btn-hover-color', '#4ed3b8');
    ?>;
}
</style>
<?php
}