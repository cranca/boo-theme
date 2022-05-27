<?php
/**
 * Pattern: Hero section with image, text and two buttons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Hero section with image, text and two buttons.', 'boo' ),
	'categories' => array( 'boo-hero' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"wideSize":"1200px"}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","fontSize":"max-60"} -->
									<h2 class="has-text-align-center has-max-60-font-size" id="really-big-heading">' . esc_html__( 'Really big heading', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
									<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus eu pellentesque vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get Started', 'boo' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-outline"} -->
									<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Learn More', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
