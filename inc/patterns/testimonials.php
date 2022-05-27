<?php
/**
 * Pattern: Testominials with text and avatar
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Testimonials with text and avatar.', 'boo' ),
	'categories' => array( 'boo-testimonials' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"width":70,"height":70} -->
									<figure class="wp-block-image is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder.png' . '" alt="Boo Theme" width="70" height="70"/></figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
									<p style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis. Vivamus enim velit.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size"><strong>—Hector Asencio, WordPress Developer</strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"width":70,"height":70} -->
									<figure class="wp-block-image is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder.png' . '" alt="Boo Theme" width="70" height="70"/></figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
									<p style="font-size:18px">Fusce at est sapien. Aliquam tempus et nulla nisipt rhoncus, morbi convallis magna swift. Morbi viverra lobortis ante, volutpat ipsum.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size"><strong>—Juan Gil, Lead Programer and CEO</strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:image {"width":70,"height":70} -->
									<figure class="wp-block-image is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder.png' . '" alt="Boo Theme" width="70" height="70"/></figure>
									<!-- /wp:image -->

									<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
									<p style="font-size:18px">Quisque ullamcorper nulla breu elementum, atipo consectetur ex iaculis quis. Vestibulum et faucibus. Quisque vitae mi pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size"><strong>—Marc Padiñas, Programer</strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":40} -->
									<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
