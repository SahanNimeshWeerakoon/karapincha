<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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