<?php
/**
 * Title: Blog Section
 * Slug: sports-outlet/blog-section
 * Categories: sports-outlet
 * Keywords: blog-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Blog Section"},"className":"blog-section","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group blog-section has-section-background-gradient-background has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-right:0px;padding-left:0px"><!-- wp:group {"className":"blog-head-box wow fadeInDown","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-head-box wow fadeInDown" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"className":"blog-heading","style":{"typography":{"fontSize":"30px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|icon-bg"}}}},"textColor":"icon-bg"} -->
<h2 class="wp-block-heading blog-heading has-icon-bg-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'our latest news & blog', 'sports-outlet' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"blog-para","style":{"elements":{"link":{"color":{"text":"#5e5e5e"}}},"spacing":{"margin":{"top":"5px"}},"color":{"text":"#5e5e5e"}}} -->
<p class="blog-para has-text-color has-link-color" style="color:#5e5e5e;margin-top:5px"><?php echo esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sports-outlet' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"blog-main-box wow fadeInUp"} -->
<div class="wp-block-query blog-main-box wow fadeInUp"><!-- wp:post-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"blog-box","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"color":"#dddddd","width":"1px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group blog-box has-border-color has-base-background-color has-background" style="border-color:#dddddd;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"align":"wide","className":"blog-img-box","style":{"color":{"background":"#d7d7d7"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"dimensions":{"minHeight":"280px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide blog-img-box has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;background-color:#d7d7d7;min-height:280px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide","className":"blog-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} /-->

<!-- wp:group {"className":"blog-date-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group blog-date-box has-primary-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:0px"><!-- wp:post-date {"textAlign":"center","format":"n/j/Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"blog-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"8px","right":"8px"}}},"textColor":"contrast"} /-->

<!-- wp:comments {"style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-comments has-contrast-background-color has-background" style="margin-top:0px"><!-- wp:comments-title {"textAlign":"center","showPostTitle":false,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}}},"textColor":"base"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-title {"isLink":true,"className":"blog-title","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"14px"}}},"textColor":"contrast"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":12,"className":"blog-excerpt","style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"contrast"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->