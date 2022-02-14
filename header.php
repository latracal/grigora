<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<!DOCTYPE html>
<html lang="en">
<?php 
// for post meta settings
if(forced_meta_css()){
    add_action( 'wp_head', 'forced_meta_css_enqueue' );
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemtype="<?php echo grg_get_schema_tag('body')['itemtype'] ?>"
    itemscope="<?php echo grg_get_schema_tag('body')['itemscope'] ?>">
    <?php if(
        (is_single() || is_page()) &&
        get_post_meta( $post->ID, '_grigora-disable-header', true ) && 
        get_post_meta( $post->ID, '_grigora-disable-header', true ) == 1
        ) {} else { ?>
    <header id="masthead" itemtype="<?php echo grg_get_schema_tag('header')['itemtype'] ?>"
        itemscope="<?php echo grg_get_schema_tag('header')['itemscope'] ?>">
        <nav class="desktop-nav">
            <div class="navbar">
                <div class="site-branding" itemtype="<?php echo grg_get_schema_tag('organization')['itemtype'] ?>"
                    itemscope="<?php echo grg_get_schema_tag('organization')['itemscope'] ?>">
                    <?php 
            if(has_custom_logo()){
                ?>
                    <div class="logo">
                        <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    echo '<span class="site-title-hidden" itemprop="name">
                        '.get_bloginfo( 'name' ).'
                    </span>';
                    }
                ?>
                    </div>
                    <?php
            } else { 
            ?>
                    <div class="title">
                        <div class="site-title"
                            itemprop="<?php echo grg_get_schema_tag('organizationname')['itemprop'] ?>">
                            <a href="<?php echo get_home_url(); ?>"
                                itemprop="<?php echo grg_get_schema_tag('organizationurl')['itemprop'] ?>" rel="home">
                                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                            </a>
                        </div>
                        <a href="<?php echo get_home_url(); ?>">
                            <h2>
                                <?php echo get_bloginfo( 'description' ); ?>
                            </h2>
                        </a>
                    </div>

                    <?php
            }
            ?>
                </div>
            </div>
            <div class="menu-container">
                <?php
                
                    echo '<div id="site-navigation" itemtype="'.grg_get_schema_tag('navigation')['itemtype'].'" itemscope="'.grg_get_schema_tag('navigation')['itemscope'].'">';
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'menu hide',
                        'depth' => 2,
                    ]);
                    echo "</div>";
                
                ?>
                <?php if(get_theme_mod( 'grg_header-search-btn', grigora_spacing_defaults()['grg_header-search-btn'] )) { ?>
                <div class="search-btn">
                    <button class="toggle search-btn-obj"><svg class="search-btn-svg" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </div>
                <?php } ?>
            </div>
            <?php get_search_form(); ?>
        </nav>
        <nav class="mobile-header">
            <div class="site-branding" itemtype="<?php echo grg_get_schema_tag('organization')['itemtype'] ?>"
                itemscope="<?php echo grg_get_schema_tag('organization')['itemscope'] ?>">
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
                            echo '<span class="site-title-hidden" itemprop="name">
                            '.get_bloginfo( 'name' ).'
                            </span>';
                            }
                        ?>
                    </div>
                    <?php
                    } else { 
                    ?>
                    <div class="title">
                        <div class="site-title"
                            itemprop="<?php echo grg_get_schema_tag('organizationname')['itemprop'] ?>">
                            <a href="<?php echo get_home_url(); ?>"
                                itemprop="<?php echo grg_get_schema_tag('organizationurl')['itemprop'] ?>" rel="home">
                                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                            </a>
                        </div>
                        <a href="<?php echo get_home_url(); ?>">
                            <h2>
                                <?php echo get_bloginfo( 'description' ); ?>
                            </h2>
                        </a>
                    </div>
                    <?php
                }
                ?>
                    <?php if(get_theme_mod( 'grg_header-search-btn', grigora_spacing_defaults()['grg_header-search-btn'] )) { ?>
                    <div class="search-btn">
                        <button class="toggle search-btn-obj"><svg class="search-btn-svg"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></button>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="menu-container">
                <?php
                
                    echo '<div id="site-navigation" itemtype="'.grg_get_schema_tag('navigation')['itemtype'].'" itemscope="'.grg_get_schema_tag('navigation')['itemscope'].'">';
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'menu hide',
                        'depth' => 2,
                    ]);
                    echo "</div>";
                
                ?>
            </div>
            <div class="search-form">
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>
    <?php } ?>
    <main>