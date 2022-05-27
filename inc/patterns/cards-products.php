<?php
/**
 * Pattern: Product cards in three columns
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Product cards in three columns.', 'boo' ),
	'categories' => array( 'boo-cards' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"className":"is-style-boxshadow"} -->
									<div class="wp-block-group is-style-boxshadow"><!-- wp:image {"id":56,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}},"className":"is-style-no-margin"} -->
									<figure class="wp-block-image size-large is-style-no-margin" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-product-1.png' . '" alt="Boo Theme" class="wp-image-56"/></figure>
									<!-- /wp:image -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:paragraph {"textColor":"white","className":"is-style-no-margin","fontSize":"medium"} -->
									<p class="is-style-no-margin has-white-color has-text-color has-medium-font-size" id="sample-heading">' . esc_html__( 'From', 'boo' ) . ' <strong>31 €/' . esc_html__( 'day', 'boo' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
									<h2 class="has-white-color has-text-color has-x-large-font-size" id="sample-heading">' . esc_html__( 'Product name', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-white-color has-text-color" style="font-size:18px">Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">' . esc_html__( 'Book it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"className":"is-style-boxshadow"} -->
									<div class="wp-block-group is-style-boxshadow"><!-- wp:image {"id":56,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}},"className":"is-style-no-margin"} -->
									<figure class="wp-block-image size-large is-style-no-margin" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-product-2.png' . '" alt="Boo Theme" class="wp-image-56"/></figure>
									<!-- /wp:image -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:paragraph {"textColor":"white","className":"is-style-no-margin","fontSize":"medium"} -->
									<p class="is-style-no-margin has-white-color has-text-color has-medium-font-size" id="sample-heading">' . esc_html__( 'From', 'boo' ) . ' <strong>31 €/' . esc_html__( 'day', 'boo' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
									<h2 class="has-white-color has-text-color has-x-large-font-size" id="sample-heading">' . esc_html__( 'Product name', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-white-color has-text-color" style="font-size:18px">Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">' . esc_html__( 'Book it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"className":"is-style-boxshadow"} -->
									<div class="wp-block-group is-style-boxshadow"><!-- wp:image {"id":56,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}},"className":"is-style-no-margin"} -->
									<figure class="wp-block-image size-large is-style-no-margin" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-product-3.png' . '" alt="Boo Theme" class="wp-image-56"/></figure>
									<!-- /wp:image -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:paragraph {"textColor":"white","className":"is-style-no-margin","fontSize":"medium"} -->
									<p class="is-style-no-margin has-white-color has-text-color has-medium-font-size" id="sample-heading">' . esc_html__( 'From', 'boo' ) . ' <strong>31 €/' . esc_html__( 'day', 'boo' ) . '</strong></p>
									<!-- /wp:paragraph -->

									<!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
									<h2 class="has-white-color has-text-color has-x-large-font-size" id="sample-heading">' . esc_html__( 'Product name', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-white-color has-text-color" style="font-size:18px">Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">' . esc_html__( 'Book it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
