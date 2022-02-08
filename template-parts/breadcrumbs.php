<div class="breadcrumb-wrapper">
    <ul class="breadcrumb" itemtype="<?php echo grg_get_schema_tag('breadcrumb')['itemtype'] ?>"
        itemscope="<?php echo grg_get_schema_tag('breadcrumb')['itemscope'] ?>">
        <meta content="<?php if( get_theme_mod( 'grg_breadcrumbs_home', grigora_breadcrumbs_defaults()['grg_breadcrumbs_home'] ) ){
            echo 3;
        }else{
            echo 2;
        } ?>" name="<?php echo grg_get_schema_tag('breadcrumbnumber')['name'] ?>">
        <meta name="<?php echo grg_get_schema_tag('breadcrumborder')['name'] ?>" content="Ascending">
        <?php
    $breadcrumb_items = array();
    $out = "";
    $breadcrumb_count = 0;
    if( get_theme_mod( 'grg_breadcrumbs_home', grigora_breadcrumbs_defaults()['grg_breadcrumbs_home'] ) ){
        $breadcrumb_count++;
        ?>
        <li itemprop="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemprop'] ?>"
            itemtype="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemtype'] ?>"
            itemscope="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemscope'] ?>"><a
                href="<?php echo home_url(); ?>" rel="home"
                itemprop="<?php echo grg_get_schema_tag('breadcrumblisturl')['itemprop'] ?>"><span
                    itemprop="<?php echo grg_get_schema_tag('breadcrumblistname')['itemprop'] ?>">Home<span></a>
            <meta itemprop="<?php echo grg_get_schema_tag('breadcrumblistposition')['itemprop'] ?>"
                content="<?php echo $breadcrumb_count ?>"><span class="seperator"></span>
        </li>
        <?php
    }

    $categories = get_the_category();

    if ( ! empty( $categories ) ) {
        $breadcrumb_count++;
        ?>
        <li itemprop="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemprop'] ?>"
            itemtype="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemtype'] ?>"
            itemscope="<?php echo grg_get_schema_tag('breadcrumblistitem')['itemscope'] ?>"><a
                href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"
                itemprop="<?php echo grg_get_schema_tag('breadcrumblisturl')['itemprop'] ?>"><span
                    itemprop="<?php echo grg_get_schema_tag('breadcrumblistname')['itemprop'] ?>"><?php echo esc_html( $categories[0]->name ); ?><span></a>
            <meta itemprop="<?php echo grg_get_schema_tag('breadcrumblistposition')['itemprop'] ?>"
                content="<?php echo $breadcrumb_count ?>"><span class="seperator"></span>
        </li>
        <?php
    }
    ?>
        <li><?php the_title(); ?></li>
    </ul>
</div>