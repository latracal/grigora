<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<div class="post">
    <?php
        if( get_theme_mod( 'grg_blog_archive_image_display', grigora_blog_defaults()['grg_blog_archive_image_display'] ) ){?>
    <div>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>

    <?php
        }
    ?>
    <div class="post-desc">
        <h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <div class="meta">
            <?php
        if( get_theme_mod( 'grg_blog_archive_author_display', grigora_blog_defaults()['grg_blog_archive_author_display'] ) ){
            ?>
            <span><?php echo nl2br(get_the_author_meta('display_name')); ?>
            </span>
            <?php
        }
        if(get_theme_mod( 'grg_blog_archive_author_display', grigora_blog_defaults()['grg_blog_archive_author_display'] ) && get_theme_mod( 'grg_blog_archive_date_display', grigora_blog_defaults()['grg_blog_archive_date_display'] )){
            ?>
            <span>&nbsp;-&nbsp;</span>
            <?php }
        ?>

            <?php
            if( get_theme_mod( 'grg_blog_archive_date_display', grigora_blog_defaults()['grg_blog_archive_date_display'] ) ){?>

            <span><?php echo get_the_date(); ?></span>
            <?php
        }
        ?>
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
        <?php
        if( get_theme_mod( 'grg_blog_archive_read_more_display', grigora_blog_defaults()['grg_blog_archive_read_more_display'] ) ){?>
        <a href="<?php echo get_permalink(); ?>"
            class="read-btn"><?php echo get_theme_mod('grg_blog_archive_read_more', grigora_blog_defaults()['grg_blog_archive_read_more']); ?></a>
        <?php
        }
        ?>
    </div>
</div>