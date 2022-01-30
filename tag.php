<div class="grigora-body">
<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title"><?php single_tag_title(); ?></h2>
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

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
        </div>