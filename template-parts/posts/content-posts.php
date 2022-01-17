<div class="post">
    <div>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="post-desc">
        <h3 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        <p><?php echo get_the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>" class="read-btn">Read More</a>
    </div>
</div>