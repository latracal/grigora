<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}


if ( ! function_exists( 'grigora_customizer_free' ) ) {
    add_action( 'customize_register', 'grigora_customizer_free', 20 );
    function grigora_customizer_free( $wp_customize ) {

        /**
         * Colors Panel
         *
         * @since  1.001
         * 
         */
        $wp_customize->add_panel( 'grg_colors', array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Colors', 'grigora' ),
            'description'    => __( 'Edit colors of your theme', 'grigora' ),
        ) );

        /**
         * Global Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_colors_global', [
            'title' => __( 'Global Colors', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Global Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_bg-color', [ 
        ] );

        $wp_customize->add_control(new grg_customize_color_control($wp_customize, 'grg_bg-setting', array(
            'label'          => __( 'Theme Background Color', 'grigora' ),
            'section'        => 'grg_colors_global',
            'settings'       => 'grg_bg-color',
        )));

        $wp_customize->add_setting( 'grg_text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_text-setting',
            array(
                'label'          => __( 'Text Color', 'grigora' ),
                'section'        => 'grg_colors_global',
                'settings'       => 'grg_text-color',
            )
        ) );
        
        $wp_customize->add_section( 'grg_colors_header', [
            'title' => __( 'Header', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        $wp_customize->add_setting( 'grg_anchor-text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_anchor-text-setting',
            array(
                'label'          => __( 'Anchor Text Color', 'grigora' ),
                'section'        => 'grg_colors_global',
                'settings'       => 'grg_anchor-text-color',
            )
        ) ); 
        
        $wp_customize->add_setting( 'grg_anchor-text-hover-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_anchor-text-hover-setting',
            array(
                'label'          => __( 'Anchor Text Hover Color', 'grigora' ),
                'section'        => 'grg_colors_global',
                'settings'       => 'grg_anchor-text-hover-color',
            )
        ) );    

        /**
         * Header Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_header_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_header_bg-setting',
            array(
                'label'          => __( 'Header Background Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_header_bg-color',
            )
        ) );

        /**
         * Header Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_header_menu_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_header_menu_bg-setting',
            array(
                'label'          => __( 'Header Menu Background Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_header_menu_bg-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_header_submenu_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_header_submenu_bg-setting',
            array(
                'label'          => __( 'Header Submenu Background Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_header_submenu_bg-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_header_searchbox_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_header_searchbox_bg-setting',
            array(
                'label'          => __( 'Searchbox Background Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_header_searchbox_bg-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_header_text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_header_text-color-setting',
            array(
                'label'          => __( 'Heading Text Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_header_text-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_menu_text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_menu_text-color-setting',
            array(
                'label'          => __( 'Menu Text Color', 'grigora' ),
                'section'        => 'grg_colors_header',
                'settings'       => 'grg_menu_text-color',
            )
        ) );

        /**
         * Footer Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_colors_footer', [
            'title' => __( 'Footer', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Footer Colors Settings
         *
         * @since  1.001
         * 
         */


        $wp_customize->add_setting( 'grg_footer_menu_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_footer_menu_bg-setting',
            array(
                'label'          => __( 'Footer Menu Background Color', 'grigora' ),
                'section'        => 'grg_colors_footer',
                'settings'       => 'grg_footer_menu_bg-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_footer_bg-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_footer_bg-setting',
            array(
                'label'          => __( 'Footer Background Color', 'grigora' ),
                'section'        => 'grg_colors_footer',
                'settings'       => 'grg_footer_bg-color',
            )
        ) );

        $wp_customize->add_setting( 'grg_footer_text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_footer_text-setting',
            array(
                'label'          => __( 'Footer Text Color', 'grigora' ),
                'section'        => 'grg_colors_footer',
                'settings'       => 'grg_footer_text-color',
            )
        ) );

        /**
         * Button Colors Section
         *
         * @since  1.001
         * 
         */
        
        $wp_customize->add_section( 'grg_colors_buttons', [
            'title' => __( 'Button', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Button Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_btn-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_btn-setting',
            array(
                'label'          => __( 'Global Button Color', 'grigora' ),
                'section'        => 'grg_colors_buttons',
                'settings'       => 'grg_btn-color',
            )
        ) );   
        
        $wp_customize->add_setting( 'grg_btn-text-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_btn-text-setting',
            array(
                'label'          => __( 'Global Button Text Color', 'grigora' ),
                'section'        => 'grg_colors_buttons',
                'settings'       => 'grg_btn-text-color',
            )
        ) );    

        /**
         * Heading Colors Section
         *
         * @since  1.001
         * 
         */
         
        $wp_customize->add_section( 'grg_colors_headings', [
            'title' => __( 'Headings', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Heading Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_h1-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h1-tag-setting',
            array(
                'label'          => __( 'Global H1 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h1-tag-color',
            )
        ) );         
                 
        $wp_customize->add_setting( 'grg_h2-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h2-tag-setting',
            array(
                'label'          => __( 'Global H2 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h2-tag-color',
            )
        ) );         
            
        $wp_customize->add_setting( 'grg_h3-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h3-tag-setting',
            array(
                'label'          => __( 'Global H3 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h3-tag-color',
            )
        ) );    
                     
        $wp_customize->add_setting( 'grg_h4-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h4-tag-setting',
            array(
                'label'          => __( 'Global H4 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h4-tag-color',
            )
        ) );   
                    
        $wp_customize->add_setting( 'grg_h5-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h5-tag-setting',
            array(
                'label'          => __( 'Global H5 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h5-tag-color',
            )
        ) );   
                    
        $wp_customize->add_setting( 'grg_h6-tag-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_h6-tag-setting',
            array(
                'label'          => __( 'Global H6 Text Color', 'grigora' ),
                'section'        => 'grg_colors_headings',
                'settings'       => 'grg_h6-tag-color',
            )
        ) );   

        /**
         * Breadcrumb Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_colors_breadcrumb', [
            'title' => __( 'Breadcrumb', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * 
         * Breadcrumb Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_breadcrumb-color', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_breadcrumb-setting',
            array(
                'label'          => __( 'Breadcrumb Color', 'grigora' ),
                'section'        => 'grg_colors_breadcrumb',
                'settings'       => 'grg_breadcrumb-color',
            )
        ) ); 

        /**
         * Comments Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_colors_comments', [
            'title' => __( 'Comments', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Comments Colors Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_comment_text_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_comment-setting',
            array(
                'label'          => __( 'Comment Text Color', 'grigora' ),
                'section'        => 'grg_colors_comments',
                'settings'       => 'grg_comment_text_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_comment_date_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_comment-date-setting',
            array(
                'label'          => __( 'Comment Date Text Color', 'grigora' ),
                'section'        => 'grg_colors_comments',
                'settings'       => 'grg_comment_date_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_comment_reply_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_comment-reply-setting',
            array(
                'label'          => __( 'Comment Reply Button Color', 'grigora' ),
                'section'        => 'grg_colors_comments',
                'settings'       => 'grg_comment_reply_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_comment_reply_text_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_comment-reply-text-setting',
            array(
                'label'          => __( 'Comment Reply Button Text Color', 'grigora' ),
                'section'        => 'grg_colors_comments',
                'settings'       => 'grg_comment_reply_text_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_comment_title_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_comment-title-setting',
            array(
                'label'          => __( 'Comment Title Color', 'grigora' ),
                'section'        => 'grg_colors_comments',
                'settings'       => 'grg_comment_title_colors',
            )
        ) );  

        /**
         * Related Posts Colors Section
         *
         * @since  1.001
         * 
         */
        $wp_customize->add_section( 'grg_colors_related_posts', [
            'title' => __( 'Related Posts', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Related Posts Colors Settings
         *
         * @since  1.001
         * 
         */
        
        $wp_customize->add_setting( 'grg_related_post_title_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_related_post-setting',
            array(
                'label'          => __( 'Related Post Title Color', 'grigora' ),
                'section'        => 'grg_colors_related_posts',
                'settings'       => 'grg_related_post_title_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_related_post_title_hover_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_related_post_hover-setting',
            array(
                'label'          => __( 'Related Post Title Hover Color', 'grigora' ),
                'section'        => 'grg_colors_related_posts',
                'settings'       => 'grg_related_post_title_hover_colors',
            )
        ) );  

        /**
         * Post Navigation Colors Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_colors_postnav', [
            'title' => __( 'Post Navigation', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_colors',
        ] );

        /**
         * Post Navigation Colors Setting
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_post_nav_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_post_nav-setting',
            array(
                'label'          => __( 'Post Navigation Color', 'grigora' ),
                'section'        => 'grg_colors_postnav',
                'settings'       => 'grg_post_nav_colors',
            )
        ) );  

        $wp_customize->add_setting( 'grg_post_nav_text_colors', [ 
            ] );
    
        $wp_customize->add_control( new grg_customize_color_control(
            $wp_customize,
            'grg_post_nav_text-setting',
            array(
                'label'          => __( 'Post Navigation Text Color', 'grigora' ),
                'section'        => 'grg_colors_postnav',
                'settings'       => 'grg_post_nav_text_colors',
            )
        ) );  
        /**
         * End Colors
         */

        /**
         * Layout and Spacing
         */

         /**
         * Layout & Spacing Panel
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_panel( 'grg_spacing', array(
            'priority'       => 10,
            'capability'     => __('edit_theme_options' , 'grigora'),
            'theme_supports' => '',
            'title'          => 'Layout & Spacing',
            'description'    => __('Adjust spacing and layout with available options' , 'grigora'),
        ) );

        /**
         * Header Layout & Spacing Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_header', [
            'title' => __( 'Header', 'grigora' ),
            'priority' => 30,   
            'panel' => 'grg_spacing',
        ] );

         /**
         * Header Layout & Spacing Setting
         *
         * @since  1.001
         * 
         */
        
        $wp_customize->add_setting( 'grg_header_style', [ 'sanitize_callback' => 'grg_sanitize_select'
            ] );
    
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'grg_header_style', array(
            'label' => __('Header Style' , 'grigora'),
            'section' => 'grg_header',
            'settings' => 'grg_header_style',
            'type' => 'select',
            'choices' => [
                'style1' => 'Style 1',
                'style2' => 'Style 2',
            ]
            )));

        /**
         * Header Layout & Spacing Setting
         *
         * @since  1.001
         * 
         */  

        $wp_customize->add_setting( 'grg_header_image_height', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_header_image_height', array(
            'label' => __('Header Image Size for Desktop', 'grigora'),
            'section' => 'grg_header',
            'settings' => 'grg_header_image_height',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 30,
                'max' => 250,
                )
            ))); 
        

        $wp_customize->add_setting( 'grg_header_image_height_mobile', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_header_image_height_mobile', array(
            'label' => __('Header Image Size for Mobile' , 'grigora'),
            'section' => 'grg_header',
            'settings' => 'grg_header_image_height_mobile',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 30,
                'max' => 250,
                )
            )));

        $wp_customize->add_setting( 'grg_header-height', [ 
        ] );

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_header-height-settings', array(
            'label' => __('Minimum Header Height' , 'grigora'),
            'section' => 'grg_header',
            'settings' => 'grg_header-height',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 20,
                'max' => 200,
                )
        )));

        $wp_customize->add_setting( 'grg_header-search-btn', [ 
            ] );
    
        $wp_customize->add_control(new grg_checkbox($wp_customize, 'grg_header-search-btn-settings', array(
            'label' => __('Show Search Button', 'grigora'),
            'section' => 'grg_header',
            'settings' => 'grg_header-search-btn',
            'type' => 'checkbox',            
            )
        ));

         /**
         * Sidebar Layout & Spacing Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_sidebar_alignment', [
            'title' => __( 'Sidebar', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_spacing',
        ] );

         /**
         * Sidebar Layout & Spacing Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_sidebar-alignment', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_sidebar-setting',
            array(
                'label'          => __( 'Sidebar Alignment', 'grigora' ),
                'section'        => 'grg_sidebar_alignment',
                'settings'       => 'grg_sidebar-alignment',
                'type' => 'select',
                'choices' => [
                    'row' => 'Right',
                    'row-reverse' => 'Left',
                    'none' => 'None'
                ]
            )
        ) );
        
        $wp_customize->add_setting('grg_sidebar-width', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_sidebar-width-settings', array(
        'label' => __('Sidebar Width (in %)' , 'grigora'),
        'section' => 'grg_sidebar_alignment',
        'settings' => 'grg_sidebar-width',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 15,
            'max' => 50,
            )
        )));

        $wp_customize->add_setting('grg_sidebar-margin-top', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_sidebar-margin-top-settings', array(
        'label' => __('Sidebar Top Margin', 'grigora'),
        'section' => 'grg_sidebar_alignment',
        'settings' => 'grg_sidebar-margin-top',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_sidebar-margin-bottom', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_sidebar-margin-bottom-settings', array(
        'label' => __('Sidebar Bottom Margin' , 'grigora'),
        'section' => 'grg_sidebar_alignment',
        'settings' => 'grg_sidebar-margin-bottom',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_sidebar-padding-right', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_sidebar-padding-right-settings', array(
        'label' => __('Sidebar Right Padding','grigora'),
        'section' => 'grg_sidebar_alignment',
        'settings' => 'grg_sidebar-padding-right',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_sidebar-padding-left', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_sidebar-padding-left-settings', array(
        'label' => __('Sidebar Left Padding', 'grigora'),
        'section' => 'grg_sidebar_alignment',
        'settings' => 'grg_sidebar-padding-left',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));


         /**
         * Container Layout & Spacing Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_layout', [
            'title' => __( 'Container', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_spacing',
        ] );


         /**
         * Container Layout & Spacing Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_layout-container', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_layout-container',
            array(
                'label'          => __( 'Content Layout', 'grigora' ),
                'section'        => 'grg_layout',
                'settings'       => 'grg_layout-container',
                'type' => 'select',
                'choices' => [
                    'containedpadded' => 'Contained Padded',
                    'containedfull' => 'Contained Full Width',
                    'stretch' => 'Stretch Full Width'
                ]
            )
        ) );

        $wp_customize->add_setting('grg_container-width', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_container-width-settings', array(
        'label' => __('Container Width' , 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_container-width',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 700,
            'max' => 2000,
            )
        )));
              
        $wp_customize->add_setting('grg_container-top-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_container-top-padding-settings', array(
        'label' => __('Container Top Padding' , 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_container-top-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));
              
        $wp_customize->add_setting('grg_container-right-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_container-right-padding-settings', array(
        'label' => __('Container Right Padding' , 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_container-right-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));
              
        $wp_customize->add_setting('grg_container-bottom-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_container-bottom-padding-settings', array(
        'label' => __('Container Bottom Padding','grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_container-bottom-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));
              
        $wp_customize->add_setting('grg_container-left-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_container-left-padding-settings', array(
        'label' => __('Container Left Padding', 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_container-left-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_article-top-margin', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_article-top-margin-settings', array(
        'label' => __('Article Top Margin', 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_article-top-margin',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_article-bottom-margin', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_article-bottom-margin-settings', array(
        'label' => __('Article Bottom Margin' , 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_article-bottom-margin',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_article-left-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_article-left-padding-settings', array(
        'label' => __('Article Left Padding', 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_article-left-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));

        $wp_customize->add_setting('grg_article-right-padding', [
            
        ]);

        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_article-right-padding-settings', array(
        'label' => __('Article Right Padding', 'grigora'),
        'section' => 'grg_layout',
        'settings' => 'grg_article-right-padding',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            )
        )));
        /**
         * End Layout & Spacing
         */

         /**
         * Blog Layout
         */

        
         /**
         * Blog / Archive Section
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_section( 'grg_blog_archive', [
            'title' => __( 'Blog / Archive', 'grigora' ),
            'priority' => 30,
        ] );

         /**
         * Blog / Archive Settings
         *
         * @since  1.001
         * 
         */

        $wp_customize->add_setting( 'grg_blog_archive_excerpt_words', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_blog_archive_excerpt_words', array(
            'label' => __('Excerpt Word Count', 'grigora'),
            'section' => 'grg_blog_archive',
            'settings' => 'grg_blog_archive_excerpt_words',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                )
        )));

        $wp_customize->add_setting( 'grg_blog_archive_read_more_display', [ 
            ] );
    
        $wp_customize->add_control( new grg_checkbox(
            $wp_customize,
            'grg_blog_archive_read_more_display',
            array(
                'label'          => __( 'Display Read More Button', 'grigora' ),
                'section'        => 'grg_blog_archive',
                'settings'       => 'grg_blog_archive_read_more_display',
                'type' => 'checkbox'
            )
        ) );
        /**
         * End Blog Layout
         */
        
        /**
         * Typography
         */

         /**
         * Typography Panel
         *
         * @since  1.001
         * 
         */
        
        $wp_customize->add_panel( 'grg_typography', array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'Typography',
            'description'    => __('Edit text styling', 'grigora'),
        ) );

         /**
         * Body Typography Sections
         *
         * @since  1.001
         * 
         */ 
        
        $wp_customize->add_section( 'grg_typography_body', [
            'title' => __( 'Body', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_typography',
        ] );

          /**
         * Body Typography Settings
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_setting( 'grg_typography_body_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_body_font',
            array(
                'label'          => __( 'Body Font', 'grigora' ),
                'section'        => 'grg_typography_body',
                'settings'       => 'grg_typography_body_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_body_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_body_weight',
            array(
                'label'          => __( 'Body Font Weight', 'grigora' ),
                'section'        => 'grg_typography_body',
                'settings'       => 'grg_typography_body_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_body_font_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_body_font_size', array(
            'label' => __('Body Font Size', 'grigora'),
            'section' => 'grg_typography_body',
            'settings' => 'grg_typography_body_font_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 30,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_body_font_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_body_font_transform',
            array(
                'label'          => __( 'Body Text Transform', 'grigora' ),
                'section'        => 'grg_typography_body',
                'settings'       => 'grg_typography_body_font_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

          /**
         * Header Typography Sections
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_section( 'grg_typography_header', [
            'title' => __( 'Header', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_typography',
        ] );

        /**
         * Header Typography Settings
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_setting( 'grg_typography_site_title_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_title_font',
            array(
                'label'          => __( 'Site Title Font', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_title_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_title_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_title_weight',
            array(
                'label'          => __( 'Site Title Font Weight', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_title_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_title_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_site_title_size', array(
            'label' => __('Site Title Font Size' , 'grigora'),
            'section' => 'grg_typography_header',
            'settings' => 'grg_typography_site_title_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 150,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_site_title_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_title_transform',
            array(
                'label'          => __( 'Site Title Transform', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_title_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_desc_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_desc_font',
            array(
                'label'          => __( 'Site Description Font', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_desc_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_desc_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_desc_weight',
            array(
                'label'          => __( 'Site Description Font Weight', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_desc_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );


        $wp_customize->add_setting( 'grg_typography_site_desc_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_site_desc_size', array(
            'label' => __('Site Description Font Size' , 'grigora'),
            'section' => 'grg_typography_header',
            'settings' => 'grg_typography_site_desc_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 100,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_site_desc_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_desc_transform',
            array(
                'label'          => __( 'Site Description Transform', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_desc_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_menu_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_menu_font',
            array(
                'label'          => __( 'Site Menu Font', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_menu_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_menu_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_menu_weight',
            array(
                'label'          => __( 'Site Menu Font Weight', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_menu_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_site_menu_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_site_menu_size', array(
            'label' => __('Site Menu Font Size', 'grigora'),
            'section' => 'grg_typography_header',
            'settings' => 'grg_typography_site_menu_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 30,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_site_menu_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_site_menu_transform',
            array(
                'label'          => __( 'Site Menu Transform', 'grigora' ),
                'section'        => 'grg_typography_header',
                'settings'       => 'grg_typography_site_menu_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

          /**
         * Button Typography Sections
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_section( 'grg_typography_button', [
            'title' => __( 'Buttons', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_typography',
        ] );

          /**
         * Button Typography Settings
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_setting( 'grg_typography_button_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_button_font',
            array(
                'label'          => __( 'Button Font', 'grigora' ),
                'section'        => 'grg_typography_button',
                'settings'       => 'grg_typography_button_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_button_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_button_weight',
            array(
                'label'          => __( 'Button Font Weight', 'grigora' ),
                'section'        => 'grg_typography_button',
                'settings'       => 'grg_typography_button_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );


        $wp_customize->add_setting( 'grg_typography_button_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_button_size', array(
            'label' => __('Button Font Size' , 'grigora'),
            'section' => 'grg_typography_button',
            'settings' => 'grg_typography_button_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 80,
                )
        )));

        
        $wp_customize->add_setting( 'grg_typography_button_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_button_transform',
            array(
                'label'          => __( 'Button Text Transform', 'grigora' ),
                'section'        => 'grg_typography_button',
                'settings'       => 'grg_typography_button_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

          /**
         * Heading Typography Sections
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_section( 'grg_typography_heading', [
            'title' => __( 'Headings', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_typography',
        ] );

          /**
         * Heading Typography Settings
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_setting( 'grg_typography_h1_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h1_font',
            array(
                'label'          => __( 'H1 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h1_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h1_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h1_weight',
            array(
                'label'          => __( 'H1 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h1_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h1_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h1_transform',
            array(
                'label'          => __( 'H1 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h1_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h1_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h1_size', array(
            'label' => __('H1 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h1_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 80,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_h2_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h2_font',
            array(
                'label'          => __( 'H2 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h2_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h2_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h2_weight',
            array(
                'label'          => __( 'H2 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h2_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h2_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h2_transform',
            array(
                'label'          => __( 'H2 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h2_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h2_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h2_size', array(
            'label' => __('H2 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h2_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 75,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_h3_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h3_font',
            array(
                'label'          => __( 'H3 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h3_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h3_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h3_weight',
            array(
                'label'          => __( 'H3 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h3_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h3_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h3_transform',
            array(
                'label'          => __( 'H3 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h3_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h3_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h3_size', array(
            'label' => __('H3 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h3_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 75,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_h4_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h4_font',
            array(
                'label'          => __( 'H4 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h4_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h4_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h4_weight',
            array(
                'label'          => __( 'H4 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h4_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h4_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h4_transform',
            array(
                'label'          => __( 'H4 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h4_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h4_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h4_size', array(
            'label' => __('H4 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h4_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 75,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_h5_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h5_font',
            array(
                'label'          => __( 'H5 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h5_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h5_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h5_weight',
            array(
                'label'          => __( 'H5 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h5_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h5_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h5_transform',
            array(
                'label'          => __( 'H5 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h5_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h5_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h5_size', array(
            'label' => __('H5 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h5_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 75,
                )
        )));

        $wp_customize->add_setting( 'grg_typography_h6_font', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h6_font',
            array(
                'label'          => __( 'H6 Font', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h6_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h6_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h6_weight',
            array(
                'label'          => __( 'H6 Font Weight', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h6_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h6_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_h6_transform',
            array(
                'label'          => __( 'H6 Transform', 'grigora' ),
                'section'        => 'grg_typography_heading',
                'settings'       => 'grg_typography_h6_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_h6_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_h6_size', array(
            'label' => __('H6 Font Size', 'grigora'),
            'section' => 'grg_typography_heading',
            'settings' => 'grg_typography_h6_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 10,
                'max' => 75,
                )
        )));

        /**
         * Footer Typography Sections
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_section( 'grg_typography_footer', [
            'title' => __( 'Footer', 'grigora' ),
            'priority' => 30,
            'panel' => 'grg_typography',
        ] );

        /**
         * Footer Typography Settings
         *
         * @since  1.001
         * 
         */ 

        $wp_customize->add_setting( 'grg_typography_footer_font', [ 
        ] );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_footer_font',
            array(
                'label'          => __( 'Footer Font', 'grigora' ),
                'section'        => 'grg_typography_footer',
                'settings'       => 'grg_typography_footer_font',
                'type' => 'select',
                'choices' => google_fonts()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_footer_weight', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_footer_weight',
            array(
                'label'          => __( 'Footer Font Weight', 'grigora' ),
                'section'        => 'grg_typography_footer',
                'settings'       => 'grg_typography_footer_weight',
                'type' => 'select',
                'choices' => font_weight()
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_footer_transform', [ 
            ] );
    
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'grg_typography_footer_transform',
            array(
                'label'          => __( 'Footer Text Transform', 'grigora' ),
                'section'        => 'grg_typography_footer',
                'settings'       => 'grg_typography_footer_transform',
                'type' => 'select',
                'choices' => array(
                    'none' => 'None',
                    'capitalize' => 'Capitalize',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
                )
            )
        ) );

        $wp_customize->add_setting( 'grg_typography_footer_size', [ 
            ] );
    
        $wp_customize->add_control(new grg_customize_width_range_control($wp_customize, 'grg_typography_footer_size', array(
            'label' => __('Footer Font Size', 'grigora'),
            'section' => 'grg_typography_footer',
            'settings' => 'grg_typography_footer_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 5,
                'max' => 35,
                )
        )));
        /**
         * End Typography
         */





    }
}