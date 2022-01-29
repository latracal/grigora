<?php


function grg_dynamic_customize_css() {
    $defaults = grigora_color_defaults();
    $colors_flag = grigora_get_option("color");

    $spacing_defaults = grigora_spacing_defaults();
    $spacing_flag = grigora_get_option("spacing");
  
    $typography_defaults = grigora_typography_defaults();
    $typography_fonts_defaults = grigora_typography_defaults_fonts();
    $typography_flag = grigora_get_option("typography");    
    
    ?>
<style type="text/css">
<?php if($colors_flag) {
    ?>body {
        background-color: <?php echo get_theme_mod('grg_bg-color', $defaults['grg_bg-color']);
        ?>;
    }

    .navbar {
        background-color: <?php echo get_theme_mod('grg_header_bg-color', $defaults['grg_header_bg-color']);
        ?>;
    }

    .navbar .menu-container .menu {
        background-color: <?php echo get_theme_mod('grg_header_menu_bg-color', $defaults['grg_header_menu_bg-color']);
        ?>;
    }

    .navbar .menu-container .menu .menu-item .sub-menu {
        background-color: <?php echo get_theme_mod('grg_header_submenu_bg-color', $defaults['grg_header_submenu_bg-color']);
        ?>;
    }

    .navbar .menu-container .search-btn .search-box,
    .navbar .menu-container .search-btn .search-box .search-field {
        background-color: <?php echo get_theme_mod('grg_header_searchbox_bg-color', $defaults['grg_header_searchbox_bg-color']);
        ?>;
    }

    .navbar .title a,
    .navbar .menu-container .menu a {
        color: <?php echo get_theme_mod('grg_header_text-color', $defaults['grg_header_text-color']);
        ?>;
    }

    .footer .footer-menu {
        background-color: <?php echo get_theme_mod('grg_footer_menu_bg-color', $defaults['grg_footer_menu_bg-color']);
        ?>;
    }

    .footer .copyrights {
        background-color: <?php echo get_theme_mod('grg_footer_bg-color', $defaults['grg_footer_bg-color']);
        ?>;
    }

    .footer .footer-menu a,
    .footer .copyrights {
        color: <?php echo get_theme_mod('grg_footer_text-color', $defaults['grg_footer_text-color']);
        ?>;
    }

    .container .article .post-container .post .post-desc p,
    p,
    ul,
    ol {
        color: <?php echo get_theme_mod('grg_text-color', $defaults['grg_text-color']);
        ?>;
    }

    main a,
    .post-content p a {
        color: <?php echo get_theme_mod('grg_anchor-text-color', $defaults['grg_anchor-text-color']);
        ?>;
    }

    main a:hover,
    .post-content p a:hover {
        color: <?php echo get_theme_mod('grg_anchor-text-hover-color', $defaults['grg_anchor-text-hover-color']);
        ?>;
    }

    .read-btn {
        background-color: <?php echo get_theme_mod('grg_btn-color', $defaults['grg_btn-color']);
        ?>;
    }

    .container .article .post-container .post .post-desc a {
        color: <?php echo get_theme_mod('grg_btn-text-color', $defaults['grg_btn-text-color']);
        ?>;
    }

    main h1,
    main h1 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h1-tag-color', $defaults['grg_h1-tag-color']);
        ?>;
    }

    main h2,
    main h2 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h2-tag-color', $defaults['grg_h2-tag-color']);
        ?>;
    }

    main h3,
    main h3 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h3-tag-color', $defaults['grg_h3-tag-color']);
        ?>;
    }

    main h4,
    main h4 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h4-tag-color', $defaults['grg_h4-tag-color']);
        ?>;
    }

    main h5,
    main h5 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h5-tag-color', $defaults['grg_h5-tag-color']);
        ?>;
    }

    main h6,
    main h6 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo get_theme_mod('grg_h6-tag-color', $defaults['grg_h6-tag-color']);
        ?>;
    }

    .post-content .breadcrumb,
    .post-content .breadcrumb a {
        color: <?php echo get_theme_mod('grg_breadcrumb-color', $defaults['grg_breadcrumb-color']);
        ?>;
    }

    .comment-list .comment-box p {
        color: <?php echo get_theme_mod('grg_comment_text_colors', $defaults['grg_comment_text_colors']);
        ?>;
    }

    .comment-list .comment-box .comment-meta .comment-author-time {
        color: <?php echo get_theme_mod('grg_comment_date_colors', $defaults['grg_comment_date_colors']);
        ?>;
    }

    .comment-list .comment-box .comment-reply a {
        background-color: <?php echo get_theme_mod('grg_comment_reply_colors', $defaults['grg_comment_reply_colors']);
        ?>;
    }

    .comment-list .comment-box .comment-reply a {
        color: <?php echo get_theme_mod('grg_comment_reply_text_colors', $defaults['grg_comment_reply_text_colors']);
        ?>;
    }

    .comment-list .comment-box .comment-meta .fn a {
        color: <?php echo get_theme_mod('grg_comment_title_colors', $defaults['grg_comment_title_colors']);
        ?>;
    }

    .container .article .pagination .next,
    .container .article .pagination .prev,
    .post-content .post-pagination .pagination-prev-post,
    .post-content .post-pagination .pagination-next-post {
        background-color: <?php echo get_theme_mod('grg_post_nav_colors', $defaults['grg_post_nav_colors']);
        ?>;
    }

    .container .article .pagination .nav-links a,
    span.current {
        color: <?php echo get_theme_mod('grg_post_nav_text_colors', $defaults['grg_post_nav_text_colors']);
        ?>;

    }

    .related-posts a {
        color: <?php echo get_theme_mod('grg_related_post_title_colors', $defaults['grg_related_post_title_colors']);
        ?>;
    }

    .related-posts a:hover {
        color: <?php echo get_theme_mod('grg_related_post_title_hover_colors', $defaults['grg_related_post_title_hover_colors']);
        ?>;
    }

    .to-top {
        background-color: <?php echo get_theme_mod('grg_scroll_colors', $defaults['grg_scroll_colors']);
        ?>;
    }

    .to-top .arrow {
        border: solid <?php echo get_theme_mod('grg_scroll_icon_colors', $defaults['grg_scroll_icon_colors']);
        ?>;
        border-width: 0 3px 3px 0;
    }

    /*Spacing and Layout*/

    <?php if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row'|| get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row-reverse') {
        ?>.container {
            flex-direction: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;
        }

        <?php
    }

    else {
        ?>.container .article {
            width: 100%;
            border-right: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;
        }

        aside {
            display: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;
        }

        <?php
    }

    ?>.container {
        max-width: <?php echo get_theme_mod('grg_container-width', $spacing_defaults['grg_container-width']);
        ?>px;

    }

    <?php
}

