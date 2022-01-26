<?php


function grg_dynamic_customize_css() {
    $defaults = grigora_color_defaults();
    $colors_flag = grigora_get_option("color");
    ?>
<style type="text/css">
body {
    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_bg-color', $defaults['grg_bg-color']);
    }

    else {
        echo $defaults['grg_bg-color'];
    }

    ?>;
}

.navbar {
    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_header_bg-color', $defaults['grg_header_bg-color']);
    }

    else {
        echo $defaults['grg_header_bg-color'];
    }

    ?>;
}

.navbar .menu-container .menu {
    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_header_menu_bg-color', $defaults['grg_header_menu_bg-color']);
    }

    else {
        echo $defaults['grg_header_menu_bg-color'];
    }

    ?>;
}

.navbar .title a,
.navbar .menu-container .menu a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_header_text-color', $defaults['grg_header_text-color']);
    }

    else {
        echo $defaults['grg_header_text-color'];
    }

    ?>;
}

.footer .footer-menu {
    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_footer_menu_bg-color', $defaults['grg_footer_menu_bg-color']);
    }

    else {
        echo $defaults['grg_footer_menu_bg-color'];
    }

    ?>;
}

.footer .copyrights {
    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_footer_bg-color', $defaults['grg_footer_bg-color']);
    }

    else {
        echo $defaults['grg_footer_bg-color'];
    }

    ?>;
}

.footer .footer-menu a,
.footer .copyrights {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_footer_text-color', $defaults['grg_footer_text-color']);
    }

    else {
        echo $defaults['grg_footer_text-color'];
    }

    ?>;
}

p,
ul,
ol {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_text-color', $defaults['grg_text-color']);
    }

    else {
        echo $defaults['grg_text-color'];
    }

    ?>;
}

main a,
.post-content p a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_anchor-text-color', $defaults['grg_anchor-text-color']);
    }

    else {
        echo $defaults['grg_anchor-text-color'];
    }

    ?>;
}

main a:hover,
.post-content p a:hover {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_anchor-text-hover-color', $defaults['grg_anchor-text-hover-color']);
    }

    else {
        echo $defaults['grg_anchor-text-hover-color'];
    }

    ?>;
}

.read-btn {

    background-color: <?php if($colors_flag) {
        echo get_theme_mod('grg_btn-color', $defaults['grg_btn-color']);
    }

    else {
        echo $defaults['grg_btn-color'];
    }

    ?>;
}

.container .article .post-container .post .post-desc a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_btn-text-color', $defaults['grg_btn-text-color']);
    }

    else {
        echo $defaults['grg_btn-text-color'];
    }

    ?>;
}

main h1,
main h1 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h1-tag-color', $defaults['grg_h1-tag-color']);
    }

    else {
        echo $defaults['grg_h1-tag-color'];
    }

    ?>;
}

main h2,
main h2 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h2-tag-color', $defaults['grg_h2-tag-color']);
    }

    else {
        echo $defaults['grg_h2-tag-color'];
    }

    ?>;
}

main h3,
main h3 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h3-tag-color', $defaults['grg_h3-tag-color']);
    }

    else {
        echo $defaults['grg_h3-tag-color'];
    }

    ?>;
}

main h4,
main h4 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h4-tag-color', $defaults['grg_h4-tag-color']);
    }

    else {
        echo $defaults['grg_h4-tag-color'];
    }

    ?>;
}

main h5,
main h5 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h5-tag-color', $defaults['grg_h5-tag-color']);
    }

    else {
        echo $defaults['grg_h5-tag-color'];
    }

    ?>;
}

main h6,
main h6 a,
.container .article .post-container .post .post-desc .post-title a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_h6-tag-color', $defaults['grg_h6-tag-color']);
    }

    else {
        echo $defaults['grg_h6-tag-color'];
    }

    ?>;
}

.post-content .breadcrumb,
.post-content .breadcrumb a {
    color: <?php if($colors_flag) {
        echo get_theme_mod('grg_breadcrumb-color', $defaults['grg_breadcrumb-color']);
    }

    else {
        echo $defaults['grg_breadcrumb-color'];
    }

    ?>;
}
</style>
<?php
} 

add_action( 'wp_head', 'grg_dynamic_customize_css' );