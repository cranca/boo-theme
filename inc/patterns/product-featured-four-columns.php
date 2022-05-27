<?php
/**
 * Pattern: Featured products in four columns
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Featured products in four columns', 'boo' ),
	'categories' => array( 'boo-products' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"40px"}}},"backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:100px;padding-bottom:40px"><!-- wp:heading {"textAlign":"center","fontSize":"max-36"} -->
									<h2 class="has-text-align-center has-max-36-font-size" id="featured-products">' . esc_html__( 'Featured products', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
									<p class="has-text-align-center has-medium-font-size">Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:separator -->
									<hr class="wp-block-separator"/>
									<!-- /wp:separator -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image size-full" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme" class="wp-image-3489"/></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
									<h4 class="has-text-align-center has-medium-font-size" id="member-name">' . esc_html__( 'Product Name', 'boo' ) . '</h4>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image size-full" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme" class="wp-image-3489"/></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
									<h4 class="has-text-align-center has-medium-font-size" id="member-name">' . esc_html__( 'Product Name', 'boo' ) . '</h4>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image size-full" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme" class="wp-image-3489"/></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
									<h4 class="has-text-align-center has-medium-font-size" id="member-name">' . esc_html__( 'Product Name', 'boo' ) . '</h4>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"id":3489,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
									<figure class="wp-block-image size-full" style="border-radius:5px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '" alt="Boo Theme" class="wp-image-3489"/></figure>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
									<h4 class="has-text-align-center has-medium-font-size" id="member-name">' . esc_html__( 'Product Name', 'boo' ) . '</h4>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="has-text-align-center" style="font-size:18px">Lorem ipsum dolor sit amet, consectetur et adipiscing.</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