else {
    ?>body {
        background-color: <?php echo $defaults['grg_bg-color'];
        ?>;
    }

    .navbar {
        background-color: <?php echo $defaults['grg_header_bg-color'];
        ?>;
    }

    .navbar .menu-container .menu {
        background-color: <?php echo $defaults['grg_header_menu_bg-color'];
        ?>;
    }

    .navbar .menu-container .menu .menu-item .sub-menu {
        background-color: <?php echo $defaults['grg_header_submenu_bg-color'];
        ?>;
    }

    .navbar .menu-container .search-btn .search-box,
    .navbar .menu-container .search-btn .search-box .search-field {
        background-color: <?php echo $defaults['grg_header_searchbox_bg-color'];
        ?>;
    }

    .navbar .title a,
    .navbar .menu-container .menu a {
        color: <?php echo $defaults['grg_header_text-color'];
        ?>;
    }

    .footer .footer-menu {
        background-color: <?php echo $defaults['grg_footer_menu_bg-color'];
        ?>;
    }

    .footer .copyrights {
        background-color: <?php echo $defaults['grg_footer_bg-color'];
        ?>;
    }

    .footer .footer-menu a,
    .footer .copyrights {
        color: <?php echo $defaults['grg_footer_text-color'];
        ?>;
    }

    .container .article .post-container .post .post-desc p,
    p,
    ul,
    ol {
        color: <?php echo $defaults['grg_text-color'];
        ?>;
    }

    main a,
    .post-content p a {
        color: <?php echo $defaults['grg_anchor-text-color'];
        ?>;
    }

    main a:hover,
    .post-content p a:hover {
        color: <?php echo $defaults['grg_anchor-text-hover-color'];
        ?>;
    }

    .read-btn {
        background-color: <?php echo $defaults['grg_btn-color'];
        ?>;
    }

    .container .article .post-container .post .post-desc a {
        color: <?php echo $defaults['grg_btn-text-color'];
        ?>;
    }

    main h1,
    main h1 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h1-tag-color'];
        ?>;
    }

    main h2,
    main h2 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h2-tag-color'];
        ?>;
    }

    main h3,
    main h3 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h3-tag-color'];
        ?>;
    }

    main h4,
    main h4 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h4-tag-color'];
        ?>;
    }

    main h5,
    main h5 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h5-tag-color'];
        ?>;
    }

    main h6,
    main h6 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: <?php echo $defaults['grg_h6-tag-color'];
        ?>;
    }

    .post-content .breadcrumb,
    .post-content .breadcrumb a {
        color: <?php echo $defaults['grg_breadcrumb-color'];
        ?>;
    }

    .comment-list .comment-box p {
        color: <?php echo $defaults['grg_comment_text_colors'];
        ?>;
    }

    .comment-list .comment-box .comment-meta .comment-author-time {
        color: <?php echo $defaults['grg_comment_date_colors'];
        ?>;

    }

    .comment-list .comment-box .comment-reply a {
        background-color: <?php echo $defaults['grg_comment_reply_colors'];
        ?>;
    }

    .comment-list .comment-box .comment-reply a {
        color: <?php echo $defaults['grg_comment_reply_text_colors'];
        ?>;
    }

    .comment-list .comment-box .comment-meta .fn a {
        color: <?php echo $defaults['grg_comment_title_colors'];
        ?>;
    }

    .container .article .pagination .next,
    .container .article .pagination .prev {
        background-color: <?php echo $defaults['grg_post_nav_colors'];
        ?>;

    }

    .container .article .pagination .nav-links a,
    span.current {
        color: <?php echo $defaults['grg_post_nav_text_colors'];
        ?>;
    }


    .related-posts a {
        color: <?php echo $defaults['grg_related_post_title_colors'];
        ?>;
    }

    .related-posts a:hover {
        color: <?php echo $defaults['grg_related_post_title_hover_colors'];
        ?>;
    }

    .to-top {
        background-color: <?php echo $defaults['grg_scroll_colors'];
        ?>;
    }

    .to-top .arrow {
        border: solid <?php echo $defaults['grg_scroll_icon_colors'];
        ?>;
        border-width: 0 3px 3px 0;
    }

    .container {
        flex-direction: <?php echo $spacing_defaults['grg_sidebar-alignment'];
        ?>;
    }

    .container {
        max-width: <?php echo $spacing_defaults['grg_container-width'];
        ?>px;

    }

    <?php
}

