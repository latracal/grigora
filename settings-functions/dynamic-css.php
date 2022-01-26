<?php


function grg_dynamic_customize_css() {
    $defaults = grigora_color_defaults();
    $colors_flag = grigora_get_option("color");
    ?>
    <style type="text/css">
        body {
        background-color: <?php
            if($colors_flag){
                echo get_theme_mod('grg_bg-color', $defaults['grg_bg-color']);
            }
            else{
                echo $defaults['grg_bg-color'];
            }
        ?>;
        }
    </style>
<?php
} 

add_action( 'wp_head', 'grg_dynamic_customize_css' );
