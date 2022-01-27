<?php get_header(); ?>

<div class="container">
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
<button onclick="topFunction()" class="to-top" id="totop">
    <div class="arrow"></div>
</button>

<?php get_footer(); ?>