?><?php if($spacing_flag) {
    ?><?php if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row') {
        ?>.container {
            flex-direction: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;

        }

        <?php
    }

    else if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row-reverse') {
        ?>.container {
            flex-direction: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;

        }

        .container .article {
            border-right: none;
            border-left: 1px solid #aaaaaa;
        }

        <?php
    }

    else {
        ?>.container .article {
            width: 100%;
            border-right: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;
        }

        aside {
            display: <?php echo get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']);
            ?>;
        }

        <?php
    }

    ?>.container {
        max-width: <?php echo get_theme_mod('grg_container-width', $spacing_defaults['grg_container-width']);
        ?>px;

    }

    .container {
        padding-top: <?php echo get_theme_mod('grg_container-top-padding', $spacing_defaults['grg_container-top-padding']);
        ?>px;

    }

    .container {
        padding-right: <?php echo get_theme_mod('grg_container-right-padding', $spacing_defaults['grg_container-right-padding']);
        ?>px;

    }

    .container {
        padding-bottom: <?php echo get_theme_mod('grg_container-bottom-padding', $spacing_defaults['grg_container-bottom-padding']);
        ?>px;

    }

    .container {
        padding-left: <?php echo get_theme_mod('grg_container-left-padding', $spacing_defaults['grg_container-left-padding']);
        ?>px;

    }

    .container aside {
        width: <?php echo get_theme_mod('grg_sidebar-width', $spacing_defaults['grg_sidebar-width']);
        ?>%;
    }

    .container .article {
        width: calc(100% - <?php echo get_theme_mod('grg_sidebar-width', $spacing_defaults['grg_sidebar-width']);
                ?>%);
    }

    .navbar {
        height: <?php echo get_theme_mod('grg_header-height', $spacing_defaults['grg_header-height']);
        ?>px;
    }


    <?php
}

