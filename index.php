<?php

if(get_theme_mod('grg_header_style', $scroll_defaults['grg_header_style'])=='style1'){

    get_header();

}else{
    get_header('second');
}

?>
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

<?php get_footer(); ?>