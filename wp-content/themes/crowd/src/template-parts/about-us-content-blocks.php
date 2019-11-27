<?php
	$about_us_content_blocks = meta_get_option('about_us_content_blocks');
	foreach ($about_us_content_blocks as $blocks => $block) { ?>
<!-- About us content block -->
<section class="about-us-content-block">
	<div class="container">

		<!-- Branding line -->
		<div class="blokk-branding-line">
			<span class="vertical-line"></span>
		</div><!-- // Branding line -->

		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo $block['title']; ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Section Description -->
		<div class="section-description blokk-section-description-a">
			<p><?php echo $block['description']; ?></p>
		</div><!-- // Section Description -->
	</div><!-- ./container -->
</section><!-- // About us content blocks -->
<?php } ?>

