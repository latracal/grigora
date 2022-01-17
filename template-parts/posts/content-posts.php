<div class="post">
    <div>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="post-desc">
        <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        <div class="meta">
            <h5><?php echo nl2br(get_the_author_meta('display_name')); ?><span>&nbsp;-&nbsp;</span></h5>
            <h5><?php echo get_the_date(); ?></h5>
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>" class="read-btn">Read More</a>
    </div>
</div>