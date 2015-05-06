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
function jsix_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'jsix-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'jsix-social', get_stylesheet_directory_uri() . '/ss_icon_fonts/ss-social.css' );
	wp_enqueue_style( 'flexslider' , get_template_directory_uri() . '/css/flexslider.css');


	// Theme JS
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '' , true);
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.mousewheel.js', array('jquery'), '' , true);
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '' , true);
	wp_enqueue_script( 'jsix-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'jsix_enqueue_scripts' );

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
function jsix_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

	// Sidebar area
	register_sidebar(
		array(
			'name'          => 'Jsix Widgets',
			'id'            => 'jsix_widgets',
			'description'   => 'Displays widgets on blog',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'jsix_after_setup_theme' );





