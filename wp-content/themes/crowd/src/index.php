<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
get_template_part( 'template-parts/our-mantra'); # Our Mantra
get_template_part( 'template-parts/our-startups'); # Our Startups
get_template_part( 'template-parts/success-stories'); # Success Stories
get_template_part( 'template-parts/news-block'); # News Block
get_template_part( 'template-parts/feature-blocks'); # Feature Blocks
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot
?>