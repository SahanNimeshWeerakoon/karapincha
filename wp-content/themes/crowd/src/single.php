<?php
/**
 * The template for displaying all single posts
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Amplifyn WordPress Module
 * @subpackage  karapincha
 * @subpackage  Amplifyn
 * @since       2.0
 * @version     2.0
 */

get_header(); # Head
get_template_part( 'template-parts/blokk-header-a'); # Header
get_template_part( 'template-parts/page/content-single'); # Content Single
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot