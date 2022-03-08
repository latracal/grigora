<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<aside id="sidebar" class="grigora-primary-sidebar" itemtype="<?php echo grg_get_schema_tag('sidebar')['itemtype'] ?>"
    itemscope="<?php echo grg_get_schema_tag('sidebar')['itemscope'] ?>">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>
    <div id="search" class="widget widget_search">
        <?php get_search_form(); ?>
    </div>
    <div id="archives" class="widget">
        <h3 class="widget-title"><?php _e( 'Archives', 'grigora' ); ?></h3>
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
    </div>
    <div id="meta" class="widget">
        <h3 class="widget-title"><?php _e( 'Meta', 'grigora' ); ?></h3>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </div>
    <?php else : ?>
    <?php endif; ?>
</aside>