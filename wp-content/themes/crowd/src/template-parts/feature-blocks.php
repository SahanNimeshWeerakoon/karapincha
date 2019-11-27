<!-- Blokk News Block A -->
<section class="feature-blocks blokk-feature-blocks-a">
	<div class="container">

		<!-- Left block -->
		<div class="left col-xs-12 col-sm-6">
			<!-- Blokk card C -->
			<div class="blokk-card-c">

				<?php
					$raise_block = meta_get_option('raise_block');
				?>				
				<!-- Title -->
				<div class="title"><h3><?php echo $raise_block['title'];?></h3></div><!-- // Title -->

				<!-- Description -->
				<div class="description">
					<p><?php echo $raise_block['description'];?></p>
				</div><!-- // Description -->

				<!-- Action -->
				<div class="action">
					<a href="<?php echo $raise_block['btn_link'];?>" class="btn btn-lg btn-primary"><?php echo $raise_block['btn_text'];?></a>
				</div><!-- // Action -->

				<!-- Note -->
				<div class="note">
					<p><?php echo $raise_block['note'];?></p>
				</div><!-- // Note -->
			</div><!-- // Blokk card C -->
		</div><!-- // Left block -->

		<!-- Right feature block -->
		<div class="right col-xs-12 col-sm-6">
			<!-- Blokk card C -->
			<div class="blokk-card-c">

				<?php
					$invest_block = meta_get_option('invest_block');
				?>				
				<!-- Title -->
				<div class="title"><h3><?php echo $invest_block['title'];?></h3></div><!-- // Title -->

				<!-- Description -->
				<div class="description">
					<p><?php echo $invest_block['description'];?></p>
				</div><!-- // Description -->

				<!-- Action -->
				<div class="action">
					<a href="<?php echo $invest_block['btn_link'];?>" class="btn btn-lg btn-primary"><?php echo $invest_block['btn_text'];?></a>
				</div><!-- // Action -->

				<!-- Note -->
				<div class="note">
					<p><?php echo $invest_block['note'];?></p>
				</div><!-- // Note -->
			</div><!-- // Blokk card C -->
		</div><!-- // Right feature block -->
	</div><!-- ./container -->
</section><!-- // Blokk News Block A -->