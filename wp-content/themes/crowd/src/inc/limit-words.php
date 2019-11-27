<?php
/**
 * Limit Words
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

// strip tags to avoid breaking any html

function limit_words($string, $word_count){
	$string = strip_tags($string);

	if (strlen($string) > $word_count) {

	    // truncate string
	    $stringCut = substr($string, 0, $word_count);

	    // make sure it ends in a word so assassinate doesn't become ass...
	    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
	}

	return $string;
}