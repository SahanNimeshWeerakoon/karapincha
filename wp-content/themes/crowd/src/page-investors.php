<?php
/**
 * Template Name: Investor Page
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
get_template_part( 'template-parts/what-we-look-for-investors'); # What we look for (Investors)
get_template_part( 'template-parts/how-we-curate'); # How we curate
get_template_part( 'template-parts/investor-case-study'); # Case Study
// get_template_part( 'template-parts/invest-with-us'); # Invest with us
get_template_part( 'template-parts/start-pledging'); # Start Pledging
get_template_part( 'template-parts/blokk-our-partners-a'); # Our Partners
get_template_part( 'template-parts/blokk-footer-a'); # Footer
get_footer(); # Foot
?>