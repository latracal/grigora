<?php

get_header();
?>

<?php
	// Display Search: query term
	printf( esc_html__( 'Search Results for: %s', 'sample' ), '<span>' . get_search_query() . '</span>' );

?>

<?php
	
	while ( have_posts() ) :
		the_post();

		//fetch the search template
		get_template_part( 'template-parts/content-search' );

	endwhile;

	the_posts_navigation();


?>


<?php
get_sidebar();
get_footer();