<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">

    <section class="post-content">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span class="post-meta">Published by <?php echo nl2br(get_the_author_meta('display_name')); ?> on
            <?php echo get_the_date(); ?></span>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <span class="cat">Posted in <?php
        foreach((get_the_category()) as $category) { 
            echo '<a href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="cat-name">'.$category->cat_name .'</a>'; 
        } 
        ?>
        </span>
        <span class="tag">Tags - <?php
        foreach((get_the_tags()) as $tag) { 
            echo '<a href="'. esc_url( get_tag_link( $tag ) ) . '" class="cat-name">'.$tag->name.'</a>'; 
        } 
        ?>
        </span>
        <div class="post-pagination">
            <div>
                <?php previous_post_link(); ?>
            </div>
            <div>
                <?php next_post_link(); ?>
            </div>
        </div>
        <div class="author-desc">
            <div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
            <div class="details">
                <h3><?php echo nl2br(get_the_author_meta('display_name')); ?></h3>
                <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
            </div>
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