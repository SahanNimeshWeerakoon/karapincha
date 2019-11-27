<?php
/**
 * Displays sidebar navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

function sidebar_link_classes($classes, $item, $args) {
  	if($args->theme_location == 'sidebar') {
    	$classes[] = 'link--kukuri';
  	}
  	return $classes;
}
add_filter('nav_menu_css_class','sidebar_link_classes',1,3);

?>
<!-- Sidebar Menu -->
<section class="navigation-menu">
    <span class="overlay"></span>
    <div id="nav" class="content movedRight">
        
        <!-- Nav Links -->
        <div class="links">
        	<?php
        		wp_nav_menu( array(
					'theme_location' => 'sidebar',
					'menu_id'        => 'sidebar-menu',
				) );
        	?>
        </div><!-- //Nav Links -->

        <!-- Social Links -->
        <ul class="social-links menu">
            <?php
            $social_menu = meta_get_option('social_menu');
            foreach ($social_menu as $icons => $icon) { ?>
            <li><a target="_blank" href="<?php echo $icon['link'];?>"><i class="<?php echo $icon['icon'];?>"></i></a></li>
            <?php } ?>
        </ul><!-- // Social Links -->
    </div>
</section><!-- // Sidebar Menu -->