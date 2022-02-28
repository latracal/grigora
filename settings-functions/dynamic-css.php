<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/**
 * Applies dynamic css to elements when the value is changed through customizer setting
 * each flag check if the option is enabled in the Grigora options and then shows settings inside
 * customizer
 * 
 * @since  1.000
 * 
 * @return str Dynamic CSS String
 */

function grg_dynamic_customize_css_var() {
    $defaults = grigora_color_defaults();

    $spacing_defaults = grigora_spacing_defaults();
  
    $typography_defaults = grigora_typography_defaults();
    $typography_fonts_defaults = grigora_typography_defaults_fonts(); 
    
    $blog_defaults = grigora_blog_defaults();
    $blog_flag = grigora_get_option("blog") && is_grigora_pro_active();
    
    $scroll_defaults = grigora_scroll_defaults();
    $scroll_flag = grigora_get_option("scroll") && is_grigora_pro_active();

    $breadcrumb_defaults = grigora_breadcrumbs_defaults();

    $cookie_flag = grigora_get_option("cookie") && is_grigora_pro_active();
    $out = "";
    

    /**
     * Colors
     * 
     */
    $out = $out."body {
        background-color: ".get_theme_mod('grg_bg-color', $defaults['grg_bg-color']).";
    } ".

    ".desktop-nav, .navbar, .mobile-header .top-part {
        background-color: ".get_theme_mod('grg_header_bg-color', $defaults['grg_header_bg-color']).";
    } ".

    ".desktop-nav .menu-container .menu, .mobile-header .menu-container .menu {
        background-color: ".get_theme_mod('grg_header_menu_bg-color', $defaults['grg_header_menu_bg-color']).";

    }

    .desktop-nav .menu-container .menu .menu-item .sub-menu, .mobile-header .menu-container .menu .menu-item .sub-menu {
        
        background-color: ".get_theme_mod('grg_header_submenu_bg-color', $defaults['grg_header_submenu_bg-color']).";

    }

    .desktop-nav .search-box,
    .desktop-nav .search-box .search-field, .mobile-header .search-box, .mobile-header .search-box .search-field {
        background-color: ".get_theme_mod('grg_header_searchbox_bg-color', $defaults['grg_header_searchbox_bg-color']).";

    }

    .mobile-header .top-part #menu-toggle-btn .line{
        background-color: ".get_theme_mod('grg_header_text-color', $defaults['grg_header_text-color']).";
    }

    .desktop-nav .navbar .title a,
    .menu-container .menu a, .mobile-header .top-part .title a, .mobile-header .menu-container .menu a, .mobile-header .top-part .search-btn svg {
        color: ".get_theme_mod('grg_header_text-color', $defaults['grg_header_text-color']).";

    }

    .desktop-nav .menu-container .menu a,.mobile-header .menu-container .menu a, .desktop-nav .menu-container .search-btn svg{
        color: ".get_theme_mod('grg_menu_text-color', $defaults['grg_menu_text-color']).";
    }

    .desktop-nav .menu-container .menu a:hover{
        border-bottom: 3px solid ".get_theme_mod('grg_menu_text-color', $defaults['grg_menu_text-color'])." !important; 
    }

    .desktop-nav .menu-container .menu .menu-item:hover a{
        border-bottom: 3px solid ".get_theme_mod('grg_menu_text-color', $defaults['grg_menu_text-color'])." !important; 
    }

    .desktop-nav .menu-container .menu .menu-item:hover .sub-menu a{
        border-bottom:none !important;
    }

    .menu-container .menu-item-has-children a::after {
        border:solid ".get_theme_mod('grg_menu_text-color', $defaults['grg_menu_text-color'])." !important;
        border-width: 0 2px 2px 0 !important;
    }

    .footer .footer-menu {
        background-color: ".get_theme_mod('grg_footer_menu_bg-color', $defaults['grg_footer_menu_bg-color']).";

    }

    .footer .copyrights {
        background-color: ".get_theme_mod('grg_footer_bg-color', $defaults['grg_footer_bg-color']).";

    }

    .footer .footer-menu a,
    .footer .copyrights {
        color: ".get_theme_mod('grg_footer_text-color', $defaults['grg_footer_text-color']).";

    }

    .container .article .post-container .post .post-desc p,
    p,
    ul,
    ol {
        color: ".get_theme_mod('grg_text-color', $defaults['grg_text-color']).";

    }

    main a,
    .container .article p a, .container .article .cat-name, footer .copyrights a, .grigora-primary-sidebar a{
        color: ".get_theme_mod('grg_anchor-text-color', $defaults['grg_anchor-text-color']).";
    }

    main a:hover,
    .container .article p a:hover, .container .article .cat-name:hover, footer .copyrights a:hover {
        color: ".get_theme_mod('grg_anchor-text-hover-color', $defaults['grg_anchor-text-hover-color']).";
    }

    .read-btn, .container .article .pagination .next, .container .article .pagination .prev, .form-submit .submit, 
    input[type='button'],
    input[type='reset'],
    input[type='submit'] {
        background-color: ".get_theme_mod('grg_btn-color', $defaults['grg_btn-color'])." !important;

    }

    .container .article .pagination .next.page-numbers,.container .article .pagination .prev.page-numbers, .form-submit .submit{
        color: ".get_theme_mod('grg_btn-text-color', $defaults['grg_btn-text-color']).";
    }
    
    .container .article .post-container .post .post-desc a, input[type='button'],
    input[type='reset'],
    input[type='submit'] {
        color: ".get_theme_mod('grg_btn-text-color', $defaults['grg_btn-text-color']).";

    }

    main h1,
    main h1 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h1-tag-color', $defaults['grg_h1-tag-color']).";

    }

    main h2,
    main h2 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h2-tag-color', $defaults['grg_h2-tag-color']).";

    }

    main h3,
    main h3 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h3-tag-color', $defaults['grg_h3-tag-color']).";

    }

    main h4,
    main h4 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h4-tag-color', $defaults['grg_h4-tag-color']).";

    }

    main h5,
    main h5 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h5-tag-color', $defaults['grg_h5-tag-color']).";

    }

    main h6,
    main h6 a,
    .container .article .post-container .post .post-desc .post-title a {
        color: ".get_theme_mod('grg_h6-tag-color', $defaults['grg_h6-tag-color']).";

    }

    .container .article .breadcrumb,
    .container .article .breadcrumb a {
        color: ".get_theme_mod('grg_breadcrumb-color', $defaults['grg_breadcrumb-color']).";
    }

    .comment-list .comment-box p {
        color: ".get_theme_mod('grg_comment_text_colors', $defaults['grg_comment_text_colors']).";

    }

    .comment-list .comment-box .comment-meta .comment-author-time {
        color: ".get_theme_mod('grg_comment_date_colors', $defaults['grg_comment_date_colors']).";

    }

    .comment-list .comment-box .comment-reply a {
        background-color: ".get_theme_mod('grg_comment_reply_colors', $defaults['grg_comment_reply_colors']).";

    }

    .comment-list .comment-box .comment-reply a {
        color: ".get_theme_mod('grg_comment_reply_text_colors', $defaults['grg_comment_reply_text_colors']).";
        
    }

    .comment-list .comment-box .comment-meta .fn a {
        color: ".get_theme_mod('grg_comment_title_colors', $defaults['grg_comment_title_colors']).";
        
    }

    .container .article .pagination .next,
    .container .article .pagination .prev,
    .container .article .post-pagination .pagination-prev-post,
    .container .article .post-pagination .pagination-next-post {
        background-color: ".get_theme_mod('grg_post_nav_colors', $defaults['grg_post_nav_colors']).";
        
    }

    .container .article .post-pagination .pagination-prev-post a,
    .container .article .post-pagination .pagination-next-post a {
        color: ".get_theme_mod('grg_post_nav_text_colors', $defaults['grg_post_nav_text_colors']).";        
    }

    .container .article .pagination .nav-links a,
    span.current {
        color: ".get_theme_mod('grg_post_nav_text_colors', $defaults['grg_post_nav_text_colors']).";
        

    }

    .related-posts a {
        color: ".get_theme_mod('grg_related_post_title_colors', $defaults['grg_related_post_title_colors']).";
        
    }

    .related-posts a:hover {
        color: ".get_theme_mod('grg_related_post_title_hover_colors', $defaults['grg_related_post_title_hover_colors']).";
        
    }

    .to-top {
        background-color: ".get_theme_mod('grg_scroll_colors', $defaults['grg_scroll_colors']).";
        
    }

    .to-top .up-arrow {
        fill: ".get_theme_mod('grg_scroll_icon_colors', $defaults['grg_scroll_icon_colors']).";
        
    }

    .grigora-table-of-contents {
        background-color: ".get_theme_mod('grg_colors_toc_background', $defaults['grg_colors_toc_background']).";
        
        border: 1px solid ".get_theme_mod('grg_colors_toc_border', $defaults['grg_colors_toc_border']).";
        
    }


    .grigora-toc-headline {
        color: ".get_theme_mod('grg_colors_toc_title', $defaults['grg_colors_toc_title']).";
        
    }

    .grigora-table-of-contents a {
        color: ".get_theme_mod('grg_colors_toc_links', $defaults['grg_colors_toc_links']).";
        
    }

    .grigora-table-of-contents a:hover {
        color: ".get_theme_mod('grg_colors_toc_links_hover', $defaults['grg_colors_toc_links_hover']).";
        
    }

    .grigora-table-of-contents a:visited {
        color: ".get_theme_mod('grg_colors_toc_links_visited', $defaults['grg_colors_toc_links_visited']).";
        
    }

    .grigora-table-of-contents .toggle-toc {
        color: ".get_theme_mod('grg_colors_toc_toggle', $defaults['grg_colors_toc_toggle']).";
        
    }

    ";

    /**
     * Layout & Spacing
     */
    if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'containedpadded') {
        $out=$out."
        .container .article{
            padding: 0 2.5rem;
        }

        .container .grigora-primary-sidebar{
            padding: 0 2.5rem;
        }
        ";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'containedfull' && get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])== 'row-reverse'){
        $out=$out."
        .container .article{         
            padding-right: 0;
        }

        .container .grigora-primary-sidebar{
            padding-left: 0;
        }
        ";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'containedfull' && get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])== 'none'){
        $out=$out."
        .container .article{
            padding-left: 0;
            padding-right: 0;
        }

        .container .grigora-primary-sidebar{
            padding-right: 0;
        }
        ";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'stretch' && get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])== 'row-reverse'){
        $out=$out."
        .container .article{         
            padding-right: 0;
        }

        .container .grigora-primary-sidebar{
            padding-left: 0;
        }

        .container{
            max-width:100% !important;
        }
        ";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'stretch' && get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])== 'none'){
        $out=$out."
        .container .article{
            padding-left: 0;
            padding-right: 0;
        }

        .container .grigora-primary-sidebar{
            padding-right: 0;
        }
        
        .container{
            max-width:100% !important;
        }";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'containedfull'){
        $out=$out."
        .container .article{
            padding-left: 0;            
        }

        .container .grigora-primary-sidebar{
            padding-right: 0;
        }
        ";
    } else if(get_theme_mod('grg_layout-container', $spacing_defaults['grg_layout-container'])== 'stretch'){
        $out=$out."
        .container .article{
            padding-left: 0;
        }

        .container .grigora-primary-sidebar{
            padding-right: 0;
        }
        
        .container{
            max-width:100% !important;
        }";
    } 
        
    if(get_theme_mod('grg_header-search-btn', $spacing_defaults['grg_header-search-btn'])== 0) {
        $out=$out."
        @media (max-width: 768px) {
            .mobile-header .top-part .title {
                padding: 0 0 0 3rem;
            }
        }
        ";  
    }

    $classes = get_body_class();
    if(in_array('rtl',$classes)){
        if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row') {
            $out=$out.".container {
            flex-direction: row-reverse;
            

        }";

        }

        else if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row-reverse') {
            $out=$out.".container {
                flex-direction: row;
            }";
        }

        else {
            $out=$out.".container .article {
                width: 100%;
                
            }

            .container .article {
                width: 100%;
                
            }


            .grigora-primary-sidebar {
                display: none;
                
            } ";


        }
    }else{

        if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row') {
            $out=$out.".container {
            flex-direction: ".get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']).";
            

        }";

        }

        else if(get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment'])=='row-reverse') {
            $out=$out.".container {
                flex-direction: ".get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']).";
            }";
        }

        else {
            $out=$out.".container .article {
                width: 100%;
                
            }

            .container .article {
                width: 100%;
                
            }


            .grigora-primary-sidebar {
                display: ".get_theme_mod('grg_sidebar-alignment', $spacing_defaults['grg_sidebar-alignment']).";
                
            } ";


        }
    }

    if(get_theme_mod('grg_header_style', $spacing_defaults['grg_header_style'])=='style2'){
        $out=$out.".desktop-nav{
            flex-direction:row;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            border-bottom: 1px solid #aaaaaa;
        }
        
        .desktop-nav .menu-container .menu{
            background-color:transparent; 
            padding: 0 4rem 0 0;
        }

        ";
    }else{
        $out=$out.".desktop-nav{
            display: flex;
            flex-direction: column;
        }";
    }

    $out=$out.".container {
        max-width: ".get_theme_mod('grg_container-width', $spacing_defaults['grg_container-width'])."px;

    }

    .container {
        padding-top: ".get_theme_mod('grg_container-top-padding', $spacing_defaults['grg_container-top-padding'])."px;

    }

    .container {
        padding-right: ".get_theme_mod('grg_container-right-padding', $spacing_defaults['grg_container-right-padding'])."px;

    }

    .container {
        padding-bottom: ".get_theme_mod('grg_container-bottom-padding', $spacing_defaults['grg_container-bottom-padding'])."px;

    }

    .container {
        padding-left: ".get_theme_mod('grg_container-left-padding', $spacing_defaults['grg_container-left-padding'])."px;

    }

    .container .article{
        padding-left: ".get_theme_mod('grg_article-left-padding', $spacing_defaults['grg_article-left-padding'])."px;
        padding-right: ".get_theme_mod('grg_article-right-padding', $spacing_defaults['grg_article-right-padding'])."px;
    }

    .container .grigora-primary-sidebar {
        width: ".get_theme_mod('grg_sidebar-width', $spacing_defaults['grg_sidebar-width'])."%;
    }

    .grigora-primary-sidebar{
        margin-top: ".get_theme_mod('grg_sidebar-margin-top', $spacing_defaults['grg_sidebar-margin-top'])."px;
        margin-bottom: ".get_theme_mod('grg_sidebar-margin-top', $spacing_defaults['grg_sidebar-margin-bottom'])."px;
    }

    .container .grigora-primary-sidebar{
        padding-right: ".get_theme_mod('grg_sidebar-padding-right', $spacing_defaults['grg_sidebar-padding-right'])."px;
        padding-left: ".get_theme_mod('grg_sidebar-padding-left', $spacing_defaults['grg_sidebar-padding-left'])."px;
    }

    .container .article{
        margin-top: ".get_theme_mod('grg_article-top-margin', $spacing_defaults['grg_article-top-margin'])."px;
        margin-bottom: ".get_theme_mod('grg_article-bottom-margin', $spacing_defaults['grg_article-bottom-margin'])."px;
    }

    @media(max-width:768px) {
        .container .grigora-primary-sidebar {
            width: 100%;
        }
    }

    @media(max-width:768px) {
        .container .article {
            width: 100%;
        }
    }

    .desktop-nav, .mobile-header .top-part {
        min-height: ".get_theme_mod('grg_header-height', $spacing_defaults['grg_header-height'])."px;
    }

    .desktop-nav .navbar .logo img{
        height: ".get_theme_mod('grg_header_image_height', $spacing_defaults['grg_header_image_height'])."px;
    }
   
    .mobile-header .logo img{
        height: ".get_theme_mod('grg_header_image_height_mobile', $spacing_defaults['grg_header_image_height_mobile'])."px;
    }

    ";

    /**
     * Typography
     */
    $out=$out."body, textarea {
        font-family: ".get_theme_mod('grg_typography_body_font', $typography_fonts_defaults['grg_typography_body_font']).", sans-serif;
        
    }

    main p,.container .article p, .container .article li, .container .article .wp-block-quote p, .container .article .wp-block-quote cite, .container .article .wp-block-preformatted, .container .article .wp-block-code, .container .article .wp-block-table table, .wp-block-pullquote p, .wp-block-pullquote cite {
        font-weight: ".get_theme_mod('grg_typography_body_weight', $typography_defaults['grg_typography_body_weight']).";
        
        font-size: ".get_theme_mod('grg_typography_body_font_size', $typography_defaults['grg_typography_body_font_size'])."px;
    }

    main {
        text-transform: ".get_theme_mod('grg_typography_body_font_transform', $typography_defaults['grg_typography_body_font_transform']).";
        
    }

    .desktop-nav .navbar .title h1, .mobile-header .top-part .title h1 {
        font-family: ".get_theme_mod('grg_typography_site_title_font', $typography_fonts_defaults['grg_typography_site_title_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_site_title_weight', $typography_defaults['grg_typography_site_title_weight']).";
        
        font-size: ".get_theme_mod('grg_typography_site_title_size', $typography_defaults['grg_typography_site_title_size'])."px;
        text-transform: ".get_theme_mod('grg_typography_site_title_transform', $typography_defaults['grg_typography_site_title_transform']).";
        
    }

    .desktop-nav .navbar .title h2, .mobile-header .top-part .title h2 {
        font-family: ".get_theme_mod('grg_typography_site_desc_font', $typography_fonts_defaults['grg_typography_site_desc_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_site_desc_weight', $typography_defaults['grg_typography_site_desc_weight']).";
        
        font-size: ".get_theme_mod('grg_typography_site_desc_size', $typography_defaults['grg_typography_site_desc_size'])."px;
        text-transform: ".get_theme_mod('grg_typography_site_desc_transform', $typography_defaults['grg_typography_site_desc_transform']).";
        
    }

    .desktop-nav .menu-container .menu {
        font-family: ".get_theme_mod('grg_typography_site_menu_font', $typography_fonts_defaults['grg_typography_site_menu_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_site_menu_weight', $typography_defaults['grg_typography_site_menu_weight']).";
        
        font-size: ".get_theme_mod('grg_typography_site_menu_size', $typography_defaults['grg_typography_site_menu_size'])."px;
        text-transform: ".get_theme_mod('grg_typography_site_menu_transform', $typography_defaults['grg_typography_site_menu_transform']).";
        
    }

    .read-btn {
        font-family: ".get_theme_mod('grg_typography_button_font', $typography_fonts_defaults['grg_typography_button_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_button_weight', $typography_defaults['grg_typography_button_weight']).";
        
        font-size: ".get_theme_mod('grg_typography_button_size', $typography_defaults['grg_typography_button_size'])."px;
        text-transform: ".get_theme_mod('grg_typography_button_transform', $typography_defaults['grg_typography_button_transform']).";
        
    }

    .container .article h1,
    .grigora-primary-sidebar h1 {
        font-family: ".get_theme_mod('grg_typography_h1_font', $typography_fonts_defaults['grg_typography_h1_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h1_weight', $typography_defaults['grg_typography_h1_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h1_transform', $typography_defaults['grg_typography_h1_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h1_size', $typography_defaults['grg_typography_h1_size'])."px;
    }

    .container .article h2,
    .grigora-primary-sidebar h2, .post-title {
        font-family: ".get_theme_mod('grg_typography_h2_font', $typography_fonts_defaults['grg_typography_h2_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h2_weight', $typography_defaults['grg_typography_h2_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h2_transform', $typography_defaults['grg_typography_h2_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h2_size', $typography_defaults['grg_typography_h2_size'])."px;
    }

    .container .article h3,
    .grigora-primary-sidebar h3 {
        font-family: ".get_theme_mod('grg_typography_h3_font', $typography_fonts_defaults['grg_typography_h3_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h3_weight', $typography_defaults['grg_typography_h3_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h3_transform', $typography_defaults['grg_typography_h3_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h3_size', $typography_defaults['grg_typography_h3_size'])."px;
    }

    .container .article h4,
    .grigora-primary-sidebar h4 {
        font-family: ".get_theme_mod('grg_typography_h4_font', $typography_fonts_defaults['grg_typography_h4_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h4_weight', $typography_defaults['grg_typography_h4_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h4_transform', $typography_defaults['grg_typography_h4_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h4_size', $typography_defaults['grg_typography_h4_size'])."px;
    }

    .container .article h5,
    .grigora-primary-sidebar h5 {
        font-family: ".get_theme_mod('grg_typography_h5_font', $typography_fonts_defaults['grg_typography_h5_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h5_weight', $typography_defaults['grg_typography_h5_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h5_transform', $typography_defaults['grg_typography_h5_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h5_size', $typography_defaults['grg_typography_h5_size'])."px;
    }

    .container .article h6,
    .grigora-primary-sidebar h6 {
        font-family: ".get_theme_mod('grg_typography_h6_font', $typography_fonts_defaults['grg_typography_h6_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_h6_weight', $typography_defaults['grg_typography_h6_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_h6_transform', $typography_defaults['grg_typography_h6_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_h6_size', $typography_defaults['grg_typography_h6_size'])."px;
    }

    .footer {
        font-family: ".get_theme_mod('grg_typography_footer_font', $typography_fonts_defaults['grg_typography_footer_font']).", sans-serif;
        
        font-weight: ".get_theme_mod('grg_typography_footer_weight', $typography_defaults['grg_typography_footer_weight']).";
        
        text-transform: ".get_theme_mod('grg_typography_footer_transform', $typography_defaults['grg_typography_footer_transform']).";
        
        font-size: ".get_theme_mod('grg_typography_footer_size', $typography_defaults['grg_typography_footer_size'])."px;
    }";




