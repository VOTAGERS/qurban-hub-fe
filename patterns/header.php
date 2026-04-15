<?php
/**
 * Title: Header
 * Slug: sports-outlet/header
 * Categories: header, sports-outlet
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"wide","className":"main-header","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":"100%"}} -->
<div class="wp-block-group alignwide main-header" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"12px","bottom":"12px"}}},"gradient":"banner-bg","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group header-bottom has-banner-bg-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:12px;padding-bottom:12px"><!-- wp:columns {"verticalAlignment":"center","className":"header-btm-boxes wow fadeInDown","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-btm-boxes wow fadeInDown"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-btm-left"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-left" style="flex-basis:25%"><!-- wp:group {"className":"logo-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-btm-middle"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-middle" style="flex-basis:60%"><!-- wp:navigation {"textColor":"icon-bg","icon":"menu","overlayBackgroundColor":"primary","overlayTextColor":"icon-bg","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"15px"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"15px","textTransform":"capitalize"}},"layout":{"type":"flex","justifyContent":"center"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
	
<!-- wp:navigation-link {"label":"shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Category","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy now","type":"","url":"<?php echo esc_url( SPORTS_OUTLET_PREMIUM_PAGE ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-btm-right"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-right" style="flex-basis:15%"><!-- wp:group {"className":"header-btm-icons","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-btm-icons"><!-- wp:buttons {"className":"header-wishlist-btn","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
<div class="wp-block-buttons header-wishlist-btn"><!-- wp:button {"backgroundColor":"icon-bg","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-icon-bg-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;font-size:18px;font-style:normal;font-weight:600;text-transform:capitalize"><i class="fas fa-heart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"cartIcon":"bag-alt","content":"","className":"header-cart-btn","backgroundColor":"icon-bg","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","className":"header-account-btn","backgroundColor":"icon-bg","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- wp:buttons {"className":"header-buy-now","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons header-buy-now"><!-- wp:button {"backgroundColor":"secondary","textColor":"base","className":"buy-now-btn","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"18px","right":"18px"}},"typography":{"fontWeight":"700","fontSize":"16px"}}} -->
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
