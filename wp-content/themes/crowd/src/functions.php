<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
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

# Karapincha Module only works in WordPress 4.7 or later.
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	echo "This theme requires WordPress 4.7 or Later. Please upgrade your WordPress installation";
	return;
}

# load the karapincha class
require_once( get_template_directory() . '/framework.php' );

# theme setup
if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {
		load_theme_textdomain( TEXTDOMAIN, get_template_directory() . '/languages' );
		// add_editor_style( array( 'css/editor-style.css', google_fonts_url() ) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

# get theme data
$theme_data = wp_get_theme();

# initialize the karapincha framework
Karapincha::init(array(
	'theme_name' => $theme_data->name,
	'theme_version' => $theme_data->version
));