if($blog_flag) {
    $out=$out.".post-header {
        flex-direction: ".get_theme_mod('grg_blog_single_featuredim_loc', $blog_defaults['grg_blog_single_featuredim_loc'])." !important;
    }

    .feature-img {
        text-align: ".get_theme_mod('grg_blog_single_featuredim_align', $blog_defaults['grg_blog_single_featuredim_align']).";
    }
    
    .container .article .post-container .post img{
        object-fit: ".get_theme_mod('grg_blog_archive_image_fill', $blog_defaults['grg_blog_archive_image_fill']).";
    }";


}

else {
    $out=$out.".post-header {
        flex-direction: ".$blog_defaults['grg_blog_single_featuredim_loc'].";
    }

    .feature-img {
        text-align: ".$blog_defaults['grg_blog_single_featuredim_align'].";     
    }
    
    .container .article .post-container .post img{
        object-fit: ".$blog_defaults['grg_blog_archive_image_fill'].";
    }";


}

if($scroll_flag) {
    $out=$out." .to-top {
        border-radius: ".get_theme_mod('grg_scrollborder', $scroll_defaults['grg_scrollborder'])."px;
    }";

    if(get_theme_mod('grg_scroll-position', $scroll_defaults['grg_scroll-position'])=='2') {
        $out=$out." .to-top {
            left: ".get_theme_mod('grg_scroll-position', $scroll_defaults['grg_scroll-position'])."rem;
        }";

    }

    else {
        $out=$out." .to-top {
            right: 2rem;
        }";

    }

    if(get_theme_mod('grg_scroll-display', $scroll_defaults['grg_scroll-display'])=='mobile') {
        $out=$out." @media(min-width:768px) {
            .to-top {
                display: none !important;
            }
        }";


    }

    elseif(get_theme_mod('grg_scroll-display', $scroll_defaults['grg_scroll-display'])=='display') {
        $out=$out." @media(max-width:768px) {
            .to-top {
                display: none !important;
            }
        }";

    }

    else {
        $out=$out." .to-top {

            display: grid;
        }";

    }
}

