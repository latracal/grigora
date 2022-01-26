<?php


function grg_dynamic_customize_css() {
    $defaults = grigora_color_defaults();
    ?>
    <style type="text/css">
        body {
        background-color: <?php echo get_theme_mod('grg_bg-color', $defaults['grg_bg-color']);
        ?>;
        }
    </style>
<?php
} 

add_action( 'wp_head', 'grg_dynamic_customize_css' );
