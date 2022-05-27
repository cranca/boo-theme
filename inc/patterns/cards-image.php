<?php
/**
 * Pattern: Featured product with image
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Image cards in three columns.', 'boo' ),
	'categories' => array( 'boo-cards' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"radius":"8px"}},"borderColor":"primary","className":"is-style-default"} -->
									<div class="wp-block-group is-style-default has-border-color has-primary-border-color" style="border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '","id":74,"dimRatio":50,"focalPoint":{"x":"0.49","y":"0.49"},"minHeight":350,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}},"color":{}}} -->
									<div class="wp-block-cover is-light" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '" style="object-position:49% 49%" data-object-fit="cover" data-object-position="49% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"white","fontSize":"x-large"} -->
									<p class="has-text-align-left has-white-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800">Default card heading</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"textColor":"white"} -->
									<p class="has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">More info</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"radius":"8px"}},"borderColor":"primary","className":"is-style-default"} -->
									<div class="wp-block-group is-style-default has-border-color has-primary-border-color" style="border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '","id":74,"dimRatio":50,"focalPoint":{"x":"0.49","y":"0.49"},"minHeight":350,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}},"color":{}}} -->
									<div class="wp-block-cover is-light" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '" style="object-position:49% 49%" data-object-fit="cover" data-object-position="49% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"white","fontSize":"x-large"} -->
									<p class="has-text-align-left has-white-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800">Default card heading</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"textColor":"white"} -->
									<p class="has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">More info</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"radius":"8px"}},"borderColor":"primary","className":"is-style-default"} -->
									<div class="wp-block-group is-style-default has-border-color has-primary-border-color" style="border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '","id":74,"dimRatio":50,"focalPoint":{"x":"0.49","y":"0.49"},"minHeight":350,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}},"color":{}}} -->
									<div class="wp-block-cover is-light" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '" style="object-position:49% 49%" data-object-fit="cover" data-object-position="49% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"white","fontSize":"x-large"} -->
									<p class="has-text-align-left has-white-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800">Default card heading</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"textColor":"white"} -->
									<p class="has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-white"} -->
									<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link">More info</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->',
);
