<?php
/**
 * Pattern: Banner with heading, text and button in one column
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Banner with heading, text and button in one column.', 'boo' ),
	'categories' => array( 'boo-banner' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-primary-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"white","fontSize":"max-48"} -->
									<h3 class="has-text-align-center has-white-color has-text-color has-max-48-font-size" id="let-s-connect" style="font-style:normal;font-weight:800;margin-bottom:20px">' . esc_html__( 'Let’s Connect', 'boo' ) . '</h3>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
									<p class="has-text-align-center has-white-color has-text-color has-large-font-size">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"className":"is-style-fill-white"} -->
									<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link">' . esc_html__( 'Get Started →', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
