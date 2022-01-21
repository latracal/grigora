<?php

if(post_password_required()){
    return;
}
?>

<?php 

    if( have_comments() ){
        
        ?>
<h3><?php comments_number(); ?></h3>

<ol class="comment-body">

    <?php

    foreach( $comments as $comment )
    {
    ?>
    <li class="comment">
        <div class="author-det">
            <div>
                <?php echo get_avatar( $comment, 60 ); ?>
            </div>
            <div class="author-meta">
                <span class="commentor"><?php comment_author(); ?></span>
                <span class="comment-meta"><?php comment_date(); ?> at <?php comment_time() ?></span>
            </div>
        </div>
        <div class="comment-text">
            <?php comment_text(); ?>
        </div>
        <div class="reply-btn">
            <a href="">Reply</a>
        </div>
    </li>

</ol>

<?php

}
$comments_args = array(
    // Change the title of send button 
    'label_submit' => __( 'Post Comment', 'grg' ),
    // Change the title of the reply section
    'title_reply' => __( 'Your email address will not be published. Required fields are marked <span>*</span>', 'grg' ),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" rows="5" cols="50" name="comment" aria-required="true"></textarea></p>',
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<p class="comment-form-author"><label>Name</Name><br /><input id="author" name="author" aria-required="true" placeholder=""></input></p>',
        //Email Field
        'email' => '<p class="comment-form-email"><label>Email</label><br /><input id="email" name="email" placeholder=""></input></p>',
        //URL Field
        'url' => '<p class="comment-form-url"><label>Website</label><br /><input id="url" name="url" placeholder=""></input></p>',
    ),
);

comment_form($comments_args);
?>

<?php
}
?>