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
                <span><?php comment_author(); ?></span>
                <span><?php comment_date(); ?></span>
            </div>
        </div>
        <div class="comment-text">
            <?php comment_text(); ?>
        </div>
    </li>

</ol>

<?php

}
// comment_form();
?>

<?php
}
?>