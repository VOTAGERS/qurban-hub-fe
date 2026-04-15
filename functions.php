<?php
/**
 * Sports Outlet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Sports Outlet
 * @since Sports Outlet 1.0
 */

if ( ! function_exists( 'sports_outlet_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function sports_outlet_setup() {
	load_theme_textdomain( 'sports-outlet', get_template_directory() . '/languages' );
}
endif;
add_action( 'after_setup_theme', 'sports_outlet_setup' );

function sports_outlet_block_assets(){
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '7.1.0' );
	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'sports-outlet-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'));
	wp_enqueue_script('sports-outlet-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_style_add_data( 'sports-outlet-style', 'rtl', 'replace' );
}
add_action('enqueue_block_assets', 'sports_outlet_block_assets');

/**
 * Load TGM.
 */
require get_template_directory() . '/inc/tgm/tgm.php';
if ( is_admin() ) {
	require get_template_directory() . '/inc/notice/notice.php';
}
require get_template_directory() . '/inc/addon.php';
require get_template_directory() . '/inc/customizer.php';

function sports_outlet_setup_theme() {
	if ( ! defined( 'SPORTS_OUTLET_PREMIUM_PAGE' ) ) {
		define( 'SPORTS_OUTLET_PREMIUM_PAGE', __( 'https://www.theclassictemplates.com/products/sports-outlet', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_PRO_DEMO' ) ) {
		define( 'SPORTS_OUTLET_PRO_DEMO', __( 'https://live.theclassictemplates.com/sports-outlet-pro/', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_THEME_PAGE' ) ) {
		define( 'SPORTS_OUTLET_THEME_PAGE', __( 'https://www.theclassictemplates.com/collections/best-wordpress-templates', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_SUPPORT' ) ) {
		define( 'SPORTS_OUTLET_SUPPORT', __( 'https://wordpress.org/support/theme/sports-outlet/', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_REVIEW' ) ) {
		define( 'SPORTS_OUTLET_REVIEW', __( 'https://wordpress.org/support/theme/sports-outlet/reviews/', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_THEME_DOCUMENTATION' ) ) {
		define( 'SPORTS_OUTLET_THEME_DOCUMENTATION', __( 'https://live.theclassictemplates.com/demo/docs/sports-outlet-free/', 'sports-outlet' ) );
	}
	if ( ! defined( 'SPORTS_OUTLET_BUNDLE_PAGE' ) ) {
		define( 'SPORTS_OUTLET_BUNDLE_PAGE', __( 'https://www.theclassictemplates.com/products/wordpress-theme-bundle', 'sports-outlet' ) );
	}
}
add_action( 'after_setup_theme', 'sports_outlet_setup_theme', 11 );

function sports_outlet_enqueue_admin_script() {
	wp_enqueue_script( 'sports-outlet-welcome-notice', get_template_directory_uri() . '/inc/notice/notice.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'sports-outlet-welcome-notice',
		'sports_outlet_localize',
		array(
			'ajax_url'     => admin_url( 'admin-ajax.php' ),
			'nonce'        => wp_create_nonce( 'sports_outlet_welcome_nonce' ),
			'dismiss_nonce' => wp_create_nonce( 'sports_outlet_welcome_nonce' ),
			'redirect_url' => admin_url( 'themes.php?page=sports-outlet' ),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'sports_outlet_enqueue_admin_script' );
