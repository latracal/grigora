<div class="post">
    <?php
        if( get_theme_mod( 'grg_blog_archive_image_display' ) ){?>
    <div>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>

    <?php
        }
    ?>
    <div class="post-desc">
        <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        <div class="meta">
            <?php
        if( get_theme_mod( 'grg_blog_archive_author_display' ) ){?><span><?php echo nl2br(get_the_author_meta('display_name')); ?><span>
                    <?php
                }
                ?>
                    <?php
                 if( get_theme_mod( 'grg_blog_archive_date_display' ) ){?>
                    &nbsp;-&nbsp;</span></span>

            <span><?php echo get_the_date(); ?></span>
            <?php
            }
            ?>
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
        <?php
        if( get_theme_mod( 'grg_blog_archive_read_more_display' ) ){?>
        <a href="<?php echo get_permalink(); ?>"
            class="read-btn"><?php echo get_theme_mod('grg_blog_archive_read_more'); ?></a>
        <?php
        }
        ?>
    </div>
</div>