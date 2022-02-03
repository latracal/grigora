<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php  ?><?php if(is_front_page() || is_home()){
        bloginfo('name') ?> - <?php bloginfo('description') ;
    }
    else{
        wp_title("-", true, "right").bloginfo('name');
    } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <?php 
            if(has_custom_logo()){
                ?>
            <div class="logo">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>
            </div>
            <?php
            } else { 
            ?>
            <div class="title">
                <a href="<?php echo get_home_url(); ?>">
                    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                </a>
                <a href="<?php echo get_home_url(); ?>">
                    <h2>
                        <?php echo get_bloginfo( 'description' ); ?>
                    </h2>
                </a>
            </div>

            <?php
            }
            ?>

            <div class="menu-toggle-btn" id="menu-toggle-btn">
                <div class="menu-toggle-icon">
                    <span class="menu-toggle-line line top"></span>
                    <span class="menu-toggle-line line middle"></span>
                    <span class="menu-toggle-line line bottom"></span>
                </div>
            </div>
            <div class="menu-container">
                <?php
                if( has_nav_menu( 'primary' ) ){
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'menu hide',
                        'fallback_cb' => false,
                        'depth' => 2,
                    ]);
                }
                else{
                    // todo here
                }

                ?>
                <div class="search-btn">
                    <button class="toggle search-btn-obj"><svg class="search-btn-svg" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
        <nav class="mobile-header">
            <div class="top-part">
            <div class="menu-toggle-btn" id="menu-toggle-btn">
                <div class="menu-toggle-icon">
                    <span class="menu-toggle-line line top"></span>
                    <span class="menu-toggle-line line middle"></span>
                    <span class="menu-toggle-line line bottom"></span>
                </div>
            </div>
            <?php 
            if(has_custom_logo()){
                ?>
            <div class="logo">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>
            </div>
            <?php
            } else { 
            ?>
            <div class="title">
                <a href="<?php echo get_home_url(); ?>">
                    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                </a>
                <a href="<?php echo get_home_url(); ?>">
                    <h2>
                        <?php echo get_bloginfo( 'description' ); ?>
                    </h2>
                </a>
            </div>

            <?php
            }
            ?>

                <div class="search-btn">
                    <button class="toggle search-btn-obj"><svg class="search-btn-svg" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </div>
            </div>
            <div class="menu-container">
                <?php
                if( has_nav_menu( 'primary' ) ){
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'menu hide',
                        'fallback_cb' => false,
                        'depth' => 2,
                    ]);
                }
                ?>
            </div>
            <div class="search-form">
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>
    <main>