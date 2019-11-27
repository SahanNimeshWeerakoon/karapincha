<!-- Our Startups -->
<section class="our-startups">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line dot"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('our_startups_title'); ?></h2><!-- // Title -->

			<!-- Sub Title -->
			<span class="subtitle"><span><?php echo meta_get_option('our_startups_subtitle'); ?></span></span><!-- // Sub Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('our_startups_description'); ?></p>
		</div><!-- // Section Description -->
	</div><!-- ./container -->
</section><!-- // Our Startups -->

<!-- Startup slider -->
<section class="startup-slider">

	<!-- Blokk Slider A Controller -->
	<div class="blokk-slider-a-controller">
		<ul class="nav">
			<li class="prev"><img src="<?php echo THEME_ICONS; ?>/prev.svg"></li>
			<li class="next"><img src="<?php echo THEME_ICONS; ?>/next.svg"></li>
		</ul>
	</div><!-- // Blokk Slider A Controller -->

	<!-- Blokk Slider A -->
	<div id="our-startups-slider" class="blokk-slider-a">

		<?php
			$args = array(
				'post_type' => array(
					'campaigns',
				),
		
				'post_status' => array(
					'publish',
				),
				'posts_per_page'         => 5,
				// 'offset'                 => 3,
			);
			
			$query = new WP_Query( $args );
		?>
		<?php 
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			$campaign_data = get_post_meta( get_the_ID(), 'campaign_data', true );

			$total = $campaign_data['investment_sought'];
			$recieved = $campaign_data['investment_received'];
			$percentage = get_percentage($total,$recieved);

			if ($recieved >= $total ) { $is_funded = 'funded'; } else { $is_funded = 'pledge'; };
		?>
			<!-- Slide Item -->
			<div class="slide-item col col-sm-3 col-md-3 col-lg-3">
				
				<!-- Blokk card A -->
				<?php if($is_funded == 'pledge') :?>
				<a href="<?php echo get_the_permalink(); ?>" class="blokk-card-a">
				<?php else : ?>
				<div class="blokk-card-a">
				<?php endif; ?>

					<!-- Thumbnail -->
					<div class="card-thumbnail">
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $campaign_data['startup_name']; ?>">
					</div><!-- // Thumbnail -->

					<!-- Title with Icon -->
					<div class="title-with-icon">
						<!-- Icon -->
						<div class="icon"><img src="<?php echo $campaign_data['startup_logo']; ?>" alt="<?php echo $campaign_data['startup_name']; ?>"></div><!-- // Icon -->

						<!-- Title -->
						<div class="title"><h2><?php echo $campaign_data['startup_name']; ?></h2></div><!-- // Title -->
					</div><!-- // Title with Icon -->

					<!-- Description -->
					<div class="description">
						<p><?php echo limit_words(get_the_excerpt(), 90); ?></p>
					</div><!-- // Description -->

					<!-- Progress footer -->
					<div class="progress-footer <?php echo $is_funded; ?>">
						
						<!-- Progress bar -->
						<div class="progress-bar-i">
							<span style="<?php echo 'width:'.$percentage.'%';?>;"></span>
						</div><!-- // Progress bar -->

						<!-- Actions -->
						<div class="actions">
							
							<!-- Text -->
							<div class="text">
								<label><?php echo number_format($campaign_data['investment_received']); ?> <small>LKR</small></label>
							</div><!-- // Text -->

							<!-- Button -->
							<div class="button">
							<?php if ($recieved >= $total ):?>
								<span class="btn btn-success button-line">Funded</span>
							<?php else: ?>
								<button class="btn btn-info button-line">Pledge</button>
							<?php endif; ?>
							</div><!-- // Button -->
						</div><!-- // Actions -->
					</div><!-- // Progress footer -->
				<?php if($is_funded == 'pledge') :?>
				</a><!-- // Blokk card A -->
				<?php else : ?>
				</div><!-- // Blokk card A -->
				<?php endif; ?>
			</div><!-- // Slide Item -->
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php wp_reset_postdata(); endif; ?>
	</div><!-- // Blokk Slider A -->

	<!-- Read more -->
	<div class="read-more">
		<a href="<?php echo SITE_URL; ?>/campaigns" class="btn btn-default btn-line btn-rounded">See More</a>
	</div><!-- // Read more -->
</section><!-- // Startup slider -->