<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title"><?php single_cat_title(); ?></h2>
            <p> <?php echo category_description(); ?></p>
        </div>
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
    <aside>Sidebar Area Will Design Later</aside>
</div>

<?php get_footer(); ?>