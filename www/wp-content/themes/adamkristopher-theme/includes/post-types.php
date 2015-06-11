<?php
/**
 * Custom Post Type: Portfolio
 */
function akc_portfolio() {
	$labels = array(
		'name'               => 'portfolio',
		'singular_name'      => 'portfolio',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New portfolio',
		'edit_item'          => 'Edit portfolio',
		'new_item'           => 'New portfolio',
		'all_items'          => 'All portfolio',
		'view_item'          => 'View portfolio',
		'search_items'       => 'Search portfolio',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'portfolio', $args );
}
add_action( 'init', 'akc_portfolio' );