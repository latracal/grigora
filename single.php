<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
    <section class="article">
        <article class="single-post" itemtype="<?php echo grg_get_schema_tag('creativework')['itemtype'] ?>"
            itemscope="<?php echo grg_get_schema_tag('creativework')['itemscope'] ?>">
            <?php get_template_part('template-parts/breadcrumbs'); ?>
            <div class="post-header">
                <div class="top">
                    <?php if(
                        (is_single() || is_page()) &&
                        get_post_meta( $post->ID, '_grigora-disable-title', true ) && 
                        get_post_meta( $post->ID, '_grigora-disable-title', true ) == 1
                        )  {} else { ?>
                    <h1 class="post-title"
                        itemprop="<?php echo grg_get_schema_tag('creativeworkheadline')['itemprop'] ?>">

                        <?php the_title(); ?></h1>
                    <?php } ?>
                    <p class="post-meta">
                        <?php if( get_theme_mod( 'grg_blog_single_author_display', grigora_blog_defaults()['grg_blog_single_author_display'] ) )
        {
            ?><span><?php echo esc_html( __( "Published by", "grigora" )); ?></span>
                        <?php 
                    $author_schema = grg_get_schema_tag("author");
                    $authorurl_schema = grg_get_schema_tag("authorurl");
                    $authorname_schema = grg_get_schema_tag("authorname");

            echo "<span class='".$author_schema['class']."' itemtype='".$author_schema['itemtype']."' itemscope='".$author_schema['itemscope']."' itemprop='".$author_schema['itemprop']."'>";
            if (empty( get_the_author_meta('first_name') ) && empty( get_the_author_meta('last_name') ) ){
                $author_str = nl2br(get_the_author_meta('display_name'));
            }else{
                $author_str = nl2br(get_the_author_meta('first_name'))." ". nl2br(get_the_author_meta('last_name'));
            }
                                
            echo '<a title="View all posts by '.$author_str.'" href="'. esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) .'" rel="author" class="'.$authorurl_schema['class'].'" itemprop="'.$authorurl_schema['itemprop'].'">';
            echo '<span class="'.$authorname_schema['class'].'" itemprop="'.$authorname_schema['itemprop'].'">'.$author_str.'</span>';
            echo '</a>';
            echo "</span>"

            ?><?php if(get_theme_mod( 'grg_blog_single_date_display', grigora_blog_defaults()['grg_blog_single_date_display'] ) && get_theme_mod( 'grg_blog_single_author_display', grigora_blog_defaults()['grg_blog_single_author_display'] )){ ?>
                        <span><?php echo esc_html( __( "on", "grigora" )); ?> <?php } ?></span>
                        <?php } ?>
                        <?php if( get_theme_mod( 'grg_blog_single_date_display' , grigora_blog_defaults()['grg_blog_single_date_display']) ) { ?>
                        <time datetime="<?php echo get_the_date('c'); ?>"
                            itemprop="<?php echo grg_get_schema_tag('creativeworkdate')['itemprop']; ?>"><?php echo get_the_date(); ?></time>
                        <?php } ?></p>
                    <?php if( get_theme_mod( 'grg_blog_single_social_share', grigora_blog_defaults()['grg_blog_single_social_share'] ) )
        {
            ?>
                    <span class="social">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_the_permalink()); ?>"
                            target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>"
                            target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <a href="https://www.linkedin.com/shareArticle?title=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_the_permalink()); ?>&mini=true"
                            target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg></a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo urlencode(get_the_permalink()); ?>&media=<?php echo urlencode(get_the_post_thumbnail_url()); ?>&description=<?php echo urlencode(get_the_title()); ?>"
                            target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                            </svg></a>
                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_the_permalink()); ?>"
                            target="_blank" rel="nofollow noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-envelope-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg></a>
                    </span>
                    <?php } ?>
                </div>
                <div class="feature-img">
                    <?php the_post_thumbnail('full', array( 'itemprop' => grg_get_schema_tag('creativeworkimage')['itemprop'] )); ?>
                </div>
            </div>
            <div class="single-post-content"
                itemprop="<?php echo grg_get_schema_tag('creativeworktext')['itemprop'] ?>">
                <?php the_content(); ?>
            </div>
            <p></p>
            <?php if( get_theme_mod( 'grg_blog_single_category' , grigora_blog_defaults()['grg_blog_single_category']) )
        {
            
            if(has_category()){ 
                ?>
            <p class="cat"><?php echo esc_html( __( "Posted in", "grigora" )); ?>
                <?php
                foreach((get_the_category()) as $category) { 
                    echo '<a href="'. esc_url( get_category_link( $category ) ) . '" class="cat-name">'.$category->cat_name .'</a>'; 
                } 
            ?>
            </p><?php
            }
        }
        ?>
            <?php
        if( get_theme_mod( 'grg_blog_single_tag', grigora_blog_defaults()['grg_blog_single_tag'] ) ){

            if(has_tag()){ 
                ?>
            <p class="tag"><?php echo esc_html( __( "Tags", "grigora" )); ?> - <?php
            
                foreach((get_the_tags()) as $tag) { 
                    echo '<a href="'. esc_url( get_tag_link( $tag ) ) . '" class="cat-name">'.$tag->name.'</a>'; 
                }
                ?>

            </p> <?php
            }
        }
        ?>
        </article>
        <?php

        if( wp_count_posts()->publish > 1 ) {   
        ?>
        <?php
        if( get_theme_mod( 'grg_blog_single_postnav', grigora_blog_defaults()['grg_blog_single_postnav'] ) ){ ?>
        <div class="post-pagination">
            <?php previous_post_link('<div class="pagination-prev-post"> %link </div>', '← %title'); ?>
            <?php next_post_link('<div class="pagination-next-post"> %link </div>', '%title →'); ?>
        </div>
        <?php } ?>
        <?php
        }
        else{
        ?>
        <div class="post-pagination" style="display:none;">
            <?php previous_post_link('<div class="pagination-prev-post"> %link </div>', '← %title'); ?>
            <?php next_post_link('<div class="pagination-next-post"> %link </div>', '%title →'); ?>
        </div>
        <?php
        }
        ?>
        <?php
        if( get_theme_mod( 'grg_blog_single_author_box', grigora_blog_defaults()['grg_blog_single_author_box'] ) ){ ?>
        <div class="author-desc">
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
        <?php } ?>
        <?php
         if( wp_count_posts()->publish > 1 ) {   
            ?>
        <?php
        if( get_theme_mod( 'grg_blog_single_related_posts', grigora_blog_defaults()['grg_blog_single_related_posts'] ) ){ ?>
        <div class="related-posts">
            <?php
                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                if( $related ) foreach( $related as $post ) {
                    setup_postdata($post); 
                    get_template_part('template-parts/posts/content-related');
                    wp_reset_postdata();
                }
                wp_reset_postdata();
                 ?>
        </div>
        <?php } ?>
        <?php
        }
        else{
        ?>
        <div class="related-posts" style="display:none">
            <?php
                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                if( $related ) foreach( $related as $post ) {
                    setup_postdata($post); 
                    get_template_part('template-parts/posts/content-related');
                    wp_reset_postdata();
                }
                wp_reset_postdata();
                 ?>
        </div>
        <?php } ?>
        <div class="comment-section">
            <?php
              if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </div>
    </section>

    <?php get_sidebar(); ?>

</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer( ); ?>