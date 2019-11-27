<?php
/**
 * Template Name: About Us Page
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
// get_template_part( 'template-parts/about-us-description'); # About us description
get_template_part( 'template-parts/about-us-content-blocks'); # About us content blocks
get_template_part( 'template-parts/our-team'); # Our Team
get_template_part( 'template-parts/our-startups'); # Our Startups
get_template_part( 'template-parts/feature-blocks'); # Feature Blocks
get_template_part( 'template-parts/blokk-our-partners-a'); # Our Partners
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot
?>