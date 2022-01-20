<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">

    <section class="post-content">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span class="post-meta">Published by
            <?php 

            if (empty( get_the_author_meta('first_name') ) && empty( get_the_author_meta('last_name') ) ){
                echo nl2br(get_the_author_meta('display_name')); 
               
            }else{
                
                echo '<a href="'. get_the_author_meta('user_url') .'">'.nl2br(get_the_author_meta('first_name')).'</a>';
                echo " ";
                echo nl2br(get_the_author_meta('last_name'));
                
            }

            ?> on
            <?php echo get_the_date(); ?></span>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <span class="cat">Posted in
            <?php
                foreach((get_the_category()) as $category) { 
                    echo '<a href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="cat-name">'.$category->cat_name .'</a>'; 
                } 
            ?>
        </span>
        <?php
        if(has_tag()){ 
            ?>
        <span class="tag">Tags - <?php
        
            foreach((get_the_tags()) as $tag) { 
                echo '<a href="'. esc_url( get_tag_link( $tag ) ) . '" class="cat-name">'.$tag->name.'</a>'; 
            }
            ?>

        </span> <?php
        }
        ?>
        <div class="post-pagination">
            <?php previous_post_link('<div class="pagination-prev-post"> %link </div>', '← %title'); ?>
            <?php next_post_link('<div class="pagination-next-post"> %link </div>', '%title →'); ?>
        </div>
        <div class="author-desc">
            <div class="avatar"><a
                    href="<?php get_the_author_meta('user_url') ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
            </div>
            <div class="details">
                <h3><?php 

                if (empty( get_the_author_meta('first_name') ) && empty( get_the_author_meta('last_name') ) ){
                    echo nl2br(get_the_author_meta('display_name')); 
                
                }else{
                    echo nl2br(get_the_author_meta('first_name')); 
                    echo " ";
                    echo nl2br(get_the_author_meta('last_name')); 
                }
                ?>
                </h3>
                <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
            </div>
        </div>
        <div class="related-posts">
            <?php
                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
                if( $related ) foreach( $related as $post ) {
                    setup_postdata($post); 
                    get_template_part('template-parts/posts/content-related');
                    wp_reset_postdata();
                }
                wp_reset_postdata();
                 ?>
        </div>
        <div class="comment-section">
            <?php
                comments_template();
            ?>
        </div>
    </section>

    <?php get_sidebar(); ?>

</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer( ); ?>