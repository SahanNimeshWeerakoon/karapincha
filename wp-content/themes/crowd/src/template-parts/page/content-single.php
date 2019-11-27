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
<article  id="article-<?php the_ID(); ?>" <?php post_class('article mb80'); ?>>
	<div class="container">
		<div class="row">

			<!-- Sidebar Content -->
			<div class="sidebar-content pull-right">
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
				</div><!-- // Sidebar Widget -->
			</div><!-- // Sidebar Content -->

			<!-- Article content -->
			<div class="article-content">
				<?php while ( have_posts() ) : the_post(); ?>
				<!-- Article Header -->
				<div class="article-header">
					
					<!-- Title -->
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div><!-- // Title -->
				</div><!-- // Article Header -->

				<!-- Article Credits -->
				<div class="article-credits">
					
					<!-- Author -->
					<div class="article-author">
						<!-- Picture -->
						<div class="picture">
							<img src="<?php echo get_avatar_url(get_the_ID());?>" alt="<?php echo get_the_author_meta('display_name'); ?>">

						</div><!-- // Picture -->

						<!-- Data -->
						<div class="data">
							<span class="name">by <?php echo get_the_author_meta('display_name'); ?></span>
							<span class="date">Created on <?php echo get_the_date();?></span>
						</div><!-- // Data -->
					</div><!-- // Author -->

					<!-- Article share -->
					<div class="article-share">
						<label>Share</label>
						<ul>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>&p[title]=<?php echo get_the_title(); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://plus.google.com/share?url=<?php echo get_the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div><!-- // Article share -->
				</div><!-- // Article Credits -->

				<!-- Article Featured Image -->
				<div class="article-featured-image">
					<?php 
				      	if ( has_post_thumbnail() ) {
				         	the_post_thumbnail('full', array('class'=>'featured-image'));          
				      	} 
				    ?>
				</div><!-- // Article Featured Image -->

				<!-- Article Tabs -->
				<div class="article-tabs">					
					<!-- Article Tab Content -->
					<div class="tab-content">
						<!-- Overview -->
						<div role="tabpanel" class="tab-pane active" id="overview">
							<?php the_content(); ?>
						</div><!-- // Overview -->
					</div><!-- // Article Tab Content -->
				
		 		<?php		 
		            // If comments are open or we have at least one comment, load up the comment template.
		            // if ( comments_open() || get_comments_number() ) :
		            //     comments_template();
		            // endif;
		 
		        // End the loop.
		        endwhile;
		        ?>
				
			</div><!-- // Article content -->
		</div><!-- ./row -->
	</div><!-- ./container -->
</article><!-- // Article -->