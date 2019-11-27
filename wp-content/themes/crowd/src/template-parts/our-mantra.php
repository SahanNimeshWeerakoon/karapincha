<!-- Our Mantra -->
<section class="our-mantra">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('our_mantra_title'); ?></h2><!-- // Title -->

			<!-- Sub Title -->
			<span class="subtitle"><span><?php echo meta_get_option('our_mantra_subtitle'); ?></span></span><!-- // Sub Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('our_mantra_description'); ?></p>
		</div><!-- // Section Description -->

		<!-- Feature blocks -->
		<div class="blokk-feature-blocks-a">

			<?php
				$our_mantra_widgets = meta_get_option('our_mantra_widgets');
				foreach ($our_mantra_widgets as $widgets => $block) {
			?>
			<div class="col col-sm-4 col-md-4">
				<!-- Feature Block -->
				<div class="feature-block blokk-feature-block-a">
					
					<!-- Icon -->
					<div class="icon"><span><img src="<?php echo $block['icon']; ?>"></span></div><!-- // Icon -->

					<!-- Data -->
					<div class="data">
						
						<!-- Title -->
						<div class="title"><label><?php echo $block['title']; ?></label></div><!-- // Title -->

						<!-- Description -->
						<div class="description">
							<p><?php echo nl2br($block['description']); ?></p>
						</div><!-- // Description -->
					</div><!-- // Data -->
				</div><!-- // Feature Block -->
			</div><!-- .col -->				
			<?php } ?>
		</div><!-- // Feature blocks -->
	</div><!-- ./container -->
</section><!-- // Our Mantra -->