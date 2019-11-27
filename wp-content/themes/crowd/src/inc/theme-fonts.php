<?php
/**
 * Enqueue fonts
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

/**
 * Register custom fonts.
 */
function google_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Oswald, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'off', 'Oswald font: on or off', 'google' ) ) {
		$fonts[] = 'Oswald:400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Montserrat, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'google' ) ) {
		$fonts[] = 'Montserrat:300,400,500,600,700';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
  
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function(){
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'google-fonts', google_fonts_url(), array(), null );
});