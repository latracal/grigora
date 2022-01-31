<?php if(grigora_get_option("scroll") && function_exists("to_top_scroll")){to_top_scroll();} ?>
<?php if(grigora_get_option("cookie") && function_exists("cookie_notice")){cookie_notice();} ?>

</main>
<footer>
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
                echo do_shortcode(get_theme_mod("grigora_footer_text", grigora_spacing_defaults()['grg_footer_text']));
            }
            else { ?>
                <?php echo do_shortcode('Copyright © 2022 | [blog_name] | Built with&nbsp;<a href="https://wpgrigora.com/">Grigora</a>') ?>
            <?php }
            
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>