<?php
// Register Custom Post Types
require_once STYLESHEETPATH . '/includes/post-types.php';

// Register Advanced Custom Fields
require_once STYLESHEETPATH . '/includes/acf.php';

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function akc_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'akc-grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'akc-main', get_stylesheet_directory_uri() . '/style.css' );

	// Theme JS
	wp_enqueue_script( 'akc-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'akc_enqueue_scripts' );

/**
 * Add an acf options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * Add post thumbnail support
 */
add_theme_support( 'post-thumbnails' );

/**
 * Set up our theme features and register sidebars
 *
 * @action after_setup_theme
 *
 * @return void
 */
function akc_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

	// Sidebar area
	register_sidebar(
		array(
			'name'          => 'AKC Widgets',
			'id'            => 'akc_widgets',
			'description'   => 'Displays widgets on blog',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'akc_after_setup_theme' );

// Add Jetpack share buttons above post
remove_filter( 'the_content', 'sharing_display', 19 );
remove_filter( 'the_excerpt', 'sharing_display', 19 );

/**
 * Add Jetpack Sharing buttons above the content
 *
 * @add_filter the_content
 * @add_filter the_excerpt
 *
 * @return void
 */
function akc_share_buttons_above_post( $content = '' ) {

	if ( function_exists( 'sharing_display' ) ) {

		return sharing_display() . $content;

	} else {

		return $content;
	}
}
add_filter( 'the_content', 'akc_share_buttons_above_post', 19 );
add_filter( 'the_excerpt', 'akc_share_buttons_above_post', 19 );
