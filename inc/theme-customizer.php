<?php

function ltr_customize_register( $wp_customize ){
    $wp_customize->add_setting( 'ltr_font-size', [ 
         'default' => '16px'
     ] );
    
    $wp_customize->add_section( 'ltr_section', [
        'title' => __( 'Custom Settings', 'ltr2022' ),
        'priority' => 30    
     ] );

    //  $wp_customize->add_control( new WP_Customize_Control(
    //     $wp_customize,
    //     'ltr_font-setting',
    //     array(
    //         'label'          => __( 'font-size', 'latracal' ),
    //         'section'        => 'ltr_section',
    //         'settings'       => 'ltr_font-size',
    //         'type' => 'range',
    //         'input_attrs' => array(
    //             'min' => 16,
    //             'max' => 20,
    //             // 'step' => 2,
    //           )
    //     )
    // ) );

    /*---*/
    
    class Ari_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'range';
    public function render_content() {
    ?>

<label>

    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <input type="range" value="<?php echo esc_html($this->value()); ?>" <?php $this->link(); ?>>
    <input type="number" value="<?php echo esc_html($this->value()); ?>" <?php $this->link(); ?>>

</label>

<?php
    }
    }
    $wp_customize->add_setting('ltr_font-size', array('default' => '16',));
    $wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'ltr_font-size', array(
    'label' => 'font-size',
    'section' => 'ltr_section',
    'settings' => 'ltr_font-size',
    'type' => 'range',
            'input_attrs' => array(
                'min' => 16,
                'max' => 20,
              )
    )));
    $wp_customize->add_section('ltr_section' , array(
    'title' => __('fon-size','ltr2022'),
    ));

/*----*/
    $wp_customize->add_setting( 'ltr_bg-color', [ 
        'default' => '#cecece'
    ] );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'ltr_bg-setting',
        array(
            'label'          => __( 'background color', 'latracal' ),
            'section'        => 'ltr_section',
            'settings'       => 'ltr_bg-color',
            // 'type' => 'color'
        )
    ) );

    $wp_customize->add_setting( 'ltr_header_show',[
        'default' => 'yes'
    ] );

    $wp_customize->add_section( 'ltr_section', [
        'title' => __( 'Custom Settings', 'ltr2022' ),
        'priority' => 30    
     ] );

     $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ltr_header-setting',
        array(
            'label'          => __( 'show or hide header', 'latracal' ),
            'section'        => 'ltr_section',
            'settings'       => 'ltr_header_show',
            'type'           => 'checkbox',
            'choices' => [
                'yes' => 'Yes'
            ]        
        )
    ) );

    $wp_customize->add_setting( 'ltr_title_align', [ 
        'default' => 'left'
    ] );
   
   $wp_customize->add_section( 'ltr_section', [
       'title' => __( 'Title Settings', 'ltr2022' ),
       'priority' => 30    
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
       'ltr_title-setting',
       array(
           'label'          => __( 'title-alignment', 'latracal' ),
           'section'        => 'ltr_section',
           'settings'       => 'ltr_title_align',
           'type' => 'select',
           'choices' => [
               'left' => 'start',
               'center' =>  'center',
               'right' => 'end'
           ]
       )
   ) );
}
?>

<?php
function mytheme_customize_css() {
?>
<style type="text/css">
main {

    font-size: <?php echo get_theme_mod('ltr_font-size', '16px');

    ?>px;

}

body {

    background-color: <?php echo get_theme_mod('ltr_bg-color', '#cecece');

    ?>;
}

.text-align {
    text-align: <?php echo get_theme_mod('ltr_title_align', 'start');

    ?>;
}
</style>
<?php
}