<?php
/**
 * Pattern: Section with header, description and three text columns
 *
 * @package Boo Theme
 * @since 0.0.1
 */


return array(
	'title'      => __( 'Section with header, description and three text columns.', 'boo' ),
	'categories' => array( 'boo-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"70px"}}},"backgroundColor":"white","className":"is-style-default","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull is-style-default has-white-background-color has-background" style="padding-top:100px;padding-bottom:70px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"max-36"} -->
									<h2 class="has-text-align-center has-max-36-font-size" id="section-blog" style="font-style:normal;font-weight:800">Section blog</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
									<p class="has-text-align-center has-medium-font-size">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
									<!-- /wp:paragraph -->

									<!-- wp:separator -->
									<hr class="wp-block-separator"/>
									<!-- /wp:separator -->

									<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
									<div class="wp-block-query alignwide"><!-- wp:post-template -->
									<!-- wp:post-featured-image /-->

									<!-- wp:post-date /-->

									<!-- wp:post-title /-->
									<!-- /wp:post-template -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
									<!-- wp:query-pagination-previous /-->

									<!-- wp:query-pagination-numbers /-->

									<!-- wp:query-pagination-next /-->
									<!-- /wp:query-pagination --></div>
									<!-- /wp:query --></div>
									<!-- /wp:group -->',
);
