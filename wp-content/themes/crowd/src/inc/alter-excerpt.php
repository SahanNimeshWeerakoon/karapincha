<?php
/**
 * Alter Excerpt
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

add_filter( 'gettext', 'getexcerpt', 10, 2 );
function getexcerpt( $translation, $original )
{
    if ( 'Excerpt' == $original ) {
        return 'Summary';
    }else{
        $pos = strpos($original, 'Excerpts are optional hand-crafted summaries of your');
        if ($pos !== false) {
            return  '<i class="fa fa-info-circle"></i> Word limit is 90 Characters.';
        }
    }
    return $translation;
}