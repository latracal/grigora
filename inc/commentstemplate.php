<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'grigora_comment' ) ) {
    function grigora_comment($comment, $args, $depth){
        if ( 'pingback' === $comment->comment_type || 'trackback' === $comment->comment_type ) : ?>
            <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
			<div class="comment-body">
				Pingback: <?php comment_author_link(); ?>
			</div>
        <?php else : ?>
            <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
			<div class='comment-box comment-id=<?php echo get_comment_ID()?>'>
				<div class='comment-meta'>
					<?php
					if ( 0 != $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
					<div class="comment-author-info">
						<div class='comment-author'>
							<?php printf( '<cite itemprop="name" class="fn">%s</cite>', get_comment_author_link() ); ?>
						</div>
							<div class="entry-meta comment-metadata">
								<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
									<time datetime="<?php comment_time( 'c' ); ?>" itemprop="datePublished">
										<?php
											printf(
												get_comment_date(),
												get_comment_time()
											);
										?>
									</time>
								</a>
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
                    </div>
        <?php endif;
  }
}
