<div>
    <?php
        if ( has_post_thumbnail($r->ID)) {
    ?>
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <?php
    }else{
    echo '<div class="img-placeholder"></div>';
    }
    ?>

    <h3><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
</div>