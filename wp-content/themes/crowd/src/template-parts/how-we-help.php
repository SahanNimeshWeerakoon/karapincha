<!-- How we help -->
<section class="how-we-help">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line dot blue"></span>
		</div><!-- // Branding line -->
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('how_we_help_title'); ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo meta_get_option('how_we_help_description'); ?></p>
		</div><!-- // Section Description -->

		<div class="row">
			<?php
				$how_we_help_widgets = meta_get_option('how_we_help_widgets');
				foreach ($how_we_help_widgets as $widgets => $block) {
			?>
			<div class="col col-sm-4 col-md-4">
				<!-- Blokk card D -->
				<div class="blokk-card-d">
					<!-- Thumbnail -->
					<div class="card-thumbnail">
						<!-- Image -->
						<img src="<?php echo $block['icon']; ?>" alt="<?php echo $block['title']; ?>"><!-- // Image -->
					</div><!-- // Thumbnail -->

					<!-- Card Data -->
					<div class="card-data">

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
</section><!-- // How we help -->

