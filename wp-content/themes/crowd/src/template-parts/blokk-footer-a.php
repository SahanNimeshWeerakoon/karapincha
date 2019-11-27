<!-- Footer -->
<footer id="footer" class="blokk-footer-a">
	<!-- container -->
	<div class="container">
		
		<!-- Footer top -->
		<div class="blokk-footer-a-top">
			<div class="row">

				<div class="col col-xs-12 col-sm-3 col-md-4 col-lg-4">
					<!-- Footer widget -->
					<div class="blokk-footer-a-widget">
						<!-- Footer widget Heading -->
						<div class="blokk-footer-a-widget-heading"></div><!-- // Footer widget Heading -->
						
						<!-- Footer widget content -->
						<div class="blokk-footer-a-widget-content">

							<!-- Footer logo -->
							<div class="footer-logo">
								<a href=""><img src="<?php echo meta_get_option('footer_logo'); ?>" alt="CrowdIsland Logo"></a>
							</div><!-- // Footer logo -->

							<p><?php echo meta_get_option('footer_address'); ?></p>
							<p><a href="mailto:info@crowdisland.lk">info@crowdisland.lk</a></p>
						</div><!-- // Footer widget content -->
					</div><!-- // Footer widget -->
				</div><!-- ./col -->

				<div class="col col-xs-12 col-sm-2 col-md-2 col-lg-2 pull-right">
					<!-- Footer widget -->
					<div class="blokk-footer-a-widget">
						<!-- Footer widget Heading -->
						<div class="blokk-footer-a-widget-heading"><h3>Connect with us</h3></div><!-- // Footer widget Heading -->
						
						<!-- Footer widget content -->
						<div class="blokk-footer-a-widget-content">

							<ul class="social-links">
								<?php
								$social_menu = meta_get_option('social_menu');
								foreach ($social_menu as $icons => $icon) { ?>
								<li><a target="_blank" href="<?php echo $icon['link'];?>"><i class="<?php echo $icon['icon'];?>"></i></a></li>
								<?php } ?>
							</ul>
						</div><!-- // Footer widget content -->
					</div><!-- // Footer widget -->
				</div><!-- ./col -->

				<div class="col col-xs-6 col-sm-3 col-md-3 col-lg-3">
					<!-- Footer widget -->
					<div class="blokk-footer-a-widget">
						<!-- Footer widget Heading -->
						<div class="blokk-footer-a-widget-heading"></div><!-- // Footer widget Heading -->
						
						<!-- Footer widget content -->
						<div class="blokk-footer-a-widget-content">
							<?php 
								if ( has_nav_menu( 'footer-1' ) ) :
									wp_nav_menu( array(
										'theme_location' => 'footer-1',
										'menu_id'        => 'footer-1',
									) );
								endif;
							?>
						</div><!-- // Footer widget content -->
					</div><!-- // Footer widget -->
				</div><!-- ./col -->

				<div class="col col-xs-6 col-sm-2 col-md-2 col-lg-2">
					<!-- Footer widget -->
					<div class="blokk-footer-a-widget">
						<!-- Footer widget Heading -->
						<div class="blokk-footer-a-widget-heading"></div><!-- // Footer widget Heading -->
						
						<!-- Footer widget content -->
						<div class="blokk-footer-a-widget-content">

							<?php 
								if ( has_nav_menu( 'footer-2' ) ) :
									wp_nav_menu( array(
										'theme_location' => 'footer-2',
										'menu_id'        => 'footer-2',
									) );
								endif;
							?>
						</div><!-- // Footer widget content -->
					</div><!-- // Footer widget -->
				</div><!-- ./col -->

			</div><!-- ./row -->
		</div><!-- // Footer top -->

		<!-- Footer bottom -->
		<div class="blokk-footer-a-bottom">
			
			<!-- Note -->
			<div class="note">
				<p><?php echo meta_get_option('footer_note'); ?></p>
			</div><!-- // Note -->

			<!-- Copyrights -->
			<div class="copyrights">
				<span><?php echo meta_get_option('footer_copyrights'); ?></span>
				<a href="https://amplifyn.com?ref=CrowdIsland" target="_blank" class="amplifyn">Made by &nbsp;&nbsp;<img src="<?php echo THEME_IMAGES; ?>/amplifyn-logo.svg" alt="Website Development Services By Amplifyn"></a>
			</div><!-- // Copyrights -->
		</div><!-- // Footer bottom -->
	</div><!-- .//container -->
</footer><!-- // Footer -->