else {
    $out=$out." .to-top {
        border-radius: ".$scroll_defaults['grg_scrollborder']."px;
    }";

    if(get_theme_mod('grg_scroll-position', $scroll_defaults['grg_scroll-position'])=='2') {
        $out=$out." .to-top {
            left: ".$scroll_defaults['grg_scroll-position']."rem;
        }";

    }

    else {
        $out=$out." .to-top {
            right: 2rem;
        }";

    }

    if(get_theme_mod('grg_scroll-display', $scroll_defaults['grg_scroll-display'])=='mobile') {
        $out=$out." @media(min-width:768px) {
            .to-top {
                display: none !important;
            }
        }";


    }

    elseif(get_theme_mod('grg_scroll-display', $scroll_defaults['grg_scroll-display'])=='display') {
        $out=$out." @media(max-width:768px) {
            .to-top {
                display: none !important;
            }
        }";


    }

    else {
        $out=$out." .to-top {

            display: grid;
        }";


    }

}

if($cookie_flag) { 
    $out=$out." .cookie {
        background-color: ".get_theme_mod('grg_colors_cookie_background', $defaults['grg_colors_cookie_background'])."; 
    }
    .cookie .notice-text {
        color: ".get_theme_mod('grg_colors_cookie_text', $defaults['grg_colors_cookie_text'])."; 
    }
    .cookie .cookie-btn {
        color: ".get_theme_mod('grg_colors_cookie_button_text', $defaults['grg_colors_cookie_button_text'])."; 
        background-color: ".get_theme_mod('grg_colors_cookie_button_background', $defaults['grg_colors_cookie_button_background'])."; 
    }";
}
else{
    $out=$out." .cookie {
        background-color: ". $defaults['grg_colors_cookie_background']."; 
    }
    .cookie .notice-text {
        color: ".$defaults['grg_colors_cookie_text']."; 
    }
    .cookie .cookie-btn {
        color: ".$defaults['grg_colors_cookie_button_text']."; 
        background-color: ".$defaults['grg_colors_cookie_button_background']."; 
    }";
}
    
