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

global $postid;
$postid = get_the_ID();
$campaign_data = get_post_meta( get_the_ID(), 'campaign_data', true );
$total = $campaign_data['investment_sought'];
$recieved = $campaign_data['investment_received'];
$equity = $campaign_data['equity_on_offer'];
$percentage = get_percentage($total,$recieved);
$post_money_valuation = $total / $equity;
$valuation = $post_money_valuation * 100;

if ($recieved >= $total ) { $is_funded = 'funded'; } else { $is_funded = 'pledge'; };
?>

<!-- Article -->
<article  id="article-<?php the_ID(); ?>" <?php post_class('article'); ?>>
	<div class="container">
		<div class="row">
		
			<!-- Article content -->
			<div class="article-content">
				
				<!-- Article Header -->
				<div class="article-header">
					
					<!-- Title -->
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div><!-- // Title -->

					<!-- Intro / Excerpt -->
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div><!-- // Intro / Excerpt -->
				</div><!-- // Article Header -->

				<!-- Article Credits -->
				<div class="article-credits">
					
					<!-- Author -->
					<div class="article-author">
						<!-- Picture -->
						<div class="picture">
							<img src="<?php echo $campaign_data['startup_logo']; ?>" alt="<?php echo $campaign_data['startup_name']; ?>">

							<?php
								if ($campaign_data['startup_verify'] == 'yes') {
									echo '<span class="verified"><img src="'.THEME_ICONS.'/verify-badge.svg"></span>';
								}
							?>
						</div><!-- // Picture -->

						<!-- Data -->
						<div class="data">
							<span class="name">by <?php echo $campaign_data['startup_name']; ?></span>
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
						if (isset($campaign_data['gallery'])){
							$gallery = $campaign_data['gallery'];
						}

						if( ! empty( $gallery ) ) {
						  $ids = explode( ',', $gallery );
						  echo '<ul class="gallery-control">
								<li class="prev"></li>
								<li class="next"></li>
							</ul>';
						  echo '<ul class="gallery">';
						  foreach ( $ids as $id ) {
						    $attachment = wp_get_attachment_image_src( $id, 'full' );
						    echo '<li style="background-image:url('.$attachment[0].')"></li>';
						  }
						  echo '</ul>';
						} 
				    ?>
				</div><!-- // Article Featured Image -->

				<!-- Article Tabs -->
				<div class="article-tabs">

					<!-- Article Nav Tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
						<li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">Team</a></li>
						<li role="presentation"><a href="#updates" aria-controls="updates" role="tab" data-toggle="tab">Updates</a></li>
						<li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>
					</ul><!-- // Article Nav Tabs -->
					
					<!-- Article Tab Content -->
					<div class="tab-content">
						<!-- Overview -->
						<div role="tabpanel" class="tab-pane active" id="overview">
							<?php
							    while ( have_posts() ) : the_post(); ?>
									<div class="entry-content-page">
										<?php the_content(); ?>
									</div>
							    <?php
							    endwhile; //resetting the page loop
							    wp_reset_query(); //resetting the page query
							?>
						</div><!-- // Overview -->

						<!-- Team -->
					    <div role="tabpanel" class="tab-pane" id="team">
					    	<?php
					    		$team = $campaign_data['team'];
					    		foreach ($team as $members => $member) {
					    			//echo '<pre>';
									//print_r($member);
									//echo '</pre>';
					    	?>
				    		<!-- Blokk Widget Chip A -->
							<div class="team-member blokk-widget-chip-a">
								
								<!-- Picture -->
								<div class="picture">
									<img src="<?php echo $member['picture']; ?>" alt="<?php echo $member['name']; ?>">
								</div><!-- // Picture -->

								<!-- Data -->
								<div class="data">
									
									<!-- Name -->
									<div class="name">
										<h2><?php echo $member['name']; ?></h2>

										<?php if ($member['network'] == 'linkedin') : ?>
										<a href="<?php echo $member['profile_link']; ?>" target="_blank"><img src="<?php echo THEME_IMAGES;?>/linkedin-logo.png" alt="<?php echo $member['name']; ?> - LinkedIn"></a>
										<?php elseif ($member['network'] == 'facebook') : ?>
										<a href="<?php echo $member['profile_link']; ?>" target="_blank"><img src="<?php echo THEME_IMAGES;?>/facebook-logo.png" alt="<?php echo $member['name']; ?> - Facebook"></a>
										<?php elseif ($member['network'] == 'twitter') : ?>
										<a href="<?php echo $member['profile_link']; ?>" target="_blank"><img src="<?php echo THEME_IMAGES;?>/twitter-logo.png" alt="<?php echo $member['name']; ?> - Twitter"></a>
										<?php else : ?>
										<a href="<?php echo $member['profile_link']; ?>" target="_blank">Profile</a>
										<?php endif; ?>
									</div><!-- // Name -->

									<!-- Title -->
									<span class="title"><?php echo $member['title']; ?></span><!-- // Title -->

									<!-- Education -->
									<span class="education"><?php echo $member['education']; ?></span><!-- // Education -->
								</div><!-- // Data -->
							</div><!-- // Blokk Widget Chip A -->
					    	<?php } ?>
					    </div><!-- // Team -->

					    <!-- Updates -->
					    <div role="tabpanel" class="tab-pane" id="updates">
							<?php
					    		$update = $campaign_data['update'];
					    		foreach ($update as $updates => $update) {
					    			// echo '<pre>';
									// print_r($update);
									// echo '</pre>';
					    	?>
					    	<!-- Update Block -->
					    	<div class="update-block">
					    		<span class="date-time"><?php echo $update['date'];?></span>
					    		<h4 class="title"><?php echo $update['title'];?></h4>
					    		<p class="content"><?php echo $update['description'];?></p>
					    	</div><!-- // Update Block -->
							<?php } ?>
					    </div><!-- // Updates -->

					    <!-- Comments -->
					    <div role="tabpanel" class="tab-pane" id="comments">
					    	<?php /* 
							    <?php    
							        //Gather comments for a specific page/post 
							        $comments = get_comments(array(
							            'post_id' => $postid,
							            'status' => 'approve' //Change this to the type of comments to be displayed
							        ));

							        if ($comments != '') { ?>
							        	<ol class="commentlist">
											<?php
												 //Display the list of comments
										        wp_list_comments(array(
										            'per_page' => 10, //Allow comment pagination
										            'reverse_top_level' => false //Show the latest comments at the top of the list
										        ), $comments);
											?>
							        	</ol>
							        <?php } ?>
							<?php comment_form(); ?> */ ?>
							<?php echo do_shortcode('[fbcomments url="'.get_the_permalink().'" width="100%" count="off" num="5"]'); ?>
					    </div><!-- // Comments -->
					</div><!-- // Article Tab Content -->

					<?php /* <!-- FAQ -->
					<div class="faq-head">
						<label>Have questions about this project?</label>
						<p>Check the FAQ section and findout more about this project. <a href="">Check FAQ</a></p>
					</div><!-- // FAQ --> */ ?>
				</div><!-- // Article Tabs -->
				
			</div><!-- // Article content -->

			<!-- Sidebar Content -->
			<div class="sidebar-content pull-right">
				
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					
					<!-- Investment Widget -->
					<div class="investment-widget fixed">
						
						<!-- Progress -->
						<div class="progress <?php echo $is_funded; ?>">
						  	<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="<?php echo 'width:'.$percentage.'%';?>;">
						    	<span class="sr-only"><?php echo $percentage; ?>% Complete</span>
						  	</div>
						</div><!-- // Progress -->

						<!-- Data chip -->
						<div class="data-chip big">
							<!-- Count -->
							<div class="count">
								<span class="number"><?php echo number_format($campaign_data['investment_sought']); ?></span>
								<span class="addon">LKR</span>
							</div><!-- // Count -->

							<!-- Label -->
							<label>Investment Sought</label><!-- // Label -->
						</div><!-- // Data chip -->

						<!-- Data chip -->
						<div class="data-chip">
							<!-- Count -->
							<div class="count">
								<span class="number"><?php echo $campaign_data['equity_on_offer']; ?></span>
								<span class="addon">%</span>
							</div><!-- // Count -->

							<!-- Label -->
							<label>Equity on Offer</label><!-- // Label -->
						</div><!-- // Data chip -->

						<!-- Data chip -->
						<div class="data-chip">
							<!-- Count -->
							<div class="count">
								<span class="number"><?php echo number_format($campaign_data['investment_received']); ?></span>
								<span class="addon">LKR</span>
							</div><!-- // Count -->

							<!-- Label -->
							<label>Investment Received</label><!-- // Label -->
						</div><!-- // Data chip -->

						<!-- Data chip -->
						<div class="data-chip">
							<!-- Count -->
							<div class="count">
								<span class="number"><?php echo number_format($campaign_data['minimum_investment']); ?></span>
								<span class="addon">LKR</span>
							</div><!-- // Count -->

							<!-- Label -->
							<label>Minimum Investment</label><!-- // Label -->
						</div><!-- // Data chip -->

						<!-- Data chip -->
						<div class="data-chip">
							<!-- Count -->
							<div class="count">
								<span class="number"><?php echo number_format($valuation); ?></span>
								<span class="addon">LKR</span>
							</div><!-- // Count -->

							<!-- Label -->
							<label>Post money Valuation</label><!-- // Label -->
						</div><!-- // Data chip -->

						<!-- Pledge Now -->
						<div class="pledge-now">
							<?php if ($is_funded == 'funded') :?>
							<span class="btn btn-info">Funded</span>
							<?php else : ?>
							<a href="" class="btn btn-primary">Pledge</a>
							<?php endif; ?>
						</div><!-- // Pledge Now -->
					</div><!-- // Investment Widget -->
				</div><!-- // Sidebar Widget -->
			</div><!-- // Sidebar Content -->
		</div><!-- ./row -->
	</div><!-- ./container -->
</article><!-- // Article -->