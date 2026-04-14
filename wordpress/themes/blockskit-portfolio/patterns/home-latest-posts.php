<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-portfolio/home-latest-posts
 * Categories: theme
 * Keywords: latest-posts
 */
?>
<!-- wp:group {"metadata":{"name":"blog"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"margin":{"top":"100px","bottom":"100px"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:100px;margin-bottom:100px;padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"300","letterSpacing":"0.5px"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:300;letter-spacing:0.5px;line-height:1"><?php esc_html_e( 'Checkout Some of My', 'blockskit-portfolio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}}},"backgroundColor":"highlight"} -->
<h2 class="wp-block-heading has-highlight-background-color has-background" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;padding-top:5px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:5px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Recent Insights', 'blockskit-portfolio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Unde labore. Integer vero, sed magna eius, illum ornare. Quae repudiandae tempore voluptate aliquam debitis vivamus, nascetur iusto, illo vitae. Morbi curabitur! Vel natoque torquent tempus consequatur aliquet, elementum repellendus turpis aliquam nostru', 'blockskit-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|x-small"}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"color":{"gradient":"linear-gradient(135deg,rgb(235,238,252) 0%,rgb(255,255,255) 97%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background:linear-gradient(135deg,rgb(235,238,252) 0%,rgb(255,255,255) 97%);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-small"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}}} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.1","letterSpacing":"0px","fontSize":"24px"}},"fontFamily":"source-sans-3"} /-->

<!-- wp:post-excerpt {"excerptLength":11} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->