$out=$out." 
.container .article .seperator::after {
    content:'".html_entity_decode(get_theme_mod('grg_breadcrumbs_seperator', $breadcrumb_defaults['grg_breadcrumbs_seperator']))."';
}"; 


$out=$out." 
.container .article .breadcrumb {
    justify-content:".get_theme_mod('grg_breadcrumbs_align', $breadcrumb_defaults['grg_breadcrumbs_align']).";
}";


if(function_exists("grigora_wcm_css")){
    $out = $out.grigora_wcm_css();
}

return $out;

}

function grg_enqueue_dynamic_css() {
    ?>
<style id="grg-dynamic-inline-css">
<?php echo grg_dynamic_customize_css_var();
?>
</style>
<?php
}

/**
 * Enqueue External File Dynamic CSS
 * 
 *  @since  1.004
 * 
 * 
 */
if(current_user_can('manage_options') || !is_grigora_pro_active()){
    /**
     * Inline css for logged in users & non pro users
     * 
     *  @since  1.004
     * 
     */
    add_action( 'wp_head', 'grg_enqueue_dynamic_css' );
}
else{
    /**
     * Serve dynamic css in external file if available
     * 
     *  @since  1.004
     * 
     */
    if(grigora_get_option("dynamicexternal")){
        /**
         * If external CSS is on minified active
         * 
         *  @since  1.004
         * 
         */
        if(
            grigora_get_option("minify") && 
            function_exists("grigora_pro_dynamic_minified_file_exists") &&
            function_exists("grigora_pro_dynamic_minified_file_uri") &&
            grigora_pro_dynamic_minified_file_exists()
        ){
            function grigora_pro_dynamic_minified_file(){
                $ver = grg_DEV_MODE ? time() : get_option("grg_dynamic_cache_ver", 1);
                wp_enqueue_style('grg_dynamic_style', grigora_pro_dynamic_minified_file_uri(), [], $ver);
            }
            add_action('wp_enqueue_scripts', 'grigora_pro_dynamic_minified_file');
        }
        /**
         * If external CSS is on minified inactive
         * 
         *  @since  1.004
         * 
         */
        else if(
            function_exists("grigora_pro_dynamic_file_exists") &&
            function_exists("grigora_pro_dynamic_file_uri") &&
            grigora_pro_dynamic_file_exists()
        ){
            function grigora_pro_dynamic_file(){
                $ver = grg_DEV_MODE ? time() : get_option("grg_dynamic_cache_ver", 1);
                wp_enqueue_style('grg_dynamic_style', grigora_pro_dynamic_file_uri(), [], $ver);
            }
            add_action('wp_enqueue_scripts', 'grigora_pro_dynamic_file');
        }
        /**
         * Fallback
         * 
         *  @since  1.004
         * 
         */
        else{
            add_action( 'wp_head', 'grg_enqueue_dynamic_css' );
        }
    }
    /**
     * Minified inline css
     * 
     *  @since  1.004
     * 
     */
    else if(grigora_get_option("minify")){
        if(
            function_exists("grigora_pro_minify_available") && 
            function_exists("grigora_pro_minified_dynamic_css") && 
            grigora_pro_minify_available()
        ){
            function grg_enqueue_dynamic_minified_css() {
                ?>
<style id="grg-dynamic-inline-css">
<?php echo grigora_pro_minified_dynamic_css(grg_dynamic_customize_css_var());
?>
</style>
<?php
            }
            add_action( 'wp_head', 'grg_enqueue_dynamic_minified_css' );
        }
        /**
         * Fallback
         * 
         *  @since  1.004
         * 
         */
        else{
            add_action( 'wp_head', 'grg_enqueue_dynamic_css' );
        }
    }
    /**
     * Fallback
     * 
     *  @since  1.004
     * 
     */
    else{
        add_action( 'wp_head', 'grg_enqueue_dynamic_css' );
    }
}



