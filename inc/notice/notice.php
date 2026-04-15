<?php
/**
 * Dashboard notice and plugin activation helper for Sports Outlet.
 */

if ( ! is_admin() ) {
	return;
}

require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( ! class_exists( 'WP_Upgrader_Skin', false ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
}

add_action( 'wp_ajax_sports_outlet_install_and_activate_plugins', 'sports_outlet_install_and_activate_plugins' );
add_action( 'wp_ajax_nopriv_sports_outlet_install_and_activate_plugins', 'sports_outlet_install_and_activate_plugins' );

function sports_outlet_is_plugin_installed( $plugin_slug ) {
	$installed_plugins = get_plugins();
	foreach ( $installed_plugins as $path => $details ) {
		if ( 0 === strpos( $path, $plugin_slug ) ) {
			return true;
		}
	}

	return false;
}

function sports_outlet_is_plugin_activated( $plugin_slug ) {
	return is_plugin_active( $plugin_slug );
}

function sports_outlet_all_plugins_active() {
	$recommended_plugins = array(
		array(
			'name' => __( 'Classic Blog Grid', 'sports-outlet' ),
			'slug' => 'classic-blog-grid',
			'file' => 'classic-blog-grid.php',
		),
	);

	foreach ( $recommended_plugins as $plugin ) {
		if ( ! is_plugin_active( $plugin['slug'] . '/' . $plugin['file'] ) ) {
			return false;
		}
	}

	return true;
}

class Silent_Skin extends WP_Upgrader_Skin {
	public function header() {}
	public function footer() {}
	public function feedback( $string, ...$args ) {}
	public function error( $errors ) {}
	public function before() {}
	public function after() {}
}

function sports_outlet_install_and_activate_plugins() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	check_ajax_referer( 'sports_outlet_welcome_nonce', 'nonce' );

	$recommended_plugins = array(
		array(
			'name' => __( 'Classic Blog Grid', 'sports-outlet' ),
			'slug' => 'classic-blog-grid',
			'file' => 'classic-blog-grid.php',
		),
	);

	set_transient( 'install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10 );

	require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/misc.php';
	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

	foreach ( $recommended_plugins as $plugin ) {
		$plugin_slug = $plugin['slug'];
		$plugin_file = $plugin['file'];
		$plugin_name = $plugin['name'];

		if ( is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
			update_install_and_activate_progress( $plugin_name, 'Already Active' );
			continue;
		}

		if ( sports_outlet_is_plugin_installed( $plugin_slug ) ) {
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue;
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
			continue;
		}

		update_install_and_activate_progress( $plugin_name, 'Installing' );

		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => $plugin_slug,
				'fields' => array(
					'sections' => false,
				),
			)
		);

		if ( is_wp_error( $api ) ) {
			update_install_and_activate_progress( $plugin_name, 'Error' );
			continue;
		}

		$upgrader = new Plugin_Upgrader( new Silent_Skin() );
		$install  = $upgrader->install( $api->download_link );

		if ( $install ) {
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue;
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
			continue;
		}

		update_install_and_activate_progress( $plugin_name, 'Error' );
	}

	delete_transient( 'install_and_activate_progress' );
	if ( ob_get_length() ) {
		ob_clean();
	}

	header( 'Content-Type: application/json; charset=utf-8' );
	$redirect_url = admin_url( 'themes.php?page=sports-outlet' );
	echo wp_json_encode(
		array(
			'success' => true,
			'data'    => array(
				'redirect_url' => $redirect_url,
			),
		)
	);

	wp_die();
}

function update_install_and_activate_progress( $plugin_name, $status ) {
	$progress = get_transient( 'install_and_activate_progress' );
	if ( false === $progress ) {
		$progress = array();
	}
	$progress[] = array(
		'plugin' => $plugin_name,
		'status' => $status,
	);
	set_transient( 'install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10 );
}

add_action( 'wp_ajax_sports_outlet_dismissed_notice_handler', 'sports_outlet_ajax_notice_dismiss_function' );

function sports_outlet_ajax_notice_dismiss_function() {
	if ( ! wp_verify_nonce( $_POST['wpnonce'], 'sports_outlet_welcome_nonce' ) ) {
		wp_send_json_error( 'Invalid nonce' );
	}

	if ( isset( $_POST['type'] ) ) {
		$type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
		update_option( 'dismissed-' . $type, true );
		wp_send_json_success( 'Notice dismissed' );
	}

	wp_send_json_error( 'Type not set' );
}

function sports_outlet_custom_admin_notice() {
	if ( get_option( 'dismissed-get_started_notice', false ) ) {
		return;
	}

	$current_screen = get_current_screen();
	$theme          = wp_get_theme();

	if ( $current_screen && 'appearance_page_sports-outlet' === $current_screen->id ) {
		return;
	}
	?>
	<div class="getstrat updated notice notice-success is-dismissible notice-get-started-class sports-outlet-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="sports-outlet-dismiss-notice" data-notice="get_started_notice">
		<div class="admin-image">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/screenshot.png'; ?>" alt="<?php esc_attr_e( 'Theme screenshot', 'sports-outlet' ); ?>" />
		</div>
		<div class="admin-content">
			<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'sports-outlet' ), esc_html( $theme->get( 'Name' ) ), esc_html( $theme->get( 'Version' ) ) ); ?></h1>
			<p><?php esc_html_e( 'Get Started With Theme By Clicking On Getting Started.', 'sports-outlet' ); ?></p>
			<div style="display: grid;">
				<a class="admin-notice-btn button button-hero upgrade-pro" target="_blank" href="<?php echo esc_url( SPORTS_OUTLET_PREMIUM_PAGE ); ?>"><?php esc_html_e( 'Upgrade Pro', 'sports-outlet' ); ?><i class="dashicons dashicons-cart"></i></a>

				<a class="admin-notice-btn button button-hero theme-install" id="install-activate-button" href="#"><?php esc_html_e( 'Get started', 'sports-outlet' ); ?><i class="dashicons dashicons-backup"></i></a>

				<a class="admin-notice-btn button button-hero" target="_blank" href="<?php echo esc_url( SPORTS_OUTLET_THEME_DOCUMENTATION ); ?>"><?php esc_html_e( 'Free Doc', 'sports-outlet' ); ?><i class="dashicons dashicons-visibility"></i></a>

				<a class="admin-notice-btn button button-hero" target="_blank" href="<?php echo esc_url( SPORTS_OUTLET_PRO_DEMO ); ?>"><?php esc_html_e( 'View Demo', 'sports-outlet' ); ?><i class="dashicons dashicons-awards"></i></a>
			</div>
		</div>
		<div class="admin-bundle-image">
			<a href="<?php echo esc_url( SPORTS_OUTLET_BUNDLE_PAGE ); ?>" target="_blank"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/image_1.webp'; ?>" alt="<?php esc_attr_e( 'Bundle banner', 'sports-outlet' ); ?>" /></a>
		</div>
	</div>
	<?php
}
add_action( 'admin_notices', 'sports_outlet_custom_admin_notice' );

add_action( 'after_switch_theme', 'sports_outlet_after_switch_theme' );
function sports_outlet_after_switch_theme() {
	update_option( 'dismissed-get_started_notice', false );
}
