<div class="grigora-body">
<?php get_header(); ?>

<div class="container">
    <section class="article">
        <div class="author-descp">
            <div class="avatar"><a
                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
            </div>
            <div class="details">
                <h3><?php 

                if (empty( get_the_author_meta('first_name') ) && empty( get_the_author_meta('last_name') ) ){

                    echo '<a href="'. esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) .'">'.nl2br(get_the_author_meta('display_name')).'</a>';
                
                }else{
                    echo '<a href="'. esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) .'">'.nl2br(get_the_author_meta('first_name'))." ". nl2br(get_the_author_meta('last_name')) .'</a>';
                }

                ?>

                </h3>
                <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
            </div>
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