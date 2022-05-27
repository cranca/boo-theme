<?php
/**
 * Pattern: Section with header and description
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Section with header and description.', 'boo' ),
	'categories' => array( 'boo-section' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"max-36"} -->
									<h2 class="has-text-align-center has-max-36-font-size" id="section-heading" style="font-style:normal;font-weight:800;margin-bottom:20px">Section heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
									<p class="has-text-align-center has-medium-font-size">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:separator -->
									<hr class="wp-block-separator"/>
									<!-- /wp:separator --></div>
									<!-- /wp:column -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
