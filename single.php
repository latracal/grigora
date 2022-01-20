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

            $categories = get_the_category();

            $rp_query = new WP_Query([
                'posts_per_page' => 3,
                'post__not_in' => [ $post->ID ],
                'cat' => !empty($categories) ? $categories[0]->term_id : null,
            ]);

            if( $rp_query->have_posts()){
                while( $rp_query->have_posts() ){
                    $rp_query->the_post();

                    get_template_part('template-parts/posts/content-related');
                }
            }

            ?>

        </div>
        <div class="comment-section">
            Comment Section, will add later
        </div>
    </section>

    <?php get_sidebar(); ?>

</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer( ); ?>