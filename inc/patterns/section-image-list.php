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
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"padding":{"top":"100px"}}}} -->
									<div class="wp-block-columns alignwide" style="padding-top:100px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"100px"}}}} -->
									<div class="wp-block-column is-vertically-aligned-center" style="padding-right:100px"><!-- wp:image {"style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme"/></figure>
									<!-- /wp:image --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
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
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