else {
    ?>.container {
        flex-direction: <?php echo $spacing_defaults['grg_sidebar-alignment'];
        ?>;
    }

    .container {
        max-width: <?php echo $spacing_defaults['grg_container-width'];
        ?>px;

    }

    .container {
        padding-top: <?php echo $spacing_defaults['grg_container-top-padding'];
        ?>px;

    }

    .container {
        padding-right: <?php echo $spacing_defaults['grg_container-right-padding'];
        ?>px;

    }

    .container {
        padding-bottom: <?php echo $spacing_defaults['grg_container-bottom-padding'];
        ?>px;

    }

    .container {
        padding-left: <?php echo $spacing_defaults['grg_container-left-padding'];
        ?>px;

    }


    .container aside {
        width: <?php echo $spacing_defaults['grg_sidebar-width'];
        ?>%;
    }

    .container .article {
        width: calc(100% - <?php echo $spacing_defaults['grg_sidebar-width'];
                ?>%);
    }

    .navbar {
        height: <?php echo $spacing_defaults['grg_header-height'];
        ?>%;
    }

    <?php
}

?><?php if($typography_flag) {
    ?>body {
        font-family: <?php echo get_theme_mod('grg_typography_body_font', $typography_fonts_defaults['grg_typography_body_font']);
        ?>;
    }

    main p {
        font-weight: <?php echo get_theme_mod('grg_typography_body_weight', $typography_defaults['grg_typography_body_weight']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_body_font_size', $typography_defaults['grg_typography_body_font_size']);
        ?>px;
    }

    main {
        text-transform: <?php echo get_theme_mod('grg_typography_body_font_transform', $typography_defaults['grg_typography_body_font_transform']);
        ?>;
    }

    .navbar .title h1 {
        font-family: <?php echo get_theme_mod('grg_typography_site_title_font', $typography_fonts_defaults['grg_typography_site_title_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_site_title_weight', $typography_defaults['grg_typography_site_title_weight']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_site_title_size', $typography_defaults['grg_typography_site_title_size']);
        ?>px;
        text-transform: <?php echo get_theme_mod('grg_typography_site_title_transform', $typography_defaults['grg_typography_site_title_transform']);
        ?>;
    }

    .navbar .title h2 {
        font-family: <?php echo get_theme_mod('grg_typography_site_desc_font', $typography_fonts_defaults['grg_typography_site_desc_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_site_desc_weight', $typography_defaults['grg_typography_site_desc_weight']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_site_desc_size', $typography_defaults['grg_typography_site_desc_size']);
        ?>px;
        text-transform: <?php echo get_theme_mod('grg_typography_site_desc_transform', $typography_defaults['grg_typography_site_desc_transform']);
        ?>;
    }

    .navbar .menu-container .menu {
        font-family: <?php echo get_theme_mod('grg_typography_site_menu_font', $typography_fonts_defaults['grg_typography_site_menu_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_site_menu_weight', $typography_defaults['grg_typography_site_menu_weight']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_site_menu_size', $typography_defaults['grg_typography_site_menu_size']);
        ?>px;
        text-transform: <?php echo get_theme_mod('grg_typography_site_menu_transform', $typography_defaults['grg_typography_site_menu_transform']);
        ?>;
    }

    .read-btn {
        font-family: <?php echo get_theme_mod('grg_typography_button_font', $typography_fonts_defaults['grg_typography_button_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_button_weight', $typography_defaults['grg_typography_button_weight']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_button_size', $typography_defaults['grg_typography_button_size']);
        ?>px;
        text-transform: <?php echo get_theme_mod('grg_typography_button_transform', $typography_defaults['grg_typography_button_transform']);
        ?>;
    }

    h1 {
        font-family: <?php echo get_theme_mod('grg_typography_h1_font', $typography_fonts_defaults['grg_typography_h1_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h1_weight', $typography_defaults['grg_typography_h1_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h1_transform', $typography_defaults['grg_typography_h1_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h1_size', $typography_defaults['grg_typography_h1_size']);
        ?>px;
    }

    h2 {
        font-family: <?php echo get_theme_mod('grg_typography_h2_font', $typography_fonts_defaults['grg_typography_h2_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h2_weight', $typography_defaults['grg_typography_h2_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h2_transform', $typography_defaults['grg_typography_h2_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h2_size', $typography_defaults['grg_typography_h2_size']);
        ?>px;
    }

    h3 {
        font-family: <?php echo get_theme_mod('grg_typography_h3_font', $typography_fonts_defaults['grg_typography_h3_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h3_weight', $typography_defaults['grg_typography_h3_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h3_transform', $typography_defaults['grg_typography_h3_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h3_size', $typography_defaults['grg_typography_h3_size']);
        ?>px;
    }

    h4 {
        font-family: <?php echo get_theme_mod('grg_typography_h4_font', $typography_fonts_defaults['grg_typography_h4_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h4_weight', $typography_defaults['grg_typography_h4_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h4_transform', $typography_defaults['grg_typography_h4_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h4_size', $typography_defaults['grg_typography_h4_size']);
        ?>px;
    }

    h5 {
        font-family: <?php echo get_theme_mod('grg_typography_h5_font', $typography_fonts_defaults['grg_typography_h5_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h5_weight', $typography_defaults['grg_typography_h5_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h5_transform', $typography_defaults['grg_typography_h5_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h5_size', $typography_defaults['grg_typography_h5_size']);
        ?>px;
    }

    h6 {
        font-family: <?php echo get_theme_mod('grg_typography_h6_font', $typography_fonts_defaults['grg_typography_h6_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_h6_weight', $typography_defaults['grg_typography_h6_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_h6_transform', $typography_defaults['grg_typography_h6_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_h6_size', $typography_defaults['grg_typography_h6_size']);
        ?>px;
    }

    .footer {
        font-family: <?php echo get_theme_mod('grg_typography_footer_font', $typography_fonts_defaults['grg_typography_footer_font']);
        ?>;
        font-weight: <?php echo get_theme_mod('grg_typography_footer_weight', $typography_defaults['grg_typography_footer_weight']);
        ?>;
        text-transform: <?php echo get_theme_mod('grg_typography_footer_transform', $typography_defaults['grg_typography_footer_transform']);
        ?>;
        font-size: <?php echo get_theme_mod('grg_typography_footer_size', $typography_defaults['grg_typography_footer_size']);
        ?>px;
    }

    <?php
}

else {
    ?>body {
        font-family: <?php echo $typography_fonts_defaults['grg_typography_body_font'];
        ?>;
    }

    main p {
        font-weight: <?php echo $typography_defaults['grg_typography_body_weight'];
        ?>px;
        font-size: <?php echo $typography_defaults['grg_typography_body_font_size'];
        ?>;
    }

    main {
        text-transform: <?php echo $typography_defaults['grg_typography_body_font_transform'];
        ?>;
    }

    .navbar .title h1 {
        font-family: <?php echo $typography_fonts_defaults['grg_typography_site_title_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_site_title_weight'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_site_title_size'];
        ?>px;
        text-transform: <?php echo $typography_defaults['grg_typography_site_title_transform'];
        ?>;
    }

    .navbar .title h2 {
        font-family: <?php echo $typography_fonts_defaults['grg_typography_site_desc_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_site_desc_weight'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_site_desc_size'];
        ?>px;
        text-transform: <?php echo $typography_defaults['grg_typography_site_desc_transform'];
        ?>;
    }

    .navbar .menu-container .menu {
        font-family: <?php echo $typography_fonts_defaults['grg_typography_site_menu_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_site_menu_weight'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_site_menu_size'];
        ?>px;
        text-transform: <?php echo $typography_defaults['grg_typography_site_menu_transform'];
        ?>;
    }

    .read-btn {
        font-family: <?php echo $typography_defaults['grg_typography_button_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_button_weight'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_button_size'];
        ?>px;
        text-transform: <?php echo $typography_defaults['grg_typography_button_transform'];
        ?>;
    }

    h1 {
        font-family: <?php echo $typography_defaults['grg_typography_h1_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h1_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h1_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h1_size'];
        ?>px;
    }

    h2 {
        font-family: <?php echo $typography_defaults['grg_typography_h2_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h2_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h2_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h2_size'];
        ?>px;
    }

    h3 {
        font-family: <?php echo $typography_defaults['grg_typography_h3_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h3_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h3_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h3_size'];
        ?>px;
    }

    h4 {
        font-family: <?php echo $typography_defaults['grg_typography_h4_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h4_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h4_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h4_size'];
        ?>px;
    }

    h5 {
        font-family: <?php echo $typography_defaults['grg_typography_h5_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h5_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h5_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h5_size'];
        ?>px;
    }

    h6 {
        font-family: <?php echo $typography_defaults['grg_typography_h6_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_h6_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_h6_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_h6_size'];
        ?>px;
    }

    .footer {
        font-family: <?php echo $typography_defaults['grg_typography_footer_font'];
        ?>;
        font-weight: <?php echo $typography_defaults['grg_typography_footer_weight'];
        ?>;
        text-transform: <?php echo $typography_defaults['grg_typography_footer_transform'];
        ?>;
        font-size: <?php echo $typography_defaults['grg_typography_footer_size'];
        ?>px;
    }

    <?php
}

?>
</style>
<?php
} 
add_action( 'wp_head', 'grg_dynamic_customize_css' );
?>