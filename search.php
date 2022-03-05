<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

get_header(); ?>

<div class="grigora_container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title"><?php echo esc_html( __( "Search results for", "grigora" )); ?>
                "<?php the_search_query(); ?>"
            </h2>
        </div>
        <div class="post-container">

            <?php

				if( have_posts() ){
					while( have_posts() ){
						the_post();
						
						get_template_part('/template-parts/posts/content-posts');
					}
				}else{
					echo "<h4 class='search-not-found'>".esc_html( __( "Sorry, your search did not match any entries. Please try again with different search terms.", "grigora" ))."</h4>";
					get_search_form(); 
            }
            ?>

        </div>

        <?php the_posts_pagination(); ?>

    </section>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>