/**
 * Increment the cache version to reset the dynamic css cache
 * 
 * @since  1.000
 * 
 */
function increment_dynamic_css_cache_ver(){
    $cache_ver = get_option("grg_dynamic_cache_ver", 1);
    $cache_ver++;
    update_option( 'grg_dynamic_cache_ver', $cache_ver );
}

/**
 * Send request to Grigora Pro plugin to regenerate minified CSS files
 * 
 * @since  1.004
 * 
 */
function generate_dynamic_minified_file_css(){
    if(function_exists("grigora_pro_generate_dynamic_file_minified_css")){
        if(grigora_pro_generate_dynamic_file_minified_css(grg_dynamic_customize_css_var())){
            increment_dynamic_css_cache_ver();
        }
    }
}

/**
 * Send request to Grigora Pro plugin to regenerate CSS files
 * 
 * @since  1.004
 * 
 */
function generate_dynamic_file_css(){
    if(function_exists("grigora_pro_generate_dynamic_file_css")){
        if(grigora_pro_generate_dynamic_file_css(grg_dynamic_customize_css_var())){
            increment_dynamic_css_cache_ver();
        }
    }
}

/**
 * Regenerate Dynamic CSS External Files.
 * 
 * @since  1.004
 * 
 */
function grg_regenerate_dynamic_css($old, $new) {
    generate_dynamic_minified_file_css();
    generate_dynamic_file_css();
}

