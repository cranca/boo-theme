<?php
/**
 * Pattern: Header with site title, navigation and buttons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Header with site title, navigation and buttons.', 'boo' ),
	'categories' => array( 'boo-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"30px","left":"40px"}}},"layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull" style="padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
									<div class="wp-block-group alignwide"><!-- wp:site-title {"className":"boo-link-site-title"} /-->

									<!-- wp:navigation {"ref":168,"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"},"style":{"typography":{"textTransform":"uppercase"}}} /-->

									<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
									<div class="wp-block-group alignwide"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#326E44","className":"is-style-logos-only"} -->
									<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

									<!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->

									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column {"width":"10px"} -->
									<div class="wp-block-column" style="flex-basis:10px"></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"20px","right":"20px"}}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="padding-top:3px;padding-right:20px;padding-bottom:3px;padding-left:20px">' . esc_html__( 'Get it now', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group -->',
);
