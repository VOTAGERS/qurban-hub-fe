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


add_action('woocommerce_before_cart', 'custom_form_di_cart');

function custom_form_di_cart() {
    ?>
    <div class="cart-custom-form">
        <h3>Data User</h3>

        <p>
            <label>Full Name</label>
            <input type="text" name="full_name" id="full_name">
        </p>

        <p>
            <label>Email</label>
            <input type="email" name="email" id="email">
        </p>

        <p>
            <label>Phone Number</label>
            <input type="text" name="phone_number" id="phone_number">
        </p>
    </div>
    <?php
}

add_action('wp_footer', 'cart_form_script');

function cart_form_script() {
    if (!is_cart()) return;
?>
	<script>
	document.querySelectorAll('#full_name, #email, #phone_number').forEach(el => {
		el.addEventListener('change', function() {

			fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
				method: 'POST',
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				body: new URLSearchParams({
					action: 'save_cart_form',
					full_name: document.getElementById('full_name').value,
					email: document.getElementById('email').value,
					phone_number: document.getElementById('phone_number').value
				})
			});

		});
	});
	</script>
<?php
}

add_action('wp_ajax_save_cart_form', 'save_cart_form');
add_action('wp_ajax_nopriv_save_cart_form', 'save_cart_form');

function save_cart_form() {
    WC()->session->set('custom_full_name', $_POST['full_name']);
    WC()->session->set('custom_email', $_POST['email']);
    WC()->session->set('custom_phone', $_POST['phone_number']);
    wp_die();
}



add_action('woocommerce_checkout_fields', 'prefill_checkout');


function prefill_checkout($fields) {

    $fields['billing']['billing_first_name']['default'] = WC()->session->get('custom_full_name');
    $fields['billing']['billing_email']['default'] = WC()->session->get('custom_email');
    $fields['billing']['billing_phone']['default'] = WC()->session->get('custom_phone');

    return $fields;
}


add_action('woocommerce_checkout_order_processed', 'kirim_ke_laravel', 10, 3);

function kirim_ke_laravel($order_id, $posted_data, $order) {

    $data = [
        'full_name' => WC()->session->get('custom_full_name'),
        'email' => WC()->session->get('custom_email'),
        'phone_number' => WC()->session->get('custom_phone'),
        'status' => 'active',
        'created_by' => 'woocommerce',
        'updated_by' => 'woocommerce',
    ];

    wp_remote_post('https://domain-laravel.com/api/users', [
        'body' => $data
    ]);
}


