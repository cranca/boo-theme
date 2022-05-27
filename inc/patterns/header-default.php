<?php
/**
 * Pattern: Header with site title and navigation
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Header with site title and navigation.', 'boo' ),
	'categories' => array( 'boo-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"30px","left":"40px"}}},"layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull" style="padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
									<div class="wp-block-group alignwide"><!-- wp:site-title {"className":"boo-link-site-title"} /-->

									<!-- wp:navigation {"layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase"}}} -->
									<!-- wp:page-list /-->
									<!-- /wp:navigation --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group -->',
);
