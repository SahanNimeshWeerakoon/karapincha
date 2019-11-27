
<?php
/**
 * The template for displaying archive pages
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
get_template_part( 'template-parts/our-startups-loop'); # Our Startups loop
get_template_part( 'template-parts/success-stories'); # Success Stories
get_template_part( 'template-parts/feature-blocks'); # Feature Blocks
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot
?>