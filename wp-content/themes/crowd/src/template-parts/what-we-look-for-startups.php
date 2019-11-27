<!-- What we look for -->
<section class="what-we-look-for">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('what_we_look_for_startups_title'); ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('what_we_look_for_startups_description'); ?></p>
		</div><!-- // Section Description -->

		<!-- Feature blocks -->
		<div class="blokk-feature-blocks-a">

			<?php
				$what_we_look_for_startups_widgets = meta_get_option('what_we_look_for_startups_widgets');
				// echo '<pre>';
				// var_dump($what_we_look_for_startups_widgets);
				// echo '</pre>';
				foreach ($what_we_look_for_startups_widgets as $widgets => $block) {
			?>
			<div class="col col-sm-3 col-md-3">
				<!-- Feature Block -->
				<div class="feature-block blokk-feature-block-a">
					
					<!-- Icon -->
					<div class="icon"><span><img src="<?php echo $block['icon']; ?>"></span></div><!-- // Icon -->

					<!-- Data -->
					<div class="data">
						
						<!-- Title -->
						<div class="title"><label><?php echo $block['title']; ?></label></div><!-- // Title -->

						<?php /* <!-- Description -->
						<div class="description">
							<p><?php echo $block['description']; ?></p>
						</div><!-- // Description --> */ ?>
					</div><!-- // Data -->
				</div><!-- // Feature Block -->
			</div><!-- .col -->
			<?php } ?>
		</div><!-- // Feature blocks -->
	</div><!-- ./container -->
</section><!-- // What we look for -->