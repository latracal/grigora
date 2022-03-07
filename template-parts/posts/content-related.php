<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<div>
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <h3><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
</div>