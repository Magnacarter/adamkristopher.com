<?php
/**
 * Custom Post Type: Services
 */
function jsix_services() {
	$labels = array(
		'name'               => 'Services',
		'singular_name'      => 'Services',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Services',
		'edit_item'          => 'Edit Services',
		'new_item'           => 'New Services',
		'all_items'          => 'All Services',
		'view_item'          => 'View Services',
		'search_items'       => 'Search Services',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Services',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

register_post_type( 'Services', $args );
}
add_action( 'init', 'jsix_services' );