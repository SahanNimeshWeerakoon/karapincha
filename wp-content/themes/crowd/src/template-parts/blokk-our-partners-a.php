<!-- Our Partners -->
<section class="blokk-our-partners-a">
	<!-- Container -->
	<div class="container">

		<!-- Title section -->
		<div class="title-section"><span><?php echo meta_get_option('our_partners_title'); ?></span></div><!-- titile section -->

		<!-- logo section -->
		<div class="logo-section">
			<?php
				$our_partners_widgets = meta_get_option('our_partners_widgets');
				foreach ($our_partners_widgets as $widgets => $block) {
			?>
			<div class="logo">
				<img src="<?php echo $block['icon']; ?>">
			</div>
			<?php } ?>
		</div><!-- // logo section -->
	</div><!-- // Container -->
</section><!-- // Our Partners -->