<?php
/**
 * Template part for displaying posts
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Amplifyn WordPress Module
 * @subpackage  karapincha
 * @subpackage  Amplifyn
 * @since       2.0
 * @version     2.0
 */
?>

<!-- Article -->
<article  id="article-<?php the_ID(); ?>" <?php post_class('article page-content mb80 pt60'); ?>>
	<div class="container">
		<div class="row">

			<!-- Article content -->
			<div class="article-content" style="width: 100%;">
				<?php while ( have_posts() ) : the_post(); ?>
				<!-- Article Header -->
				<div class="article-header">
					
					<!-- Title -->
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div><!-- // Title -->
				</div><!-- // Article Header -->

				<!-- Article Tabs -->
				<div class="article-tabs">					
					<!-- Article Tab Content -->
					<div class="tab-content">
						<!-- Overview -->
						<div role="tabpanel" class="tab-pane active" id="overview">
							<?php the_content(); ?>
						</div><!-- // Overview -->
					</div><!-- // Article Tab Content -->
				</div>				
		 		<?php endwhile; ?>				
			</div><!-- // Article content -->
		</div><!-- ./row -->
	</div><!-- ./container -->
</article><!-- // Article -->