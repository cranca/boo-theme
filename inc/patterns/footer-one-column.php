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
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"20px"}}},"className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default" style="padding-top:40px;padding-bottom:20px"><!-- wp:separator -->
									<hr class="wp-block-separator"/>
									<!-- /wp:separator -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"className":"is-style-no-margin","fontSize":"medium"} -->
									<p class="has-text-align-center is-style-no-margin has-medium-font-size" style="font-style:normal;font-weight:800">' . esc_html__( 'Your brand', 'boo' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">000 Some Street, Somecity - Someland<br>contact@somemail.com<br>+00 000 00 00 0</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
									<p class="has-text-align-center has-small-font-size">© 2022</p>
									<!-- /wp:paragraph -->

									<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#326E44","openInNewTab":true,"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
									<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"facebook"} /-->

									<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
									<!-- /wp:social-links --></div>
									<!-- /wp:group -->',
);
