<?php

/**
 * Case Studies
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

add_action( 'init', 'custom_casestudies_post_init' );

function custom_casestudies_post_init() {
	$labels = array(
		'name'               => _x( 'Case Studies', 'post type general name', TEXTDOMAIN ),
		'singular_name'      => _x( 'Case Study', 'post type singular name', TEXTDOMAIN ),
		'menu_name'          => _x( 'Case Studies', 'admin menu', TEXTDOMAIN ),
		'name_admin_bar'     => _x( 'Case Studies', 'add new on admin bar', TEXTDOMAIN ),
		'add_new'            => _x( 'Add New', 'Case Study', TEXTDOMAIN ),
		'add_new_item'       => __( 'Add New Case Study', TEXTDOMAIN ),
		'new_item'           => __( 'New Case Study', TEXTDOMAIN ),
		'edit_item'          => __( 'Edit Case Study', TEXTDOMAIN ),
		'view_item'          => __( 'View Case Studies', TEXTDOMAIN ),
		'all_items'          => __( 'All Case Studies', TEXTDOMAIN ),
		'search_items'       => __( 'Search Case Studies', TEXTDOMAIN ),
		'parent_item_colon'  => __( 'Parent Case Studies:', TEXTDOMAIN ),
		'not_found'          => __( 'No Case Study found.', TEXTDOMAIN ),
		'not_found_in_trash' => __( 'No Case Study found in Trash.', TEXTDOMAIN )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', TEXTDOMAIN ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'case-studies' ),
		'capability_type'    => 'post',
		'menu_icon'           => 'dashicons-media-text',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'		  => array('category', 'tag' ),
		'supports'           => array( 
			'title', 
			# 'thumbnail', 
			'editor', 
			# 'author', 
			# 'excerpt', 
			# 'comments' 
		)
	);

	register_post_type( 'casestudies', $args );
	flush_rewrite_rules();
}

/*=====  End of Register Post Type  ======*/
