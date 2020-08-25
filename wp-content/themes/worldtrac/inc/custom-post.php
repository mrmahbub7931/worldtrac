<?php
/**
 * worldtrac custom post type
 *
 * @package worldtrac
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function worldtrac_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Queries', 'Query General Name', 'worldtrac' ),
		'singular_name'         => _x( 'Query', 'Query Singular Name', 'worldtrac' ),
        'menu_name'             => __( 'Queries', 'worldtrac' ),
		'name_admin_bar'        => __( 'Query', 'worldtrac' ),
		'archives'              => __( 'Item Archives', 'worldtrac' ),
		'attributes'            => __( 'Item Attributes', 'worldtrac' ),
		'parent_item_colon'     => __( 'Parent Item:', 'worldtrac' ),
		'all_items'             => __( 'All Items', 'worldtrac' ),
		'add_new_item'          => __( 'Add New Item', 'worldtrac' ),
		'add_new'               => __( 'Add New', 'worldtrac' ),
		'new_item'              => __( 'New Item', 'worldtrac' ),
		'edit_item'             => __( 'Edit Item', 'worldtrac' ),
		'update_item'           => __( 'Update Item', 'worldtrac' ),
		'view_item'             => __( 'View Item', 'worldtrac' ),
		'view_items'            => __( 'View Items', 'worldtrac' ),
		'search_items'          => __( 'Search Item', 'worldtrac' ),
		'not_found'             => __( 'Not found', 'worldtrac' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'worldtrac' ),
		'featured_image'        => __( 'Featured Image', 'worldtrac' ),
		'set_featured_image'    => __( 'Set featured image', 'worldtrac' ),
		'remove_featured_image' => __( 'Remove featured image', 'worldtrac' ),
		'use_featured_image'    => __( 'Use as featured image', 'worldtrac' ),
		'insert_into_item'      => __( 'Insert into item', 'worldtrac' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'worldtrac' ),
		'items_list'            => __( 'Items list', 'worldtrac' ),
		'items_list_navigation' => __( 'Items list navigation', 'worldtrac' ),
		'filter_items_list'     => __( 'Filter items list', 'worldtrac' ),
	);
	$args = array(
		'label'                 => __( 'Query', 'worldtrac' ),
		'description'           => __( 'Query Description', 'worldtrac' ),
		'labels'                => $labels,
		'supports'              => false,
        'taxonomies'            => array( 'category', 'post_tag' ),
        'menu_icon'             => 'dashicons-format-status',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'query', $args );

}


// Register Custom Taxonomy
// function worldtrac_custom_taxonomy() {

// 	$labels = array(
// 		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'worldtrac' ),
// 		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'worldtrac' ),
// 		'menu_name'                  => __( 'Taxonomy', 'worldtrac' ),
// 		'all_items'                  => __( 'All Items', 'worldtrac' ),
// 		'parent_item'                => __( 'Parent Item', 'worldtrac' ),
// 		'parent_item_colon'          => __( 'Parent Item:', 'worldtrac' ),
// 		'new_item_name'              => __( 'New Item Name', 'worldtrac' ),
// 		'add_new_item'               => __( 'Add New Item', 'worldtrac' ),
// 		'edit_item'                  => __( 'Edit Item', 'worldtrac' ),
// 		'update_item'                => __( 'Update Item', 'worldtrac' ),
// 		'view_item'                  => __( 'View Item', 'worldtrac' ),
// 		'separate_items_with_commas' => __( 'Separate items with commas', 'worldtrac' ),
// 		'add_or_remove_items'        => __( 'Add or remove items', 'worldtrac' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'worldtrac' ),
// 		'popular_items'              => __( 'Popular Items', 'worldtrac' ),
// 		'search_items'               => __( 'Search Items', 'worldtrac' ),
// 		'not_found'                  => __( 'Not Found', 'worldtrac' ),
// 		'no_terms'                   => __( 'No items', 'worldtrac' ),
// 		'items_list'                 => __( 'Items list', 'worldtrac' ),
// 		'items_list_navigation'      => __( 'Items list navigation', 'worldtrac' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'query_taxonomy', array( 'query' ), $args );

// }

// action hook
add_action( 'init', 'worldtrac_custom_post_type', 0 );
// add_action( 'init', 'worldtrac_custom_taxonomy', 0 );