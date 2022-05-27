<?php
/**
 * Pattern: Hero section with image, text and two buttons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Hero section with image, text and two buttons.', 'boo' ),
	'categories' => array( 'boo-hero' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '","id":74,"dimRatio":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
									<div class="wp-block-cover alignfull is-light" style="padding-top:100px;padding-bottom:100px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="http://boo-theme.local/wp-content/themes/Boo%20Theme/assets/images/boo-image-background.jpeg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
									<div class="wp-block-columns alignwide"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"white","fontSize":"max-60"} -->
									<p class="has-text-align-center has-white-color has-text-color has-max-60-font-size" style="font-style:normal;font-weight:800">' . esc_html__( 'Really big heading', 'boo' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
									<p class="has-text-align-center has-white-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus eu pellentesque vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-fill-white"} -->
									<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get Started', 'boo' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Learn More', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div></div>
									<!-- /wp:cover --></div>
									<!-- /wp:group -->',
);
