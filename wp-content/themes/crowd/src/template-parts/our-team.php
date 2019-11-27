<!-- Our Team -->
<section class="our-team">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line dot"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('our_team_title'); ?></h2><!-- // Title -->

			<!-- Sub Title -->
			<span class="subtitle"><span><?php echo meta_get_option('our_team_subtitle'); ?></span></span><!-- // Sub Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('our_team_description'); ?></p>
		</div><!-- // Section Description -->
	</div><!-- ./container -->
</section><!-- // Our Team -->

<!-- Our Team Profiles -->
<section class="our-team-profiles">
	<div class="container">
		<div class="row">

			<?php
				$our_team_members = meta_get_option('our_team_members');
				foreach ($our_team_members as $members => $member) {
			?>
			<div class="col col-sm-6 col-md-3 mb30">
				<!-- Feature Block -->
				<div class="blokk-card-f">
					
					<!-- Icon -->
					<div class="icon"><span><img src="<?php echo $member['image'];?>"></span></div><!-- // Icon -->

					<!-- Data -->
					<div class="data">
						
						<!-- Title -->
						<div class="title"><label><?php echo $member['name'];?></label></div><!-- // Title -->

						<div class="sub-title"><label><?php echo $member['title'];?></label></div><!-- // Title -->

						<!-- Social Links -->
						<div class="social-links">
							<?php if ($member['network'] == 'linkedin') : ?>
							<span><a target="_blank" href="<?php echo $member['profile_link'];?>"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a></span>
							<?php elseif ($member['network'] == 'facebook') : ?>
							<span><a target="_blank" href="<?php echo $member['profile_link'];?>"><i class="fa fa-facebook"></i> <span>Facebook</span></a></span>
							<?php elseif ($member['network'] == 'twitter') : ?>
							<span><a target="_blank" href="<?php echo $member['profile_link'];?>"><i class="fa fa-twitter"></i> <span>Twitter</span></a></span>
							<?php else : ?>
							<span><a target="_blank" href="<?php echo $member['profile_link'];?>"><i class="fa fa-globe"></i> <span>Website</span></a></span>
							<?php endif; ?>
						</div><!-- // Social Links -->

						<?php /* <!-- Description -->
						<div class="description">
							<p><?php echo $member['description']; ?></p>
						</div><!-- // Description --> */ ?>
					</div><!-- // Data -->
				</div><!-- // Feature Block -->
			</div><!-- ./col -->
			<?php } ?>
		</div><!-- ./row -->
	</div><!-- ./container -->
</section><!-- // Our Team Profiles -->