<?php

/**
 * News
 * 
 * @package   Karapincha > Custom post types
 * @version   2.0
 * @author    Kasun Harshana <hello@harshana.co>
 * @copyright Copyright (c) 2017, Kasun Harshana
 * @link      http://harshana.co/karapincha
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/*==========================================
=            Register Post Type            =
==========================================*/

add_action( 'init', 'custom_news_post_init' );

function custom_news_post_init() {
	$labels = array(
		'name'               => _x( 'News', 'post type general name', TEXTDOMAIN ),
		'singular_name'      => _x( 'News', 'post type singular name', TEXTDOMAIN ),
		'menu_name'          => _x( 'News', 'admin menu', TEXTDOMAIN ),
		'name_admin_bar'     => _x( 'News', 'add new on admin bar', TEXTDOMAIN ),
		'add_new'            => _x( 'Add New', 'News', TEXTDOMAIN ),
		'add_new_item'       => __( 'Add New News', TEXTDOMAIN ),
		'new_item'           => __( 'New News', TEXTDOMAIN ),
		'edit_item'          => __( 'Edit News', TEXTDOMAIN ),
		'view_item'          => __( 'View News', TEXTDOMAIN ),
		'all_items'          => __( 'All News', TEXTDOMAIN ),
		'search_items'       => __( 'Search News', TEXTDOMAIN ),
		'parent_item_colon'  => __( 'Parent News:', TEXTDOMAIN ),
		'not_found'          => __( 'No News found.', TEXTDOMAIN ),
		'not_found_in_trash' => __( 'No News found in Trash.', TEXTDOMAIN )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', TEXTDOMAIN ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-clipboard',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'		 => array('category', 'tag' ),
		'supports'           => array( 
			'title', 
			'thumbnail', 
			'editor', 
			# 'author', 
			'excerpt', 
			'comments',
			'post-formats'
		)
	);

	// register_post_type( 'news', $args );

	// flush_rewrite_rules();
}

/*=====  End of Register Post Type  ======*/
