<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title">Category Name</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et augue eu purus vehicula rhoncus.
                Etiam at quam massa. Integer nulla ante, faucibus ut facilisis non, euismod eu est. Aenean vehicula
                massa quis rutrum vestibulum. Vestibulum non viverra diam. Aenean ultrices interdum maximus. Integer sed
                fermentum massa.</p>
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
    <aside>
        <section class="sidebar">Sidebar Area Will Design Later</section>
    </aside>
</div>

<?php get_footer(); ?>