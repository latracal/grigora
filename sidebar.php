<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<aside id="sidebar" class="grigora-primary-sidebar" itemtype="<?php echo grg_get_schema_tag('sidebar')['itemtype'] ?>"
    itemscope="<?php echo grg_get_schema_tag('sidebar')['itemscope'] ?>">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
    <?php endif; ?>
</aside>