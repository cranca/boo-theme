<?php
/**
 * Pattern: Footer with copyright and social icons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Footer with text, button, links.', 'boo' ),
	'categories' => array( 'boo-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"50px"}}},"layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:50px"><!-- wp:separator {"customColor":"#dfdfdf","align":"full","className":"is-style-wide"} -->
									<!-- /wp:separator -->
									
									<!-- wp:columns {"style":{"spacing":{"margin":{"top":"100px","bottom":"0px"}}}} -->
									<div class="wp-block-columns" style="margin-top:100px;margin-bottom:0px"><!-- wp:column {"width":"20%"} -->
									<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4} -->
									<h4 id="services">Services</h4>
									<!-- /wp:heading -->

									<!-- wp:list {"className":"boo-list-menu","fontSize":"small"} -->
									<ul class="boo-list-menu has-small-font-size"><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Web Design</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Development</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Copywriting</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Marketing</a></li></ul>
									<!-- /wp:list --></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":"20%"} -->
									<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4} -->
									<h4 id="legal">Legal</h4>
									<!-- /wp:heading -->

									<!-- wp:list {"className":"boo-list-menu","fontSize":"small"} -->
									<ul class="boo-list-menu has-small-font-size"><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Terms and conditions</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Legal warnig</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Privacy policy</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Cookies policy</a></li></ul>
									<!-- /wp:list --></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":"20%"} -->
									<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4} -->
									<h4 id="contact">Contact</h4>
									<!-- /wp:heading -->

									<!-- wp:list {"className":"boo-list-menu","fontSize":"small"} -->
									<ul class="boo-list-menu has-small-font-size"><li><a href="#">Facebook</a></li><li><a href="#">Instagram</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Twitter</a></li><li><a style="font-family: var(--font-family-primary);font-size: var(--font-size-regular);font-weight: var(--font-weight-regular)" href="#">Contact us</a></li></ul>
									<!-- /wp:list --></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":"30%"} -->
									<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"className":"is-style-no-margin","fontSize":"large"} -->
									<p class="is-style-no-margin has-large-font-size" style="font-style:normal;font-weight:800">' . esc_html__( 'Your brand', 'boo' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p>Est ei erat mucius quaeque. Ei his quas phaedrum, efficiantur mediocritatem.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}},"className":"is-style-no-margin"} -->
									<p class="is-style-no-margin" style="font-size:12px">contact@somemail.com<br>+00 000 00 00 00<br>000 Some Street, Somecity</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div>
									<!-- /wp:group -->',
);
