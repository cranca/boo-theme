<?php
/**
 * Pattern: Section with header, description and a list of three text blocks
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Section with header, description and a list of three text blocks.', 'boo' ),
	'categories' => array( 'boo-section' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"100px"}}}} -->
									<div class="wp-block-column is-vertically-aligned-top" style="padding-right:100px"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"max-36"} -->
									<h2 class="has-text-align-left has-max-36-font-size" id="section-heading" style="font-style:normal;font-weight:800;margin-bottom:20px">Section heading</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
									<p class="has-text-align-left has-medium-font-size">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"level":3} -->
									<h3 id="column-heading">Column heading</h3>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"level":3} -->
									<h3 id="column-heading">Column heading</h3>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"level":3} -->
									<h3 id="column-heading">Column heading</h3>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									</div>
									<!-- /wp:group -->',
);
