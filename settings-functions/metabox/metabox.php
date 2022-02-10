<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<?php

if ( ! class_exists( 'ezTOC_Option' ) ) {

    /**
	 * Class to add metabox in post
	 *
	 */
    final class grigora_metabox_cl {

        /**
		 * Setup.
		 *
		 * @access public
		 * @since  1.0
		 */
        public function __construct() {
            $this->hooks();
        }

        /**
		 * Hooks assign.
		 *
		 * @access private
		 * @since  1.0
		 */
        private function hooks() {
            add_action( 'init', array( $this, 'registerMetaboxes' ), 99 );
        }

        /**
		 * Add meta box to the screen
		 *
		 * @access public
		 * @since  1.0
		 */
        public function grigora_metabox() {
            add_meta_box( 'grigora-metabox',
            esc_html__( 'Grigora Options', 'grigora' ),
            array( $this, 'displayMetabox' ),
            null,
            'side');
        }

        /**
		 * Register metaboxes in allowed pages
		 *
		 * @access public
		 * @since  1.0
		 */
        public function registerMetaboxes() {
            foreach ( get_post_types() as $type ) {
                if (  $type == "post" || $type == "page" ) {
                    add_action( "add_meta_boxes_$type", array( $this, 'grigora_metabox' ) );
                    add_action( "save_post_$type", array( $this, 'save' ), 10, 3 );
                }
            }
        }

        /**
		 * Metabox renderer
		 *
		 * @access public
		 * @since  1.0
		 */
        public function displayMetabox( $post, $atts ) {

            wp_nonce_field( 'grigora_meta_nonce', '_grigora_meta_nonce' );

            if(get_post_meta( $post->ID, '_grigora-sidebar-align', true )){
                $sidebar_value = get_post_meta( $post->ID, '_grigora-sidebar-align', true );
            }
            else{
                $sidebar_value = get_theme_mod('grg_sidebar-alignment', grigora_spacing_defaults()['grg_sidebar-alignment']);
            }

            if(get_post_meta( $post->ID, '_grigora-disable-header', true )){
                $disable_header = get_post_meta( $post->ID, '_grigora-disable-header', true );
            }
            else{
                $disable_header = 0;
            }

            if(get_post_meta( $post->ID, '_grigora-disable-footer', true )){
                $disable_footer = get_post_meta( $post->ID, '_grigora-disable-footer', true );
            }
            else{
                $disable_footer = 0;
            }

            if(get_post_meta( $post->ID, '_grigora-layout-container', true )){
                $layout_container = get_post_meta( $post->ID, '_grigora-layout-container', true );
            }
            else{
                $layout_container = get_theme_mod('grg_layout-container', grigora_spacing_defaults()['grg_layout-container']);
            }

            if(get_post_meta( $post->ID, '_grigora-disable-title', true )){
                $disable_title = get_post_meta( $post->ID, '_grigora-disable-title', true );
            }
            else{
                $disable_title = 0;
            }

            ?>
<table class="form-table grigora-table">
    <tbody>
        <tr>
            <th scope="row"><label for="layout-container">Content Layout</label></th>
            <td>
                <?php if (  get_post_type( $post ) == "post" || get_post_type( $post ) == "page"){

                            // content layout
                            $args = array(
                                "id" => "layout-container",
                                "desc" => esc_html__("Content Layout", "grigora"),
                                "default" => $layout_container,
                            );
                            echo '<select name="grigora-settings[' . $args['id'] . ']" id="grigora-settings[' . $args['id'] . ']">
                                <option value="containedpadded" '.(($layout_container == 'containedpadded') ?  'selected="selected"' : '').'>Contained Padded</option>
                                <option value="row-containedfull" '.(($layout_container == 'row-containedfull') ?  'selected="selected"' : '').'>Contained Full Width</option>
                                <option value="stretch" '.(($layout_container == 'stretch') ?  'selected="selected"' : '').'>Stretch Full Width</option>
                            </select>';
                        }
                        ?>

            </td>
        </tr>
        <tr>
            <th scope="row"><label for="sidebar-align">Sidebar Layout</label></th>
            <td>
                <?php if (  get_post_type( $post ) == "post" || get_post_type( $post ) == "page"){

                            // sidebar align
                            $args = array(
                                "id" => "sidebar-align",
                                "desc" => esc_html__("Sidebar Layout", "grigora"),
                                "default" => $sidebar_value,
                            );
                            echo '<select name="grigora-settings[' . $args['id'] . ']" id="grigora-settings[' . $args['id'] . ']">
                                <option value="row" '.(($sidebar_value == 'row') ?  'selected="selected"' : '').'>Right Sidebar</option>
                                <option value="row-reverse" '.(($sidebar_value == 'row-reverse') ?  'selected="selected"' : '').'>Left Sidebar</option>
                                <option value="none" '.(($sidebar_value == 'none') ?  'selected="selected"' : '').'>No Sidebar</option>
                            </select>';
                        }
                        ?>

            </td>
        </tr>
        <tr>
            <th scope="row"><label for="disable-header">Disable Header</label></th>
            <td>
                <?php if (  get_post_type( $post ) == "post" || get_post_type( $post ) == "page"){

                            // disable header
                            $args = array(
                                "id" => "disable-header",
                                "desc" => esc_html__("Disable Header", "grigora"),
                            );
                            $checked = $disable_header ? checked( 1, $disable_header, false ) : '';
                            echo '<input type="checkbox" id="grigora-settings[' . $args['id'] . ']" name="grigora-settings[' . $args['id'] . ']" value="1" ' . $checked . '/>';
                        }
                        ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="disable-footer">Disable Footer</label></th>
            <td>
                <?php if (  get_post_type( $post ) == "post" || get_post_type( $post ) == "page"){

                            // disable footer
                            $args = array(
                                "id" => "disable-footer",
                                "desc" => esc_html__("Disable Footer", "grigora"),
                            );
                            $checked = $disable_footer ? checked( 1, $disable_footer, false ) : '';
                            echo '<input type="checkbox" id="grigora-settings[' . $args['id'] . ']" name="grigora-settings[' . $args['id'] . ']" value="1" ' . $checked . '/>';
                        }
                        ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="disable-title">Disable Title</label></th>
            <td>
                <?php if (  get_post_type( $post ) == "post" || get_post_type( $post ) == "page"){

                            // disable title
                            $args = array(
                                "id" => "disable-title",
                                "desc" => esc_html__("Disable Title", "grigora"),
                            );
                            $checked = $disable_title ? checked( 1, $disable_title, false ) : '';
                            echo '<input type="checkbox" id="grigora-settings[' . $args['id'] . ']" name="grigora-settings[' . $args['id'] . ']" value="1" ' . $checked . '/>';
                        }
                        ?>
            </td>
        </tr>
    </tbody>
</table>

<?php
        }

        /**
		 * On save action
		 *
		 * @access public
		 * @since  1.0
		 */
        public function save( $post_id, $post, $update ) {
            if ( current_user_can( 'edit_post', $post_id ) &&
                isset( $_REQUEST['_grigora_meta_nonce'] ) &&
                wp_verify_nonce( $_REQUEST['_grigora_meta_nonce'], 'grigora_meta_nonce' )
            ) {

                if ( isset( $_REQUEST['grigora-settings']['layout-container'] ) ) {

                    update_post_meta( $post_id, '_grigora-layout-container', $_REQUEST['grigora-settings']['layout-container'] );

                } else {

                    update_post_meta( $post_id, '_grigora-layout-container', '' );

                }

                if ( isset( $_REQUEST['grigora-settings']['sidebar-align'] ) ) {

                    update_post_meta( $post_id, '_grigora-sidebar-align', $_REQUEST['grigora-settings']['sidebar-align'] );

                } else {

                    update_post_meta( $post_id, '_grigora-sidebar-align', '' );

                }

                if ( isset( $_REQUEST['grigora-settings']['disable-header'] ) ) {

                    update_post_meta( $post_id, '_grigora-disable-header', $_REQUEST['grigora-settings']['disable-header'] );

                } else {

                    update_post_meta( $post_id, '_grigora-disable-header', 0 );

                }

                if ( isset( $_REQUEST['grigora-settings']['disable-footer'] ) ) {

                    update_post_meta( $post_id, '_grigora-disable-footer', $_REQUEST['grigora-settings']['disable-footer'] );

                } else {

                    update_post_meta( $post_id, '_grigora-disable-footer', 0 );

                }

                if ( isset( $_REQUEST['grigora-settings']['disable-title'] ) ) {

                    update_post_meta( $post_id, '_grigora-disable-title', $_REQUEST['grigora-settings']['disable-title'] );

                } else {

                    update_post_meta( $post_id, '_grigora-disable-title', 0 );

                }

            }

        }
    }

    new grigora_metabox_cl();
}