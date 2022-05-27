<?php
/**
 * Pattern: Four pricing cards with list and buttons
 *
 * @package Boo Theme
 * @since 0.0.1
 */

return array(
	'title'      => __( 'Four pricing cards with list and buttons', 'boo' ),
	'categories' => array( 'boo-pricing' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
									<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","fontSize":"max-36"} -->
									<h2 class="has-text-align-center has-max-36-font-size" id="pricing-options">' . esc_html__( 'Pricing options', 'boo' ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center"} -->
									<p class="has-text-align-center">' . esc_html__( 'Create a four-column layout showing prices.', 'boo' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"has-smaller-left-margin"} -->
									<div class="wp-block-columns alignwide has-smaller-left-margin" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"primary","className":"has-black-border"} -->
									<div class="wp-block-group has-black-border has-border-color has-primary-border-color" style="border-radius:5px;border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"primary","textColor":"white"} -->
									<h4 class="has-text-align-center has-white-color has-primary-background-color has-text-color has-background" id="personal-95" style="margin-bottom:0px">Personal - $95</h4>
									<!-- /wp:heading -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
									<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"textColor":"primary","className":"pricing-table","fontSize":"small"} -->
									<ul class="pricing-table has-primary-color has-text-color has-small-font-size"><li><strong>Feature #1</strong></li><li><strong>Feature #2</strong></li><li><strong>Feature #3</strong></li><li><strong>Feature #4</strong></li><li><strong>Feature #5</strong></li></ul>
									<!-- /wp:list -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"primary","className":"has-black-border"} -->
									<div class="wp-block-group has-black-border has-border-color has-primary-border-color" style="border-radius:5px;border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"primary","textColor":"white"} -->
									<h4 class="has-text-align-center has-white-color has-primary-background-color has-text-color has-background" id="professional-295" style="margin-bottom:0px">Pro - $295</h4>
									<!-- /wp:heading -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
									<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"textColor":"primary","className":"pricing-table","fontSize":"small"} -->
									<ul class="pricing-table has-primary-color has-text-color has-small-font-size"><li><strong>Feature #1</strong></li><li><strong>Feature #2</strong></li><li><strong>Feature #3</strong></li><li><strong>Feature #4</strong></li><li><strong>Feature #5</strong></li></ul>
									<!-- /wp:list -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"primary","className":"has-black-border"} -->
									<div class="wp-block-group has-black-border has-border-color has-primary-border-color" style="border-radius:5px;border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"primary","textColor":"white"} -->
									<h4 class="has-text-align-center has-white-color has-primary-background-color has-text-color has-background" id="enterprise-495" style="margin-bottom:0px">Enterprise - $495</h4>
									<!-- /wp:heading -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
									<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"textColor":"primary","className":"pricing-table","fontSize":"small"} -->
									<ul class="pricing-table has-primary-color has-text-color has-small-font-size"><li><strong>Feature #1</strong></li><li><strong>Feature #2</strong></li><li><strong>Feature #3</strong></li><li><strong>Feature #4</strong></li><li><strong>Feature #5</strong></li></ul>
									<!-- /wp:list -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid","radius":"5px"}},"borderColor":"primary","className":"has-black-border"} -->
									<div class="wp-block-group has-black-border has-border-color has-primary-border-color" style="border-radius:5px;border-style:solid;border-width:1px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0px"}}},"backgroundColor":"primary","textColor":"white"} -->
									<h4 class="has-text-align-center has-white-color has-primary-background-color has-text-color has-background" id="ultimate-995" style="margin-bottom:0px">Ultimate - $995</h4>
									<!-- /wp:heading -->

									<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"40px","left":"40px"}}}} -->
									<div class="wp-block-group" style="padding-top:30px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:list {"textColor":"primary","className":"pricing-table","fontSize":"small"} -->
									<ul class="pricing-table has-primary-color has-text-color has-small-font-size"><li><strong>Feature #1</strong></li><li><strong>Feature #2</strong></li><li><strong>Feature #3</strong></li><li><strong>Feature #4</strong></li><li><strong>Feature #5</strong></li></ul>
									<!-- /wp:list -->

									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
									<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":"50px"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link" style="border-radius:50px">' . esc_html__( 'Get it', 'boo' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:group --></div>
									<!-- /wp:group --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:spacer {"height":70} -->
									<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div>
									<!-- /wp:group -->

									<!-- wp:paragraph -->
									<p></p>
									<!-- /wp:paragraph -->',
);
