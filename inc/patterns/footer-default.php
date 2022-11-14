<?php
/**
 * Pattern: Footer with copyright and social icons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Footer with copyright and social icons.', 'boo' ),
	'categories' => array( 'boo-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"10px"}}},"className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default" style="padding-top:40px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","className":"is-style-no-margin","fontSize":"small"} -->
									<p class="has-text-align-center is-style-no-margin has-small-font-size" style="font-style:normal;font-weight:800">© 2022 ' . esc_html__( 'Your brand', 'boo' ) . '</p>
									<!-- /wp:paragraph --></div>
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
