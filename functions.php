<?php
/**
 * Functions of the theme
 *
 * @package Boo Theme
 * @since 0.0.1
 */

/**
  * Boo setup
  *
  * @since 0.0.1
  */

if ( ! function_exists( 'boo_setup' ) ) {
 function boo_setup() {
  // Make theme available for translation
  load_theme_textdomain( 'boo', get_template_directory() . '/languages' );

  add_theme_support( 'align-wide' );

  // Add support for Block Styles
  add_theme_support( 'wp-block-styles' );

  // Add support for editor styles.
  add_theme_support( 'editor-styles' );

  // Enqueue editor styles and fonts
  add_editor_style( array(
    './style-editor.css',
    boo_fonts_url()
  ) );

  // Disable loading core block inline styles
  add_filter( 'should_load_separate_core_block_assets', '__return_false' );

  // Remove core block patterns
  remove_theme_support( 'core-block-patterns' );
 }
}
add_action( 'after_setup_theme', 'boo_setup' );


/**
 * Enqueue styles
 *
 * @since 0.0.1
 */
function boo_styles() {
	wp_enqueue_style(
		'style',
		get_stylesheet_uri(),
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'boo_styles' );


/**
 * Enqueue fonts
 *
 * @since 0.0.1
 */
add_action( 'wp_enqueue_scripts', 'boo_enqueue_fonts' );
function boo_enqueue_fonts() {
	wp_enqueue_style(
    'boo-fonts',
    boo_fonts_url(),
    array(), null
  );
}


/**
 * Define fonts
 *
 * @since 0.0.1
 */
function boo_fonts_url() {

	// Allow child themes to disable fonts
	$dequeue_fonts = apply_filters( 'boo_dequeue_fonts', false );
	if ( $dequeue_fonts ) {
		return '';
	}

  // Request for all Google Fonts
	$fonts = [ 'family=Poppins:wght@100;200;300;400;500;600;700;800;900' ];
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}


/**
 * Registers block patterns, categories, and type
 *
 * @since Boo 0.0.1
 */
function boo_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'boo', array( 'label' => __( 'Boo', 'boo' ) ) );
	}

	$block_pattern_categories = array(
		'boo-banner' => array(
			'label' => __( 'Banners', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-cards' => array(
			'label' => __( 'Content Cards', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-footer' => array(
			'label' => __( 'Footer', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-header' => array(
			'label' => __( 'Header', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-hero' => array(
			'label' => __( 'Hero Sections', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
    'boo-section' => array(
			'label' => __( 'Content Sections', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-products' => array(
			'label' => __( 'Products', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-pricing' => array(
			'label' => __( 'Pricing Cards', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-members' => array(
			'label' => __( 'Members', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
		'boo-testimonials' => array(
			'label' => __( 'Testimonials', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
    'boo-pages' => array(
			'label' => __( 'Pages', 'boo' ),
			'categoryTypes' => array( 'boo' ),
		),
);


/**
 * Filters the theme block pattern categories
 *
 * @since Boo 0.0.1
 */
$block_pattern_categories = apply_filters( 'boo_block_pattern_categories', $block_pattern_categories );

foreach ( $block_pattern_categories as $name => $properties ) {
	register_block_pattern_category( $name, $properties );
}

$block_patterns = array(
  'header-default',
  'header-buttons',
  'footer-default',
	'footer-complete',
	'footer-one-column',
	'footer-three-columns',
	'hero-light',
	'hero-image',
  'banner-light',
	'banner-stacked',
  'banner-background',
  'banner-stacked-background',
  'cards-content-light',
	'cards-content',
	'cards-image',
  'cards-products',
  'section-header',
  'section-text-columns',
  'section-text-list',
  'section-image-list',
  'section-image-columns',
  'section-blog-columns',
  'section-featured',
  'product-featured',
	'product-featured-four-columns',
  'product-gallery',
	'pricing-cards-three-columns',
	'pricing-cards-four-columns',
	'testimonials',
	'testimonials-cards',
);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Boo 0.8.0
	 */
	$block_patterns = apply_filters( 'boo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'boo/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}
}
add_action( 'init', 'boo_register_block_patterns', 9 );


/**
 * Block variations
 *
 * @since Boo 0.8.0
 */

// Buttons styles
register_block_style(
	'core/button',
	array(
		'name'  => 'fill-white',
		'label' => __( 'Fill White', 'boo' ),
	)
);

register_block_style(
	'core/button',
	array(
		'name'  => 'outline-white',
		'label' => __( 'Outline White', 'boo' ),
	)
);

// Group styles
register_block_style(
	'core/group',
	array(
		'name'  => 'boxshadow',
		'label' => __( 'Boxshadow', 'boo' ),
	)
);
register_block_style(
	'core/group',
	array(
		'name'  => 'full-height',
		'label' => __( 'Full-height', 'boo' ),
	)
);

// Image
register_block_style(
	'core/image',
	array(
		'name'  => 'boxshadow',
		'label' => __( 'Boxshadow', 'boo' ),
	)
);
register_block_style(
	'core/image',
	array(
		'name'  => 'no-margin',
		'label' => __( 'No Margin', 'boo' ),
	)
);

// Navigation links styles
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'fill',
		'label' => __( 'Fill', 'boo' ),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'outline',
		'label' => __( 'Outline', 'boo' ),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'fill-white',
		'label' => __( 'Fill White', 'boo' ),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'outline-white',
		'label' => __( 'Outline White', 'boo' ),
	)
);

// Paragraph styles
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'no-margin',
		'label' => __( 'No Margin', 'boo' ),
	)
);
