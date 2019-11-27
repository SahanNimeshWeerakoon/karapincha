<!-- Navigation -->
<?php if (is_home() || is_archive()) : ?>
<nav class="navigation blokk-navigation-a">
<?php elseif (is_page() && !is_page_template('page-content.php')) : ?>
<nav <?php post_class('navigation blokk-navigation-a'); ?>>
<?php else : ?>
<nav <?php post_class('navigation blokk-navigation-a single'); ?>>
<?php endif; ?>
	<div class="container">
		
		<!-- Logo -->
		<div class="logo"><a class="logo-link" href="<?php echo SITE_URL; ?>">CrowdIsland</a></div><!-- // Logo -->

		<!-- Modal toggle -->
        <span class="modal-toggle">
            <span class="menu-ham">
                <span class="_1"></span>
                <span class="_2"></span>
                <span class="_3"></span>
            </span>
        </span><!-- // Modal toggle -->
		
		<?php if ( has_nav_menu( 'sidebar' ) ) : ?>
		<!-- Nav toggle -->
        <span class="nav-toggle sidebar-toggle">
            <span class="menu-ham">
                <span class="_1"></span>
                <span class="_2"></span>
                <span class="_3"></span>
            </span>
        </span><!-- // Nav toggle -->
        
        <?php get_template_part( 'template-parts/navigation/navigation', 'sidebar' ); ?>
        <?php endif; ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
		<!-- Main Menu -->
		<div class="main-menu">
			<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
		</div><!-- // Main Menu -->
		<?php endif; ?>
	</div><!-- ./container -->
</nav><!-- // Navigation -->