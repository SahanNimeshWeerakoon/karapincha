<!-- Invest with us -->
<section class="invest-with-us">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line dot blue"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('why_us_title'); ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('why_us_description'); ?></p>
		</div><!-- // Section Description -->

		<div class="row blocks">
			<?php
				$why_us_widgets = meta_get_option('why_us_widgets');
				foreach ($why_us_widgets as $widgets => $block) {
			?>
			<div class="col col-sm-3 col-md-3">
				<!-- Blokk card E -->
				<div class="blokk-card-e">
					<!-- Card Data -->
					<div class="card-data">
						<!-- Addon -->
						<div class="addon">
							<span>
								<img src="<?php echo $block['icon']; ?>">
							</span>
						</div><!-- // Addon -->

						<!-- Title -->
						<div class="title">
							<h2><?php echo $block['title']; ?></h2>
						</div><!-- // Title -->

						<!-- Description -->
						<div class="description">
							<p><?php echo $block['description']; ?></p>
						</div><!-- // Description -->
					</div><!-- // Card Data -->
				</div><!-- // Blokk card D -->
			</div><!-- ./col -->
			<?php } ?>
		</div><!-- ./row -->
	</div><!-- ./container -->
</section><!-- // Invest with us -->

