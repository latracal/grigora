<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

if(post_password_required()){
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments"><?php _e( 'Comments are closed.' , 'grigora' ); ?></p>
    <?php endif; ?>
    <?php if ( have_comments() ) :
            ?>
    <h2 class="comments-title">
        <?php comments_number(); ?>
    </h2>
    <ol class="comment-list">
        <?php
                    wp_list_comments( array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 74,
                        'callback' => 'grigora_comment'
                    ) );
                ?>
    </ol>
    <?php
         ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
<?php
?>