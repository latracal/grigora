<?php


function grg_dynamic_customize_css() {
    $defaults = grigora_color_defaults();
    $colors_flag = grigora_get_option("color");

    $spacing_defaults = grigora_spacing_defaults();
    $spacing_flag = grigora_get_option("spacing");
    
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

?>
</style>
<style>
<?php if($spacing_flag) {
    ?>
    /*Spacing and Layout*/

    <?php if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row') {
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

    <?php
}

?>
</style>
<?php
} 

add_action( 'wp_head', 'grg_dynamic_customize_css' );