<?php
/**
 * Enqueue scripts
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

add_action( 'wp_enqueue_scripts', function (){
    /**
     * Build an array of scripts to enqueue
     * key = script handle
     * value = path to the script without the get_template_directory_uri()
     */

    $scripts = array(
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'bootstrap',
	        'src' 		=> THEME_VENDORS_URI . '/bootstrap/dist/js/bootstrap.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '3.3.7',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> false,
	        'handle' 	=> 'owl',
	        'src' 		=> THEME_VENDORS_URI . '/owlcarousel2/dist/owl.carousel.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '2.2.1',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'slick',
	        'src' 		=> THEME_VENDORS_URI . '/slick/slick/slick.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '2.2.1',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'parallax',
	        'src' 		=> THEME_VENDORS_URI . '/parallax.js/parallax.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.5.0',
	        'in_footer' => false
	    ),
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'countup',
	        'src' 		=> THEME_VENDORS_URI . '/countUp.js/dist/countUp.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.9.3',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> false,
	        'handle' 	=> 'waypoints',
	        'src' 		=> THEME_VENDORS_URI . '/waypoints/lib/jquery.waypoints.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '4.0.1',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> false,
	        'handle' 	=> 'mdl',
	        'src' 		=> THEME_VENDORS_URI . '/material-design-lite/material.min.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.3.0',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'main',
	        'src' 		=> THEME_JS_URI . '/app.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
	    ),
    	array(
	        'active' 	=> true,
	        'handle' 	=> 'startupSlider',
	        'src' 		=> THEME_JS_URI . '/ourstartups.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
		),
		array(
	        'active' 	=> true,
	        'handle' 	=> 'successStories',
	        'src' 		=> THEME_JS_URI . '/successstories.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
		),
		array(
	        'active' 	=> false,
	        'handle' 	=> 'caseStudies',
	        'src' 		=> THEME_JS_URI . '/casestudies.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
		),
		array(
	        'active' 	=> true,
	        'handle' 	=> 'startupsform',
	        'src' 		=> THEME_JS_URI . '/startupsform.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
		),
		array(
	        'active' 	=> true,
	        'handle' 	=> 'investorsform',
	        'src' 		=> THEME_JS_URI . '/investorsform.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
		),
		array(
	        'active' 	=> false,
	        'handle' 	=> 'navigationMenu',
	        'src' 		=> THEME_JS_URI . '/overlay.js',
	        'deps' 		=> array('jquery'),
	        'ver' 		=> '1.0.0',
	        'in_footer' => true
	    ),
	);

    # Looping trough all the scripts and enqueue
    foreach ( $scripts as $key => $value ) {
    	extract($value);
    	if ($active) {
    		wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
    	}
    }
}, 11 );

/**
 *
 * De-registering WP Default Embed JS
 *
 */

add_action( 'wp_footer', function(){
	wp_deregister_script( 'wp-embed' );
});