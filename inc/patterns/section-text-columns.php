<?php
/**
 * Pattern: Section with header, description and three text columns
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Section with header, description and three text columns.', 'boo' ),
	'categories' => array( 'boo-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"backgroundColor":"white","className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default has-white-background-color has-background" style="padding-top:100px;padding-bottom:70px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"max-36"} -->
									<h2 class="has-text-align-center has-max-36-font-size" id="section-heading" style="font-style:normal;font-weight:800">Section heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
									<p class="has-text-align-center has-medium-font-size">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:separator -->
									<hr class="wp-block-separator"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading -->
									<h2 id="column-heading-1">Column heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading -->
									<h2 id="column-heading-1">Column heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading -->
									<h2 id="column-heading-1">Column heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
