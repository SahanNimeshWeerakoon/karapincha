<?php

/**
 * Navigation Menus
 * 
 * @package   	Amplifyn WordPress Module
 * @subpackage 	karapincha
 * @since   	2.0
 * @version   	2.0
 * @author    	Kasun Harshana <@skyyalone>
 * @copyright 	Copyright (c) 2017, Amplifyn (pvt) Ltd.
 * @link      	http://amplifyn.com/karapincha
 * @license   	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// This theme uses wp_nav_menu() in four locations.
register_nav_menus( array(
	'top'    => __( 'Top Menu', TEXTDOMAIN ),
	'sidebar'    => __( 'Sidebar', TEXTDOMAIN ),
	'footer-1'    => __( 'Footer 1', TEXTDOMAIN ),
	'footer-2'    => __( 'Footer 2', TEXTDOMAIN ),
) );