<?php
/**
 * MyTheme functions and definitions.
 *
 * @package mytheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function mytheme_setup() {
	load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 320,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'mytheme' ),
			'footer'  => __( 'Footer Menu', 'mytheme' ),
		)
	);
}
add_action( 'after_setup_theme', 'mytheme_setup' );

/**
 * Enqueue scripts and styles.
 */
function mytheme_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'mytheme-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	$main_css_path = get_template_directory() . '/assets/css/main.css';
	wp_enqueue_style(
		'mytheme-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'mytheme-style' ),
		file_exists( $main_css_path ) ? filemtime( $main_css_path ) : $theme_version
	);

	$main_js_path = get_template_directory() . '/assets/js/main.js';
	wp_enqueue_script(
		'mytheme-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		file_exists( $main_js_path ) ? filemtime( $main_js_path ) : $theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );

/**
 * Register widget areas.
 */
function mytheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'mytheme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'mytheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

