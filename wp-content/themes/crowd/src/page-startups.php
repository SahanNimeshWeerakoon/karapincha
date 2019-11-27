<?php
/**
 * Template Name: Startups Page
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
get_template_part( 'template-parts/what-we-look-for-startups'); # What we look for (Startups)
get_template_part( 'template-parts/how-we-help'); # How we help
get_template_part( 'template-parts/startup-case-study'); # Startup Case Study
get_template_part( 'template-parts/start-raising'); # Start Raising
get_template_part( 'template-parts/blokk-our-partners-a'); # Our Partners
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot
?>