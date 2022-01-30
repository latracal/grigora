<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="archive-desc">
            <h2 class="page-title">Search results for "<?php the_search_query(); ?>"
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
					echo "<h4 class='search-not-found'>Sorry, your search did not match any entries. Please try again with different search terms.</h4>";
					get_search_form(); 
            }
            ?>

        </div>

        <?php the_posts_pagination(); ?>

    </section>
    <aside>
        <section class="sidebar">Sidebar Area Will Design Later</section>
    </aside>
</div>

<?php get_footer(); ?>