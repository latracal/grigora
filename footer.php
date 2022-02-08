<?php if(grigora_get_option("scroll") && function_exists("to_top_scroll")){to_top_scroll();} ?>
<?php if(grigora_get_option("cookie") && function_exists("cookie_notice")){cookie_notice();} ?>

</main>
<?php if(
    (is_single() || is_page()) &&
    get_post_meta( $post->ID, '_grigora-disable-footer', true ) && 
    get_post_meta( $post->ID, '_grigora-disable-footer', true ) == 1
    ) {} else { ?>
<footer itemtype="<?php echo grg_get_schema_tag('footer')['itemtype'] ?>"
    itemscope="<?php echo grg_get_schema_tag('footer')['itemscope'] ?>">
    <div class="footer">

        <?php

        if( has_nav_menu( 'footer' ) ){
            wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-menu hide',
                'fallback_cb' => false,
                'depth' => 2
            ]);
        }

        ?>

        <div class="copyrights">
            <?php if(is_grigora_pro_active()){
                echo do_shortcode(get_theme_mod("grg_footer_text", grigora_spacing_defaults()['grg_footer_text']));
            }
            else { ?>
            <?php echo do_shortcode(grigora_spacing_defaults()['grg_footer_text']) ?>
            <?php }
            
            ?>
        </div>
    </div>
</footer>
<?php } ?>
<?php wp_footer(); ?>
</body>

</html>