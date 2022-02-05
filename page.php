<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
    <section class="post-content">
        <article class="single-post" itemtype="<?php echo grg_get_schema_tag('creativework')['itemtype'] ?>"
            itemscope="<?php echo grg_get_schema_tag('creativework')['itemscope'] ?>">
            <div class="post-header">
                <div class="top">
                    <h1 class="post-title"
                        itemprop="<?php echo grg_get_schema_tag('creativeworkheadline')['itemprop'] ?>">
                        <?php the_title(); ?></h1>

                </div>
                <div class="feature-img">
                    <?php the_post_thumbnail('full', array( 'itemprop' => grg_get_schema_tag('creativeworkimage')['itemprop'] )); ?>
                </div>
            </div>
            <div class="single-post-content"
                itemprop="<?php echo grg_get_schema_tag('creativeworktext')['itemprop'] ?>">
                <?php the_content(); ?>
            </div>
        </article>
    </section>

    <?php get_sidebar(); ?>

</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer( ); ?>