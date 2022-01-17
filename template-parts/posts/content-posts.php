<div class="post">
    <div>
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="post-desc">
        <h3 class="post-title"><?php echo the_title(); ?></h3>
        <p><?php echo get_the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>" class="read-btn">Read More</a>
    </div>
</div>