/**
 * Call Regenerate Function Everytime Settings are Updated.
 * 
 */
if(current_user_can('manage_options')){
    $theme_slug = get_option( 'stylesheet' );    
    add_action('update_option_grigora_settings','grg_regenerate_dynamic_css', 10, 2);
    add_action('add_option_grigora_settings','grg_regenerate_dynamic_css', 10, 2);
    add_action("update_option_theme_mods_$theme_slug",'grg_regenerate_dynamic_css', 10, 2);
    add_action("add_option_theme_mods_$theme_slug",'grg_regenerate_dynamic_css', 10, 2);
}



/**
 * Forced CSS as per user selection in specific post
 * 
 *  @since  1.000
 * 
 *  @return css string
 * 
 */
function forced_meta_css(){
    $out = "";
    if(is_single() || is_page()){
        if(
            (
                get_post_meta(get_the_ID(), '_grigora-layout-container', true ) &&
                get_post_meta( get_the_ID(), '_grigora-layout-container', true ) != get_theme_mod('grg_layout-container', grigora_spacing_defaults()['grg_layout-container'])
            ) ||
            (
                get_post_meta(get_the_ID(), '_grigora-sidebar-align', true ) &&
                get_post_meta( get_the_ID(), '_grigora-sidebar-align', true ) != get_theme_mod('grg_sidebar-alignment', grigora_spacing_defaults()['grg_sidebar-alignment'])
            )
        )
        {          
            if(get_post_meta(get_the_ID(), '_grigora-layout-container', true )){
                $layout_container = get_post_meta(get_the_ID(), '_grigora-layout-container', true );
            }
            else{
                $layout_container = get_theme_mod("grg_layout-container", grigora_spacing_defaults()["grg_layout-container"]);
            }
            if(get_post_meta(get_the_ID(), '_grigora-sidebar-align', true )){
                $sidebar_layout = get_post_meta(get_the_ID(), '_grigora-sidebar-align', true );
            }
            else{
                $sidebar_layout = get_theme_mod("grg_sidebar-alignment", grigora_spacing_defaults()["grg_sidebar-alignment"]);
            }
            if($layout_container=="containedpadded" && $sidebar_layout=="row"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container .article{
                    padding: 0 2.5rem;
                }

                .container {
                    flex-direction: row;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 2.5rem;
                }
                ";
            }
            else if($layout_container=="containedpadded" && $sidebar_layout=="row-reverse"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container .article{
                    padding: 0 2.5rem;
                }

                .container {
                    flex-direction: row-reverse;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 2.5rem;
                }
                ";
            }
            else if($layout_container=="containedpadded" && $sidebar_layout=="none"){
                $out=$out."
                .container .article{
                    padding: 0 2.5rem;
                }

                .container {
                    flex-direction: row-reverse;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 2.5rem;
                }

                .grigora-primary-sidebar{
                    display:none;
                }
                ";
            }
            else if($layout_container=="containedfull" && $sidebar_layout=="row"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container .article{
                    padding: 0 2.5rem 0 0;
                }

                .container {
                    flex-direction: row;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 0 0 2.5rem;
                }
                ";
            }
            else if($layout_container=="containedfull" && $sidebar_layout=="row-reverse"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container .article{
                    padding: 0 0 0 2.5rem;
                }

                .container {
                    flex-direction: row-reverse;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 2.5rem 0 0;
                }
                ";
            }
            else if($layout_container=="containedfull" && $sidebar_layout=="none"){
                $out=$out."
                .container .article{
                    padding: 0 0 0 0;
                }
                .grigora-primary-sidebar{
                    display:none;
                }
                
                ";
            }
            else if($layout_container=="stretch" && $sidebar_layout=="row"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container{
                    max-width:100% !important;
                }
                .container .article{
                    padding: 0 2.5rem 0 0;
                }

                .container {
                    flex-direction: row;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 0 0 2.5rem;
                }
                
                ";
            }
            else if($layout_container=="stretch" && $sidebar_layout=="row-reverse"){
                $out=$out."
                .grigora-primary-sidebar{
                    display:block;
                }
                .container{
                    max-width:100% !important;
                }
                .container .article{
                    padding: 0 0 0 2.5rem;
                }

                .container {
                    flex-direction: row-reverse;
                }
        
                .container .grigora-primary-sidebar{
                    padding: 0 2.5rem 0 0;
                }
                
                ";
            }
            else if($layout_container=="stretch" && $sidebar_layout=="none"){
                $out=$out."
                .container{
                    max-width:100% !important;
                }
                .container .article{
                    padding: 0 0 0 0;
                }
                .grigora-primary-sidebar{
                    display:none;
                }
                
                ";
            }
        }
    }
 
    return $out;
}


/**
 * Enqueue the forced css settings
 * 
 *  @since  1.000
 * 
 */
function forced_meta_css_enqueue(){
    ?>
<style id="grg-forced-meta-css">
<?php echo forced_meta_css();
?>
</style>
<?php
}
?>