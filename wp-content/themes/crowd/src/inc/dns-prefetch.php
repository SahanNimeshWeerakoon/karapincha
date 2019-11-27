<?php
/**
 * DNS Prefetch
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

//* Adding DNS Prefetching
add_action('wp_head', function(){
	echo '<meta http-equiv="x-dns-prefetch-control" content="on">
		<link rel="dns-prefetch" href="//fonts.googleapis.com" />
		<link rel="dns-prefetch" href="//fonts.gstatic.com" />
		<link rel="dns-prefetch" href="//0.gravatar.com/" />
		<link rel="dns-prefetch" href="//2.gravatar.com/" />
		<link rel="dns-prefetch" href="//1.gravatar.com/" />

	';
}, 0);