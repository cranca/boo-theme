<?php
/**
 * Pattern: Section with featured content and reverse columns
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Featured content and reverse columns.', 'boo' ),
	'categories' => array( 'boo-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0px","top":"30px"}}},"backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:30px;padding-bottom:0px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"boo-reverse-columns"} -->
									<div class="wp-block-columns alignwide are-vertically-aligned-center boo-reverse-columns" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
									<h2 class="has-x-large-font-size" id="section-title">Section title</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
									<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">See more</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"style":{"border":{"radius":"5px"}},"className":"is-style-no-margin"} -->
									<figure class="wp-block-image is-style-no-margin" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme"/></figure>
									<!-- /wp:image --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
									<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"style":{"border":{"radius":"5px"}},"className":"is-style-no-margin"} -->
									<figure class="wp-block-image is-style-no-margin" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme"/></figure>
									<!-- /wp:image --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
									<h2 class="has-x-large-font-size" id="section-title-1">Section title</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
									<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">See more</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
