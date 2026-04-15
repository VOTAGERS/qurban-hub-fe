<?php
/**
 * Title: Banner
 * Slug: sports-outlet/banner
 * Categories: sports-outlet
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */

$sports_outlet_pluginsList = get_option( 'active_plugins' );
$sports_outlet_plugin = 'woocommerce/woocommerce.php';
$sports_outlet_results = in_array( $sports_outlet_plugin , $sports_outlet_pluginsList);
if ( $sports_outlet_results )  {
?>

<!-- wp:group {"className":"banner-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-section" style="margin-top:0px;margin-bottom:0px;padding-right:0px;padding-left:0px"><!-- wp:cover {"isUserOverlayColor":true,"minHeight":50,"gradient":"banner-bg","className":"banner-bg","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-cover banner-bg" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-banner-bg-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"width":"66.66%","className":"banner-left-box","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"45px"}}}} -->
<div class="wp-block-column banner-left-box" style="padding-top:45px;padding-bottom:var(--wp--preset--spacing--50);flex-basis:66.66%"><!-- wp:group {"className":"banner-content wow zoomInUp","style":{"spacing":{"padding":{"right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group banner-content wow zoomInUp" style="padding-right:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"banner-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"60px","topRight":"60px","bottomLeft":"60px","bottomRight":"60px"}},"typography":{"textTransform":"capitalize","textDecoration":"underline"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}}},"backgroundColor":"primary","textColor":"contrast"} -->
<p class="banner-sub-title has-contrast-color has-primary-background-color has-text-color has-background has-link-color" style="border-top-left-radius:60px;border-top-right-radius:60px;border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px;text-decoration:underline;text-transform:capitalize"><?php echo esc_html__( 'gear up for every game', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"banner-main-title","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"40px","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} -->
<h1 class="wp-block-heading banner-main-title has-icon-bg-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:700;line-height:1.4;text-transform:uppercase"><?php echo esc_html__( 'Premium sportswear and equipment built for performance.', 'sports-outlet' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"banner-btn-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-btn-box" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:buttons {"className":"banner-button"} -->
<div class="wp-block-buttons banner-button"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"textTransform":"capitalize","fontSize":"15px"},"spacing":{"padding":{"left":"15px","right":"15px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:15px;padding-bottom:4px;padding-left:15px;font-size:15px;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"banner-desc","style":{"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}}}} -->
<p class="banner-desc has-text-color has-link-color" style="color:#5e5e5e"><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"banner-btm-boxes","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns banner-btm-boxes" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"className":"banner-left-cover wow rollIn"} -->
<div class="wp-block-column banner-left-cover wow rollIn"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img1.png","id":44,"dimRatio":30,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":250,"contentPosition":"bottom center","sizeSlug":"full","className":"banner-btm-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-btm-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:250px"><img class="wp-block-cover__image-background wp-image-44 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"right","className":"banner-btm-title","style":{"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-right banner-btm-title" style="font-size:26px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'football collection', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"banner-btm-price-box","style":{"spacing":{"blockGap":"5px","margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group banner-btm-price-box" style="margin-top:10px"><!-- wp:paragraph {"className":"banner-btm-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<p class="banner-btm-text has-base-color has-text-color has-link-color" style="text-transform:capitalize"><?php echo esc_html__( 'only :', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"banner-btm-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"textColor":"tertiary"} -->
<p class="banner-btm-price has-tertiary-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:400;line-height:1.3"><?php echo esc_html__( '$20', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"banner-btm-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons banner-btm-btn" style="margin-top:18px"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"banner-right-cover wow rollIn"} -->
<div class="wp-block-column banner-right-cover wow rollIn"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img2.png","id":66,"isUserOverlayColor":true,"minHeight":250,"gradient":"banner-bottom-card","contentPosition":"bottom center","sizeSlug":"full","className":"banner-btm-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-btm-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:250px"><img class="wp-block-cover__image-background wp-image-66 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-banner-bottom-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","className":"banner-btm-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<p class="has-text-align-right banner-btm-sub-title has-base-color has-text-color has-link-color" style="text-transform:capitalize"><?php echo esc_html__( 'weekend discound 40%', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"right","className":"banner-btm-title","style":{"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"15px"}}}} -->
<h2 class="wp-block-heading has-text-align-right banner-btm-title" style="margin-top:15px;font-size:26px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'bat & ball', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"banner-btm-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons banner-btm-btn" style="margin-top:18px"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"33.33%","className":"banner-right-box wow zoomIn","style":{"spacing":{"padding":{"top":"40px","bottom":"16px","left":"25px"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch banner-right-box wow zoomIn" style="padding-top:40px;padding-bottom:16px;padding-left:25px;flex-basis:33.33%"><!-- wp:group {"className":"banner-right-top-box","layout":{"type":"default"}} -->
<div class="wp-block-group banner-right-top-box"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search grocery items here","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"className":"banner-search","style":{"border":{"width":"0px","style":"none","radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"namespace":"woocommerce/product-search"} /-->

<!-- wp:group {"className":"banner-review-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-review-box"><!-- wp:image {"id":22,"sizeSlug":"full","linkDestination":"none","className":"banner-review-img"} -->
<figure class="wp-block-image size-full banner-review-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/review-img.png" alt="" class="wp-image-22"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bnr-review-cont-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-review-cont-box"><!-- wp:paragraph {"className":"banner-review-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.1"}},"textColor":"icon-bg"} -->
<p class="banner-review-count has-icon-bg-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:500;line-height:1.1"><?php echo esc_html__( '205k+', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"banner-review-text","style":{"spacing":{"margin":{"top":"0px"}},"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"typography":{"textTransform":"capitalize","fontSize":"14px"}}} -->
<p class="banner-review-text has-text-color has-link-color" style="color:#5e5e5e;margin-top:0px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'happy clients', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-product-sec","layout":{"type":"default"}} -->
<div class="wp-block-group banner-product-sec"><!-- wp:heading {"className":"banner-product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}},"typography":{"fontSize":"25px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"icon-bg"} -->
<h2 class="wp-block-heading banner-product-sec-title has-icon-bg-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'our hot product', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-product-sec-desc","style":{"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"spacing":{"margin":{"top":"0px"}}}} -->
<p class="banner-product-sec-desc has-text-color has-link-color" style="color:#5e5e5e;margin-top:0px"><?php echo esc_html__( 'Lorem ipsum dolor sit amit.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-container"} -->
<div class="wp-block-columns are-vertically-aligned-center slider-container"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"slider"} -->
<div class="wp-block-column is-vertically-aligned-center slider" style="flex-basis:66.66%"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"},"color":"#dddddd","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-box has-border-color has-base-background-color has-background" style="border-color:#dddddd;border-width:1px;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:0px"><!-- wp:cover {"customOverlayColor":"#f6f5f5","isUserOverlayColor":true,"minHeight":50,"isDark":false,"className":"bnr-product-img-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light bnr-product-img-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f6f5f5"></span><div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"bnr-product-rating-box","style":{"color":{"text":"#ecaf26"},"elements":{"link":{"color":{"text":"#ecaf26"}}},"typography":{"fontSize":"12px"}}} /-->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"120px","height":"120px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"5px"}}}} /-->

<!-- wp:group {"className":"bnr-product-btn-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"-15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group bnr-product-btn-box" style="margin-top:-15px"><!-- wp:buttons {"className":"bnr-product-btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons bnr-product-btn"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"banner-quick-btn"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"bnr-product-content","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-content" style="margin-top:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-terms {"term":"product_cat","className":"bnr-product-cat-name","style":{"typography":{"fontSize":"12px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"17px","textTransform":"capitalize"},"spacing":{"padding":{"top":"0px"},"margin":{"top":"0px"}}},"textColor":"contrast","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"10px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-slider-arrows","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-slider-arrows" style="margin-top:0px"><!-- wp:buttons {"className":"slider-controls","layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-buttons slider-controls"><!-- wp:button {"className":"next-btn","style":{"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button next-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><i class="fas fa-chevron-right"></i></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"prev-btn","style":{"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button prev-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><i class="fas fa-chevron-left"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } else { ?>

<!-- wp:group {"className":"banner-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-section" style="margin-top:0px;margin-bottom:0px;padding-right:0px;padding-left:0px"><!-- wp:cover {"isUserOverlayColor":true,"minHeight":50,"gradient":"banner-bg","className":"banner-bg","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-cover banner-bg" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-banner-bg-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"width":"66.66%","className":"banner-left-box","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"45px"}}}} -->
<div class="wp-block-column banner-left-box" style="padding-top:45px;padding-bottom:var(--wp--preset--spacing--50);flex-basis:66.66%"><!-- wp:group {"className":"banner-content wow zoomInUp","style":{"spacing":{"padding":{"right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group banner-content wow zoomInUp" style="padding-right:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"banner-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"60px","topRight":"60px","bottomLeft":"60px","bottomRight":"60px"}},"typography":{"textTransform":"capitalize","textDecoration":"underline"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}}},"backgroundColor":"primary","textColor":"contrast"} -->
<p class="banner-sub-title has-contrast-color has-primary-background-color has-text-color has-background has-link-color" style="border-top-left-radius:60px;border-top-right-radius:60px;border-bottom-left-radius:60px;border-bottom-right-radius:60px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px;text-decoration:underline;text-transform:capitalize"><?php echo esc_html__( 'gear up for every game', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"banner-main-title","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"40px","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} -->
<h1 class="wp-block-heading banner-main-title has-icon-bg-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:700;line-height:1.4;text-transform:uppercase"><?php echo esc_html__( 'Premium sportswear and equipment built for performance.', 'sports-outlet' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"banner-btn-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-btn-box" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:buttons {"className":"banner-button"} -->
<div class="wp-block-buttons banner-button"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"typography":{"textTransform":"capitalize","fontSize":"15px"},"spacing":{"padding":{"left":"15px","right":"15px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:15px;padding-bottom:4px;padding-left:15px;font-size:15px;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"banner-desc","style":{"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}}}} -->
<p class="banner-desc has-text-color has-link-color" style="color:#5e5e5e"><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"banner-btm-boxes","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns banner-btm-boxes" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"className":"banner-left-cover wow rollIn"} -->
<div class="wp-block-column banner-left-cover wow rollIn"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img1.png","id":44,"dimRatio":30,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":250,"contentPosition":"bottom center","sizeSlug":"full","className":"banner-btm-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-btm-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:250px"><img class="wp-block-cover__image-background wp-image-44 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"right","className":"banner-btm-title","style":{"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-align-right banner-btm-title" style="font-size:26px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'football collection', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"banner-btm-price-box","style":{"spacing":{"blockGap":"5px","margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group banner-btm-price-box" style="margin-top:10px"><!-- wp:paragraph {"className":"banner-btm-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<p class="banner-btm-text has-base-color has-text-color has-link-color" style="text-transform:capitalize"><?php echo esc_html__( 'only :', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"banner-btm-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"textColor":"tertiary"} -->
<p class="banner-btm-price has-tertiary-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:400;line-height:1.3"><?php echo esc_html__( '$20', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"banner-btm-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons banner-btm-btn" style="margin-top:18px"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"banner-right-cover wow rollIn"} -->
<div class="wp-block-column banner-right-cover wow rollIn"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img2.png","id":66,"isUserOverlayColor":true,"minHeight":250,"gradient":"banner-bottom-card","contentPosition":"bottom center","sizeSlug":"full","className":"banner-btm-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-btm-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:250px"><img class="wp-block-cover__image-background wp-image-66 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-banner-bottom-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"right","className":"banner-btm-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize"}},"textColor":"base"} -->
<p class="has-text-align-right banner-btm-sub-title has-base-color has-text-color has-link-color" style="text-transform:capitalize"><?php echo esc_html__( 'weekend discound 40%', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"right","className":"banner-btm-title","style":{"typography":{"fontSize":"26px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"15px"}}}} -->
<h2 class="wp-block-heading has-text-align-right banner-btm-title" style="margin-top:15px;font-size:26px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'bat & ball', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"banner-btm-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons banner-btm-btn" style="margin-top:18px"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"33.33%","className":"banner-right-box wow zoomIn","style":{"spacing":{"padding":{"top":"40px","bottom":"16px","left":"25px"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch banner-right-box wow zoomIn" style="padding-top:40px;padding-bottom:16px;padding-left:25px;flex-basis:33.33%"><!-- wp:group {"className":"banner-right-top-box","layout":{"type":"default"}} -->
<div class="wp-block-group banner-right-top-box"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search grocery items here","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"className":"banner-search","style":{"border":{"width":"0px","style":"none","radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"namespace":"woocommerce/product-search"} /-->

<!-- wp:group {"className":"banner-review-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-review-box"><!-- wp:image {"id":22,"sizeSlug":"full","linkDestination":"none","className":"banner-review-img"} -->
<figure class="wp-block-image size-full banner-review-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/review-img.png" alt="" class="wp-image-22"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bnr-review-cont-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group bnr-review-cont-box"><!-- wp:paragraph {"className":"banner-review-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.1"}},"textColor":"icon-bg"} -->
<p class="banner-review-count has-icon-bg-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:500;line-height:1.1"><?php echo esc_html__( '205k+', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"banner-review-text","style":{"spacing":{"margin":{"top":"0px"}},"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"typography":{"textTransform":"capitalize","fontSize":"14px"}}} -->
<p class="banner-review-text has-text-color has-link-color" style="color:#5e5e5e;margin-top:0px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'happy clients', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-product-sec","layout":{"type":"default"}} -->
<div class="wp-block-group banner-product-sec"><!-- wp:heading {"className":"banner-product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}},"typography":{"fontSize":"25px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"}},"textColor":"icon-bg"} -->
<h2 class="wp-block-heading banner-product-sec-title has-icon-bg-color has-text-color has-link-color" style="font-size:25px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'our hot product', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-product-sec-desc","style":{"color":{"text":"#5e5e5e"},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"spacing":{"margin":{"top":"0px"}}}} -->
<p class="banner-product-sec-desc has-text-color has-link-color" style="color:#5e5e5e;margin-top:0px"><?php echo esc_html__( 'Lorem ipsum dolor sit amit.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-container"} -->
<div class="wp-block-columns are-vertically-aligned-center slider-container"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"slider"} -->
<div class="wp-block-column is-vertically-aligned-center slider" style="flex-basis:80%"><!-- wp:group {"className":"bnr-product-box","style":{"dimensions":{"minHeight":"15px"},"border":{"color":"#dddddd","width":"1px","radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-box has-border-color has-base-background-color has-background" style="border-color:#dddddd;border-width:1px;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:15px;margin-top:0px"><!-- wp:cover {"customOverlayColor":"#f6f5f5","isUserOverlayColor":true,"minHeight":50,"isDark":false,"className":"bnr-product-img-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light bnr-product-img-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f6f5f5"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-product-rating-box","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"blockGap":"5px","padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group bnr-product-rating-box has-base-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:paragraph {"className":"bnr-product-rate-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"}},"textColor":"contrast"} -->
<p class="bnr-product-rate-count has-contrast-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( '4.5', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":153,"sizeSlug":"full","linkDestination":"none","className":"bnr-product-rate-img"} -->
<figure class="wp-block-image size-full bnr-product-rate-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star.png" alt="" class="wp-image-153"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"id":137,"width":"auto","height":"120px","sizeSlug":"full","linkDestination":"none","align":"center","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized bnr-product-img" style="margin-top:0px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-product1.png" alt="" class="wp-image-137" style="width:auto;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bnr-product-btn-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"-15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group bnr-product-btn-box" style="margin-top:-15px"><!-- wp:buttons {"className":"bnr-product-btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons bnr-product-btn"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<i class="fa fa-eye"></i>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"bnr-product-content","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-content" style="margin-top:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:paragraph {"className":"bnr-product-cat-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textTransform":"capitalize"}},"textColor":"contrast"} -->
<p class="bnr-product-cat-name has-contrast-color has-text-color has-link-color" style="font-size:12px;text-transform:capitalize"><?php echo esc_html__( 'collection name', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"17px"},"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h5 class="wp-block-heading has-contrast-color has-text-color has-link-color" style="margin-top:0px;font-size:17px;text-transform:capitalize"><?php echo esc_html__( 'product name here', 'sports-outlet' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:10px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html__( '$25.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:12px;text-decoration:line-through"><?php echo esc_html__( '$35.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-box","style":{"dimensions":{"minHeight":"15px"},"border":{"color":"#dddddd","width":"1px","radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-box has-border-color has-base-background-color has-background" style="border-color:#dddddd;border-width:1px;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:15px;margin-top:0px"><!-- wp:cover {"customOverlayColor":"#f6f5f5","isUserOverlayColor":true,"minHeight":50,"isDark":false,"className":"bnr-product-img-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light bnr-product-img-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f6f5f5"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-product-rating-box","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"blockGap":"5px","padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group bnr-product-rating-box has-base-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:paragraph {"className":"bnr-product-rate-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"}},"textColor":"contrast"} -->
<p class="bnr-product-rate-count has-contrast-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( '4.5', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":153,"sizeSlug":"full","linkDestination":"none","className":"bnr-product-rate-img"} -->
<figure class="wp-block-image size-full bnr-product-rate-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star.png" alt="" class="wp-image-153"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"id":137,"width":"auto","height":"120px","sizeSlug":"full","linkDestination":"none","align":"center","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized bnr-product-img" style="margin-top:0px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-product2.png" alt="" class="wp-image-137" style="width:auto;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bnr-product-btn-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"-15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group bnr-product-btn-box" style="margin-top:-15px"><!-- wp:buttons {"className":"bnr-product-btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons bnr-product-btn"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<i class="fa-solid fa-eye"></i>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"bnr-product-content","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-content" style="margin-top:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:paragraph {"className":"bnr-product-cat-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textTransform":"capitalize"}},"textColor":"contrast"} -->
<p class="bnr-product-cat-name has-contrast-color has-text-color has-link-color" style="font-size:12px;text-transform:capitalize"><?php echo esc_html__( 'collection name', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"17px"},"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h5 class="wp-block-heading has-contrast-color has-text-color has-link-color" style="margin-top:0px;font-size:17px;text-transform:capitalize"><?php echo esc_html__( 'product name here', 'sports-outlet' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:10px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html__( '$25.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:12px;text-decoration:line-through"><?php echo esc_html__( '$35.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-box","style":{"dimensions":{"minHeight":"15px"},"border":{"color":"#dddddd","width":"1px","radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-box has-border-color has-base-background-color has-background" style="border-color:#dddddd;border-width:1px;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:15px;margin-top:0px"><!-- wp:cover {"customOverlayColor":"#f6f5f5","isUserOverlayColor":true,"minHeight":50,"isDark":false,"className":"bnr-product-img-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light bnr-product-img-box" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f6f5f5"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"bnr-product-rating-box","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"blockGap":"5px","padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group bnr-product-rating-box has-base-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px"><!-- wp:paragraph {"className":"bnr-product-rate-count","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"}},"textColor":"contrast"} -->
<p class="bnr-product-rate-count has-contrast-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( '4.5', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":153,"sizeSlug":"full","linkDestination":"none","className":"bnr-product-rate-img"} -->
<figure class="wp-block-image size-full bnr-product-rate-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star.png" alt="" class="wp-image-153"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"id":137,"width":"auto","height":"120px","sizeSlug":"full","linkDestination":"none","align":"center","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized bnr-product-img" style="margin-top:0px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-product3.png" alt="" class="wp-image-137" style="width:auto;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bnr-product-btn-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"-15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group bnr-product-btn-box" style="margin-top:-15px"><!-- wp:buttons {"className":"bnr-product-btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons bnr-product-btn"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"12px","right":"12px","top":"4px","bottom":"4px"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'shop now ', 'sports-outlet' ); ?><i class="fas fa-shopping-cart"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<i class="fa-solid fa-eye"></i>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"bnr-product-content","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"10px","bottom":"10px"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-content" style="margin-top:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:paragraph {"className":"bnr-product-cat-name","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textTransform":"capitalize"}},"textColor":"contrast"} -->
<p class="bnr-product-cat-name has-contrast-color has-text-color has-link-color" style="font-size:12px;text-transform:capitalize"><?php echo esc_html__( 'collection name', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"17px"},"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h5 class="wp-block-heading has-contrast-color has-text-color has-link-color" style="margin-top:0px;font-size:17px;text-transform:capitalize"><?php echo esc_html__( 'product name here', 'sports-outlet' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:10px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:16px"><?php echo esc_html__( '$25.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-link-color" style="font-size:12px;text-decoration:line-through"><?php echo esc_html__( '$35.00', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"bnr-slider-arrows"} -->
<div class="wp-block-column is-vertically-aligned-center bnr-slider-arrows" style="flex-basis:20%"><!-- wp:group {"className":"slider-controls","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group slider-controls" style="margin-top:0px"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"next-btn","style":{"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button next-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><i class="fas fa-chevron-right"></i></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"prev-btn","style":{"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button prev-btn"><a class="wp-block-button__link wp-element-button" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><i class="fas fa-chevron-left"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } ?>