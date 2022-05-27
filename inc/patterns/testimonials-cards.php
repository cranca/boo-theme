<?php
/**
 * Pattern: Testominials with text and avatar in a card
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Testominials with text and avatar in a card.', 'boo' ),
	'categories' => array( 'boo-testimonials' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"10px","left":"30px"}},"border":{"radius":"5px"}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:30px;padding-right:30px;padding-bottom:10px;padding-left:30px"><!-- wp:image {"align":"center","width":70,"height":70} -->
									<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder-white.png' . '" alt="Boo Theme" width="70" height="70"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-text-align-center has-white-color has-text-color" style="font-size:18px">Lorem ipsum sit amet, consectetur a adipiscing. Nulla vitae lorem a neque imperdiet sagittis vivamus enim velit.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"small"} -->
									<p class="has-text-align-center has-white-color has-text-color has-small-font-size"><strong><strong><strong>—Hector Asencio, WordPress Developer</strong></strong></strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"10px","left":"30px"}},"border":{"radius":"5px"}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:30px;padding-right:30px;padding-bottom:10px;padding-left:30px"><!-- wp:image {"align":"center","width":70,"height":70} -->
									<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder-white.png' . '" alt="Boo Theme" width="70" height="70"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-text-align-center has-white-color has-text-color" style="font-size:18px">Fusce at est sapien. Aliquam tempus nulla nisipt rhoncus, morbi et convallis magna rhoncus morbi viverra ante.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"small"} -->
									<p class="has-text-align-center has-white-color has-text-color has-small-font-size"><strong><strong>—Juan Gil, Lead Programer and CEO</strong></strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"10px","left":"30px"}},"border":{"radius":"5px"}},"backgroundColor":"primary"} -->
									<div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:30px;padding-right:30px;padding-bottom:10px;padding-left:30px"><!-- wp:image {"align":"center","width":70,"height":70} -->
									<div class="wp-block-image"><figure class="aligncenter is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder-white.png' . '" alt="Boo Theme" width="70" height="70"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}},"textColor":"white"} -->
									<p class="has-text-align-center has-white-color has-text-color" style="font-size:18px">Quisque ullamcorp nulla elementum, atipo consectetur iaculis vestibulum et faucibus vitae milano pellentesque.</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"small"} -->
									<p class="has-text-align-center has-white-color has-text-color has-small-font-size"><strong><strong>—Marc Padiñas, Programer</strong></strong></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
