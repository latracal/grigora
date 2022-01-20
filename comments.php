<?php

if(post_password_required()){
    return;
}
?>
    <div id="comments" class="comments-area">
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
        <?php if ( have_comments() ) :
            ?>
            <h2 class="comments-title">
                <?php
                    printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                ?>
            </h2>
            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 74,
                    ) );
                ?>
            </ol><!-- .comment-list -->
            <?php
         ?>
        <?php endif; ?>
        <?php comment_form(); ?>
    </div>
<?php
?>