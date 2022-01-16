<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>
            </div>
            <div id="menu-toggle-btn">
                <div class="icon">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
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
                        'depth' => 2
                    ]);
                }

                ?>
                <div class="search-btn">
                    <button class="toggle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>