<?php

/**
 * Campaigns
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

add_action( 'init', 'custom_campaigns_post_init' );

function custom_campaigns_post_init() {
	$labels = array(
		'name'               => _x( 'Campaigns', 'post type general name', TEXTDOMAIN ),
		'singular_name'      => _x( 'Campaign', 'post type singular name', TEXTDOMAIN ),
		'menu_name'          => _x( 'Campaigns', 'admin menu', TEXTDOMAIN ),
		'name_admin_bar'     => _x( 'Campaigns', 'add new on admin bar', TEXTDOMAIN ),
		'add_new'            => _x( 'Add New', 'Campaign', TEXTDOMAIN ),
		'add_new_item'       => __( 'Add New Campaign', TEXTDOMAIN ),
		'new_item'           => __( 'New Campaigns', TEXTDOMAIN ),
		'edit_item'          => __( 'Edit Campaigns', TEXTDOMAIN ),
		'view_item'          => __( 'View Campaigns', TEXTDOMAIN ),
		'all_items'          => __( 'All Campaigns', TEXTDOMAIN ),
		'search_items'       => __( 'Search Campaigns', TEXTDOMAIN ),
		'parent_item_colon'  => __( 'Parent Campaigns:', TEXTDOMAIN ),
		'not_found'          => __( 'No Campaigns found.', TEXTDOMAIN ),
		'not_found_in_trash' => __( 'No Campaigns found in Trash.', TEXTDOMAIN )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', TEXTDOMAIN ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'campaigns' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-lightbulb',
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
			'comments' 
		)
	);

	register_post_type( 'campaigns', $args );

	flush_rewrite_rules();
}

/*=====  End of Register Post Type  ======*/
