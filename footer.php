<?php if(grigora_get_option("scroll") && function_exists("to_top_scroll")){to_top_scroll();} ?>

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
            Copyright © 2022 | Grigora Theme
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>