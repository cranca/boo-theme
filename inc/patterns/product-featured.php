<?php
/**
 * Pattern: Featured product with image
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Featured product with image', 'boo' ),
	'categories' => array( 'boo-products' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"30px"}}},"backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:100px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme"/></figure>
									<!-- /wp:image --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center","width":""} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
									<h2 class="has-x-large-font-size" id="product-name">' . esc_html__( 'Product name', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
									<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'View product', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
