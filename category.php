<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title"><?php single_cat_title(); ?></h2>
            <p><?php echo category_description(); ?></p>
        </div>
        <div class="post-container">
            <?php 
                // Check if there are any posts to display
                if ( have_posts() ) : 
            ?>

            <?php
 
            // The Loop
            while ( have_posts() ) : the_post(); ?>
            <?php
                get_template_part('template-parts/posts/content-posts');
            ?>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <?php the_posts_pagination(); ?>

    </section>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>