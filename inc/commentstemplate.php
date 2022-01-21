<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'grigora_comment' ) ) {
    function grigora_comment($comment, $args, $depth){
        if ( 'pingback' === $comment->comment_type || 'trackback' === $comment->comment_type ) : ?>
            <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
			<div class="comment-body">
				Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( 'Edit', '<span class="comment-edit-link">- ', '</span>' ); ?>
			</div>
        <?php else : ?>
            <li id="comment-list comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
			<div class='comment-box comment-id=<?php echo get_comment_ID()?>'>
				<div class='comment-meta'>
                    <div class='comment-author-avatar'>
                        <?php
                        if ( 0 != $args['avatar_size'] ) {
                            echo get_avatar( $comment, $args['avatar_size'] );
                        }
                        ?>
                    </div>
					<div class="comment-author-info">
						<div class='comment-author-name'>
							<?php printf( '<cite itemprop="name" class="fn">%s</cite>', get_comment_author_link() ); ?>
						</div>
							<div class="comment-author-time">
									<time datetime="<?php comment_time( 'c' ); ?>" itemprop="datePublished">
										<?php printf('%1$s at %2$s',get_comment_date(),get_comment_time()); ?> <?php edit_comment_link( 'Edit', '<span class="comment-edit-link">- ', '</span>' ); ?>
									</time>
							</div>
                        </div>
                    </div>
                <?php if ( '0' == $comment->comment_approved ) : ?>
                    <div class="comment-moderation">
						<p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
                    </div>
                <?php endif; ?>
				<div class="comment-content" itemprop="text">
					<?php

					comment_text();

					?>
				</div>
                <div class="comment-reply" itemprop="text">
                    <?php 
                        comment_reply_link(
                            array_merge(
                                $args,
                                array(
                                    'add_below' => 'div-comment',
                                    'depth'     => $depth,
                                    'max_depth' => $args['max_depth'],
                                )
                            )
                        );
                    ?>
                </div>
            </div>
        <?php endif;
  }
}
