<?php

/**
 * Registers the `movie` post type.
 */
function movie_init()
{
	register_post_type(
		'movie',
		[
			'labels' => [
				'name' => __('Movies', 'langate'),
				'singular_name' => __('Movie', 'langate'),
				'all_items' => __('All Movies', 'langate'),
				'archives' => __('Movie Archives', 'langate'),
				'attributes' => __('Movie Attributes', 'langate'),
				'insert_into_item' => __('Insert into Movie', 'langate'),
				'uploaded_to_this_item' => __('Uploaded to this Movie', 'langate'),
				'featured_image' => _x('Featured Image', 'movie', 'langate'),
				'set_featured_image' => _x('Set featured image', 'movie', 'langate'),
				'remove_featured_image' => _x('Remove featured image', 'movie', 'langate'),
				'use_featured_image' => _x('Use as featured image', 'movie', 'langate'),
				'filter_items_list' => __('Filter Movies list', 'langate'),
				'items_list_navigation' => __('Movies list navigation', 'langate'),
				'items_list' => __('Movies list', 'langate'),
				'new_item' => __('New Movie', 'langate'),
				'add_new' => __('Add New', 'langate'),
				'add_new_item' => __('Add New Movie', 'langate'),
				'edit_item' => __('Edit Movie', 'langate'),
				'view_item' => __('View Movie', 'langate'),
				'view_items' => __('View Movies', 'langate'),
				'search_items' => __('Search Movies', 'langate'),
				'not_found' => __('No Movies found', 'langate'),
				'not_found_in_trash' => __('No Movies found in trash', 'langate'),
				'parent_item_colon' => __('Parent Movie:', 'langate'),
				'menu_name' => __('Movies', 'langate'),
			],
			'public' => true,
			'hierarchical' => false,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'supports' => ['title', 'thumbnail', 'editor'],
			'has_archive' => true,
			'rewrite' => true,
			'query_var' => true,
			'menu_position' => null,
			'menu_icon' => 'dashicons-admin-post',
			'show_in_rest' => true,
			'rest_base' => 'movie',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		]
	);

}

add_action('init', 'movie_init');
