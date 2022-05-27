<?php
/**
 * Pattern: Footer with text, button and copright
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Footer with text, button and copright.', 'boo' ),
	'categories' => array( 'boo-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0px"}}},"className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default" style="padding-bottom:0px"><!-- wp:separator {"customColor":"#dfdfdf","align":"full","className":"is-style-wide"} -->
									<hr class="wp-block-separator alignfull has-text-color has-background is-style-wide" style="background-color:#dfdfdf;color:#dfdfdf"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignfull" style="margin-top:30px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"className":"is-style-no-margin","fontSize":"medium"} -->
									<p class="has-text-align-center is-style-no-margin has-medium-font-size" style="font-style:normal;font-weight:800">' . esc_html__( 'Your brand', 'boo' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":168,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /--></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#326E44","openInNewTab":true,"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
									<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"facebook"} /-->

									<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
									<!-- /wp:social-links --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
