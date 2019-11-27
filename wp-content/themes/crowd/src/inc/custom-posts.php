<?php
/**
 * Custom Posts
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

# Include all the custom post functions
$files = glob(THEME_FUNCTIONS . '/custom-posts/*.php');

foreach ($files as $file) {
    require_once($file);   
}