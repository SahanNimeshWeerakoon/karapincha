<?php
/**
 * Enqueue styles
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
     * Build an array of styles to enqueue
     * key = script handle
     * value = path to the script without the get_template_directory_uri()
     */

    $styles = array(
        array(
            'active'    => true,
            'handle'    => 'bootstrap',
            'src'       => THEME_VENDORS_URI . '/bootstrap/dist/css/bootstrap.min.css',
            'deps'      => array(),
            'ver'       => '3.3.7',
            'media'     => 'all'
        ),
        array(
            'active'    => false,
            'handle'    => 'owlcarousel',
            'src'       => THEME_VENDORS_URI . '/owlcarousel2/dist/assets/owl.carousel.min.css',
            'deps'      => array(),
            'ver'       => '4.7.0',
            'media'     => 'all'
        ),
        array(
            'active'    => true,
            'handle'    => 'slick',
            'src'       => THEME_VENDORS_URI . '/slick/slick/slick.css',
            'deps'      => array(),
            'ver'       => '1.8.1',
            'media'     => 'all'
        ),
        array(
            'active'    => true,
            'handle'    => 'mdl',
            'src'       => THEME_VENDORS_URI . '/material-design-lite/material.min.css',
            'deps'      => array(),
            'ver'       => '1.3.0',
            'media'     => 'all'
        ),
        array(
            'active'    => true,
            'handle'    => 'fontawesome',
            'src'       => THEME_VENDORS_URI . '/fontawesome/css/font-awesome.min.css',
            'deps'      => array(),
            'ver'       => '4.7.0',
            'media'     => 'all'
        ),
    );

    # Looping trough all the styles and enqueue
    foreach ( $styles as $key => $value ) {
        extract($value);
        if ($active) {
            wp_enqueue_style($handle, $src, $deps, $ver, $media);
        }
    }

    # Main stylesheet
    wp_enqueue_style( 'crowdisland', get_stylesheet_uri() );
});