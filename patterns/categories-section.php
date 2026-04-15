<?php
/**
 * Title: Categories Section
 * Slug: sports-outlet/categories-section
 * Categories: sports-outlet
 * Keywords: categories-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */

$sports_outlet_active_plugins = get_option( 'active_plugins' );
$sports_outlet_woo_plugin     = 'woocommerce/woocommerce.php';
$sports_outlet_gutentor_plugin = 'gutentor/gutentor.php';
if ( in_array( $sports_outlet_woo_plugin, $sports_outlet_active_plugins ) && in_array( $sports_outlet_gutentor_plugin, $sports_outlet_active_plugins ) ) {
?>

<!-- wp:group {"metadata":{"name":"Categories Section"},"className":"categories-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"0px","top":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group categories-section has-section-background-gradient-background has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"categories-head-box wow fadeInDown","layout":{"type":"default"}} -->
<div class="wp-block-group categories-head-box wow fadeInDown"><!-- wp:heading {"className":"categories-heading","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} -->
<h2 class="wp-block-heading categories-heading has-icon-bg-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'featured sports categories', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"categories-para","style":{"elements":{"link":{"color":{"text":"#5e5e5e"}}},"spacing":{"margin":{"top":"5px"}},"color":{"text":"#5e5e5e"}}} -->
<p class="categories-para has-text-color has-link-color" style="color:#5e5e5e;margin-top:5px"><?php echo esc_html__( 'Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"categories-info-boxes wow fadeInUp","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group categories-info-boxes wow fadeInUp" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:gutentor/t2 {"gID":"g-15g1655","gName":"gutentor/t2","pName":"gutentor/t2","t2Temp":1,"t2Taxonomy":"product_cat","t2Number":4,"tBtnIconOpt":{"position":"after","size":""},"tBtnIcon":{"label":"fa-shopping-cart","value":"fas fa-shopping-cart","code":"f07a"},"tBtnTxt":"Shop Now","tOnBtn":true,"tBtnC":{"enable":true,"normal":"#ffffff","hover":"#1949d4"},"tBtnBgGt":{"normal":false,"hover":""},"tBtnTxtC":{"enable":true,"normal":"#000000","hover":"#fff"},"tBtnBr":{"rTypeN":"px","rTypeH":"px","rTopN":"50","rTopH":"3","rRightN":"50","rRightH":"3","rBottomN":"50","rBottomH":"3","rLeftN":"50","rLeftH":"3"},"tBtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"tBxP":{"type":"px","dTop":"15","dBottom":"15","tTop":"15","tBottom":"15","mTop":"15","mBottom":"15"},"tTitleC":{"enable":true,"normal":"#ffffff","hover":""},"tTitleTypography":{"desktopFontSize":"20px","textTransform":"capitalize"},"tCountOpt":{"display":"bottom","prefix":"","suffix":" Product"},"tCountC":{"enable":true,"normal":"#F6FD81","hover":""},"mOnHeight":true,"mHeight":{"type":"vh","mobile":70,"tablet":70,"desktop":70}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } else { ?>

<!-- wp:group {"metadata":{"name":"Categories Section"},"className":"categories-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"0px","top":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group categories-section has-section-background-gradient-background has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"categories-head-box wow fadeInDown","layout":{"type":"default"}} -->
<div class="wp-block-group categories-head-box wow fadeInDown"><!-- wp:heading {"className":"categories-heading","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} -->
<h2 class="wp-block-heading categories-heading has-icon-bg-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'featured sports categories', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"categories-para","style":{"elements":{"link":{"color":{"text":"#5e5e5e"}}},"spacing":{"margin":{"top":"5px"}},"color":{"text":"#5e5e5e"}}} -->
<p class="categories-para has-text-color has-link-color" style="color:#5e5e5e;margin-top:5px"><?php echo esc_html__( 'Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"categories-info-boxes wow fadeInUp","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group categories-info-boxes wow fadeInUp" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"categories-boxes","style":{"spacing":{"blockGap":{"top":"20px","left":"25px"}}}} -->
<div class="wp-block-columns categories-boxes"><!-- wp:column {"className":"category-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column category-box has-base-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img1.png","id":104,"isUserOverlayColor":true,"minHeight":400,"gradient":"category-card","sizeSlug":"full","className":"category-bg","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover category-bg" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:400px"><img class="wp-block-cover__image-background wp-image-104 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-category-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"category-content","style":{"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group category-content" style="min-height:400px"><!-- wp:group {"className":"category-top-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group category-top-box"><!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px","textTransform":"capitalize"}}} -->
<h4 class="wp-block-heading category-title" style="font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'running &amp; fitness', 'sports-outlet' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"5px"}}},"textColor":"tertiary"} -->
<p class="category-count has-tertiary-color has-text-color has-link-color" style="margin-top:5px;text-transform:capitalize"><?php echo esc_html__( '06 product', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"category-btn"} -->
<div class="wp-block-buttons category-btn"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column category-box has-base-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img2.png","id":127,"isUserOverlayColor":true,"minHeight":400,"gradient":"category-card","sizeSlug":"full","className":"category-bg","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover category-bg" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:400px"><img class="wp-block-cover__image-background wp-image-127 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-category-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"category-content","style":{"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group category-content" style="min-height:400px"><!-- wp:group {"className":"category-top-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group category-top-box"><!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px","textTransform":"capitalize"}}} -->
<h4 class="wp-block-heading category-title" style="font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'football / soccer', 'sports-outlet' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"5px"}}},"textColor":"tertiary"} -->
<p class="category-count has-tertiary-color has-text-color has-link-color" style="margin-top:5px;text-transform:capitalize"><?php echo esc_html__( '06 product', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"category-btn"} -->
<div class="wp-block-buttons category-btn"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column category-box has-base-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img3.png","id":128,"isUserOverlayColor":true,"minHeight":400,"gradient":"category-card","sizeSlug":"full","className":"category-bg","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover category-bg" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:400px"><img class="wp-block-cover__image-background wp-image-128 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img3.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-category-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"category-content","style":{"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group category-content" style="min-height:400px"><!-- wp:group {"className":"category-top-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group category-top-box"><!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px","textTransform":"capitalize"}}} -->
<h4 class="wp-block-heading category-title" style="font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'cricket', 'sports-outlet' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"5px"}}},"textColor":"tertiary"} -->
<p class="category-count has-tertiary-color has-text-color has-link-color" style="margin-top:5px;text-transform:capitalize"><?php echo esc_html__( '06 product', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"category-btn"} -->
<div class="wp-block-buttons category-btn"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column category-box has-base-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img4.png","id":129,"isUserOverlayColor":true,"minHeight":400,"gradient":"category-card","sizeSlug":"full","className":"category-bg","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover category-bg" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:400px"><img class="wp-block-cover__image-background wp-image-129 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-img4.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-category-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"category-content","style":{"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group category-content" style="min-height:400px"><!-- wp:group {"className":"category-top-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group category-top-box"><!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px","textTransform":"capitalize"}}} -->
<h4 class="wp-block-heading category-title" style="font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'basketball', 'sports-outlet' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"capitalize"},"spacing":{"margin":{"top":"5px"}}},"textColor":"tertiary"} -->
<p class="category-count has-tertiary-color has-text-color has-link-color" style="margin-top:5px;text-transform:capitalize"><?php echo esc_html__( '06 product', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"category-btn"} -->
<div class="wp-block-buttons category-btn"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } ?>