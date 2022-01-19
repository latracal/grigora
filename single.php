<?php get_header(); ?>

<div class="container">

    <section class="post-content">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span class="post-meta">Published by <?php echo nl2br(get_the_author_meta('display_name')); ?> on
            <?php echo get_the_date(); ?></span>
        <img src="<?php the_post_thumbnail_url(); ?>" />
        <?php the_content(); ?>
    </section>

    <?php get_sidebar(); ?>

</div>

<?php get_footer( ); ?>