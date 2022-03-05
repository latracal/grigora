<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

get_header(); ?>

<div class="grigora_container">
    <section class="article">

        <div class="post-container">

            <?php

            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                   get_template_part('template-parts/posts/content-posts');
                endwhile; 
            endif;               

            ?>

        </div>

        <?php the_posts_pagination(); ?>

    </section>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>