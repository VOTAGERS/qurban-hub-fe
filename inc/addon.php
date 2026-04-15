<?php
/*
 * @package Sports Outlet
 */


function sports_outlet_admin_enqueue_scripts() {
	wp_enqueue_style( 'sports-outlet-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'sports_outlet_admin_enqueue_scripts' );

function sports_outlet_theme_info_menu_link() {

	$sports_outlet_theme = wp_get_theme();
	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s', 'sports-outlet' ), $sports_outlet_theme->get( 'Name' ) ),
		esc_html__( 'Theme Info', 'sports-outlet' ),
		'edit_theme_options',
		'sports-outlet',
		'sports_outlet_theme_info_page'
	);
}
add_action( 'admin_menu', 'sports_outlet_theme_info_menu_link' );

function sports_outlet_theme_info_page() {

	$sports_outlet_theme = wp_get_theme();
	?>
	<div class="wrap theme-info-wrap">
		<h1><?php printf( esc_html__( 'Welcome to %1$s', 'sports-outlet' ), esc_html( $sports_outlet_theme->get( 'Name' ) ) ); ?>
		</h1>
		<p class="theme-description">
			<?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'sports-outlet' ); ?>
		</p>
		<div class="columns-wrapper clearfix theme-demo">
			<div class="column column-quarter clearfix start-box"></div>
			<div class="column column-first clearfix">
				<div class="important-link">
					<div class="main-box columns-wrapper clearfix">

						<div class="themelink column column-half column-border clearfix">
							<p><strong><?php esc_html_e( 'Free Theme Documentation', 'sports-outlet' ); ?></strong></p>
							<p><?php esc_html_e( 'Need more details? Please check our complete and detailed documentation for full theme setup.', 'sports-outlet' ); ?></p>
							<a href="<?php echo esc_url( SPORTS_OUTLET_THEME_DOCUMENTATION ); ?>" target="_blank">
								<?php esc_html_e( 'Documentation', 'sports-outlet' ); ?>
							</a>
						</div>

						<div class="themelink column column-half column-padding clearfix">
							<p><strong><?php esc_html_e( 'Need Help?', 'sports-outlet' ); ?></strong></p>
							<p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'sports-outlet' ); ?></p>
							<a href="<?php echo esc_url( SPORTS_OUTLET_SUPPORT ); ?>" target="_blank">
								<?php esc_html_e( 'Contact Us', 'sports-outlet' ); ?>
							</a>
						</div>
					</div>
					<hr>
					<div class="main-box columns-wrapper clearfix">

						<div class="themelink column column-half column-border clearfix">
							<p><strong><?php esc_html_e( 'Pro version of our theme', 'sports-outlet' ); ?></strong></p>
							<p><?php esc_html_e( 'Are you excited for our theme? Then we will proceed for pro version of theme.', 'sports-outlet' ); ?></p>
							<a class="get-premium" href="<?php echo esc_url( SPORTS_OUTLET_PREMIUM_PAGE ); ?>" target="_blank">
								<?php esc_html_e( 'Get Premium', 'sports-outlet' ); ?>
							</a>
						</div>

						<div class="themelink column column-half column-padding clearfix">
							<p><strong><?php esc_html_e( 'Leave us a review', 'sports-outlet' ); ?></strong></p>
							<p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'sports-outlet' ); ?></p>
							<a href="<?php echo esc_url( SPORTS_OUTLET_REVIEW ); ?>" target="_blank">
								<?php esc_html_e( 'Rate This Theme', 'sports-outlet' ); ?>
							</a>
						</div>

					</div>
				</div>
			</div>
			<div class="column column-quarter clearfix start-box">
				<div class="bundle-info">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle.png' ); ?>" alt="<?php echo esc_attr( 'screenshot', 'sports-outlet' ); ?>" class="bundle-image"/>
					<div class="bundle-content themelink">
						<h3><?php esc_html_e( 'WordPress Theme Bundle', 'sports-outlet' ); ?></h3>
						<small><b><?php esc_html_e( 'Get access to a collection of 100+ stunning WordPress themes for just $99 — featuring designs for every business niche!', 'sports-outlet' ); ?></b></small>
						<a class="get-premium" href="<?php echo esc_url( SPORTS_OUTLET_BUNDLE_PAGE ); ?>" target="_blank">
							<?php esc_html_e( 'Get Bundle at 20% OFF', 'sports-outlet' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="getting-started">
			<div class="section">
				<h3><?php
					printf( esc_html__( 'Getting started with %s', 'sports-outlet' ),
						esc_html( $sports_outlet_theme->get( 'Name' ) ) ); ?></h3>
				<div class="columns-wrapper clearfix">
					<div class="column column-half clearfix">
						<div class="section themelink">
							<div class="">
								<a class="" href="<?php echo esc_url( SPORTS_OUTLET_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Get Premium', 'sports-outlet' ); ?></a>
								<a href="<?php echo esc_url( SPORTS_OUTLET_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Demo', 'sports-outlet' ); ?></a>
								<a class="get-premium" href="<?php echo esc_url( SPORTS_OUTLET_BUNDLE_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Bundle of 100+ Themes at $99', 'sports-outlet' ); ?></a>
							</div>
							<div class="theme-description-1"><?php echo esc_html( $sports_outlet_theme->get( 'Description' ) ); ?></div>
						</div>
					</div>
					<div class="column column-half clearfix">
						<img src="<?php echo esc_url( $sports_outlet_theme->get_screenshot() ); ?>" alt="<?php echo esc_attr( 'screenshot', 'sports-outlet' ); ?>"/>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div id="theme-author">
			<p><?php
				printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'sports-outlet' ),
					esc_html( $sports_outlet_theme->get( 'Name' ) ),
					'<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'sports-outlet' ) . '">classictemplate</a>',
					'<a target="_blank" href="' . esc_url( SPORTS_OUTLET_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'sports-outlet' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'sports-outlet' ) . '</a>'
				);
				?></p>
		</div>
	</div>
	<?php
}
?>
