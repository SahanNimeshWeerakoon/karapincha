<!-- Blokk Testimonials A -->
<section class="blokk-testimonials-a">
	<div class="container">
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('success_stories_title'); ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Blokk Testimonials list A -->
		<div class="blokk-testimonials-list-a">

			<!-- Testimonial Items -->
			<div class="testimonial-items">
			<?php
				$i = 1;
				$success_stories_list = meta_get_option('success_stories_list');
				foreach ($success_stories_list as $stories => $story) {
			?>
				<!--  Testimonials Item -->
				<div class="testimonial-item slide-<?php echo $i;?>">
					<!-- Thumb image -->
					<div class="thumb-image"><img src="<?php echo $story['picture']; ?>"></div><!-- // Thumb image -->

					<!-- Testimony -->
					<div class="testimony">
						<!-- Quote -->
						<div class="quote">
							<p><?php echo $story['description']; ?></p>
						</div><!-- // Quote -->
					
						<!-- Author -->
						<div class="author">
							<span class="name"><?php echo $story['author']; ?></span>
							<span class="title"><?php echo $story['title']; ?></span>
						</div><!-- // Author -->
					</div><!-- // Testimony -->
				</div><!-- // Testimonials Item -->
			<?php $i++; } ?>		
			</div><!-- // Testimonial Items -->
			
			<!-- Testimonial controls -->
			<div class="testimonial-controls">
				<ul>
					<li class="prev"><img src="<?php echo THEME_ICONS; ?>/arrow-left.svg"></li>
					<li class="next"><img src="<?php echo THEME_ICONS; ?>/arrow-right.svg"></li>
				</ul>
			</div><!-- // Testimonial controls -->
		</div><!-- // Blokk Testimonials list A -->
	</div><!-- ./container -->

	<!-- Testimonials bullets -->
	<div class="blokk-testimonials-a-bullets">
		<div class="container">
			<div class="list">
				<?php
					$i = 1;
					foreach ($success_stories_list as $stories => $story) { ?>
				<span class="slide slide-<?php echo $i;?>"><img src="<?php echo $story['logo']; ?>"></span>
				<?php $i++; } ?>
			</div>
		</div><!-- ./container -->
	</div><!-- // Testimonials bullets -->
</section><!-- // Blokk Testimonials A -->