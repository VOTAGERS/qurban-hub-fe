<?php
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function sports_outlet_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => esc_html__( 'WooCommerce', 'sports-outlet' ),
			'slug'      => 'woocommerce',
			'source'    => '',
			'required'  => false,
			'force_activation' => false,
        ),
        array(
			'name'      => esc_html__( 'YITH WooCommerce Wishlist', 'sports-outlet' ),
			'slug'      => 'yith-woocommerce-wishlist',
			'source'    => '',
			'required'  => false,
			'force_activation' => false,
        ),
        array(
			'name'      => esc_html__( 'YITH WooCommerce Quick View', 'sports-outlet' ),
			'slug'      => 'yith-woocommerce-quick-view',
			'source'    => '',
			'required'  => false,
			'force_activation' => false,
        ),
        array(
			'name'      => esc_html__( 'Gutentor', 'sports-outlet' ),
			'slug'      => 'gutentor',
			'source'    => '',
			'required'  => false,
			'force_activation' => false,
        ),
        array(
			'name'      => esc_html__( 'Classic Blog Grid', 'sports-outlet' ),
			'slug'      => 'classic-blog-grid',
			'source'    => '',
			'required'  => false,
			'force_activation' => false,
        )
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'sports_outlet_register_recommended_plugins' );
