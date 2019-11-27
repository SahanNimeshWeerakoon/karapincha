<?php 
	if (is_home() || is_archive()) {
		$page_banner = meta_get_option('homepage_banner_img');
	} else if(is_single()) {
		$page_banner = '';
	} else {
		$page_banner = get_the_post_thumbnail_url();
	}

	$starting_funds = meta_get_option('homepage_banner_counter_raised') - 1000000;
	$raised_funds = meta_get_option('homepage_banner_counter_raised');

	$starting_support = meta_get_option('homepage_banner_counter_supported') - 10;
	$supported = meta_get_option('homepage_banner_counter_supported');

	$home_page_banner = meta_get_option('homepage_banner_img');
	$page_raise_block = meta_get_option('page_raise_block');
	$page_invest_block = meta_get_option('page_invest_block');
?>

<?php if (!is_single()) : ?>

	<?php if (is_page_template('page-content.php')) : ?>

	<!-- Header -->
	<section class="page-content header blokk-header-a">
		<?php
			# Get Navigation
			get_template_part( 'template-parts/header/nav');
		?>		
	</section><!-- // Header -->

	<?php else : ?>

		<!-- Header -->
		<section data-parallax="scroll" data-image-src="<?php echo $page_banner; ?>" class="parallax-window header blokk-header-a">

			<?php
				# Get Navigation
				get_template_part( 'template-parts/header/nav');
			?>
			
			<?php if (is_home() || is_archive()) : ?>
			<!-- Hero container -->
			<div class="blokk-hero-container-a">
				<div class="container">
				
					<!-- Call to action -->
					<div class="call-to-action">
						<!-- Title -->
						<h1 class="title"><?php echo meta_get_option( 'homepage_banner_text' ); ?></h1><!-- // Title -->

						<!-- CTA Buttons -->
						<div class="cta-buttons">
							<?php
								$cta_buttons = meta_get_option('homepage_banner_cta_buttons');
								foreach ($cta_buttons as $buttons => $button) {
									echo '<a href="'.$button['link'].'" class="btn">'.$button['label'].'</a>';
								}
							?>
						</div><!-- // CTA Buttons -->
					</div><!-- // Call to action -->

					<!-- Startup Counter -->
					<div class="startup-counter">
						
						<!-- Blokk Counter block A -->
						<div class="blokk-counter-block-a" style="width: 230px;">
							<label id="countvalue2"><?php echo meta_get_option('homepage_banner_counter_supported');?></label>
							<span>Startups Supported</span>
						</div><!-- // Blokk Counter block A -->
						
						<!-- Blokk Counter block A -->
						<div class="blokk-counter-block-a">
							<label>
								<span id="countvalue"><?php echo meta_get_option('homepage_banner_counter_raised');?></span>
								<small>LKR</small>
							</label>
							<span>Funds Raised</span>
						</div><!-- // Blokk Counter block A -->
					</div><!-- // Startup Counter -->
				</div><!-- ./container -->
			</div><!-- // Hero container -->

			<?php elseif (is_page()) : ?>

			<!-- Hero container -->
			<div class="blokk-hero-container-b">
				<div class="container">
					<!-- Call to action -->
					<div class="call-to-action">

						<?php if (!is_page('temp')) : ?>
						<!-- Title -->
						<div class="title"> 
							<h1><?php the_title(); ?></h1>
						</div><!-- // Title -->
						<?php endif ?>

						<?php if (is_page('about-us')) : ?>
						<!-- Header Description -->
						<div class="header-description">
							<p><?php echo meta_get_option('about_us_description'); ?></p>
						</div><!-- // Header Description -->
						<?php endif ?>

						<?php if (is_page('investors')) : ?>
						<!-- CTA Buttons -->
						<div class="cta-buttons">
							<a href="#" data-id="investors_modal" class="modal-activate btn"><?php echo $page_invest_block['btn_text'];?></a>
						</div><!-- // CTA Buttons -->
						<?php endif ?>

						<?php if (is_page('startups')) : ?>
						<!-- CTA Buttons -->
						<div class="cta-buttons">
							<a href="#" data-id="startups_modal" class="modal-activate btn"><?php echo $page_raise_block['btn_text'];?></a>
						</div><!-- // CTA Buttons -->
						<?php endif ?>
					</div><!-- // Call to action -->
				</div>
			</div><!-- // Hero container -->

			<?php endif; ?>
		</section><!-- // Header -->

	<?php endif; ?>
<?php else : ?>

<!-- Header -->
<section data-parallax="scroll" data-image-src="<?php echo $page_banner; ?>" class="parallax-window header blokk-header-a post">
	<?php
		# Get Navigation
		get_template_part( 'template-parts/header/nav');
	?>
</section><!-- // Header -->

<?php endif; ?>

<?php 
	get_template_part( 'template-parts/modals/modal', 'startups' ); # startups modal
	get_template_part( 'template-parts/modals/modal', 'invest' ); # investors modal
?>

<script>
	jQuery(document).ready(function($) {
		var numAnim = new CountUp("countvalue", <?php echo $starting_funds; ?>, <?php echo $raised_funds; ?>);
	    if (!numAnim.error) {
	        numAnim.start();
	    }
		var numAnim = new CountUp("countvalue2", <?php echo $starting_support; ?>, <?php echo $supported; ?>);
	    if (!numAnim.error) {
	        numAnim.start();
	    }
	});
</script>