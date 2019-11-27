<?php
/**
 * Karapincha - A WordPress theme development framework.
 *
 * Karapincha is a framework for developing WordPress themes.  The framework allows theme developers
 * to quickly build themes without having to handle all of the "logic" behind the theme or having to
 * code complex functionality for features that are often needed in themes.  The framework does these
 * things for developers to allow them to get back to what matters the most:  developing and designing
 * themes. Themes handle all the markup, style, and scripts while the framework handles the logic.
 *
 * @package   	Amplifyn WordPress Module
 * @subpackage 	karapincha
 * @since   	2.0
 * @version   	2.0
 * @author    	Kasun Harshana <@skyyalone>
 * @copyright 	Copyright (c) 2017, Amplifyn (pvt) Ltd.
 * @link      	http://amplifyn.com/karapincha
 * @license   	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( ! class_exists( 'Karapincha' ) ) {

	/**
	 * The Karapincha class launches the framework.  It's the organizational structure behind the
	 * entire framework.  This class should be loaded and initialized before anything else within
	 * the theme is called to properly use the framework.
	 *
	 * @since  1.0
	 * @access public
	 */
	
	class Karapincha {

		# initializing the framework
		public static function init() {
			self::theme_constants();
			self::theme_functions();
			self::theme_scripts();
			self::theme_styles();
			self::theme_fonts();
			self::theme_actions();
			self::theme_filters();
			self::theme_support();
		}

		# define constant variables
		public static function theme_constants() {

			$get_option = get_option( 'settings-page' );

			define( 'SITE_URL', get_bloginfo('url'));
			define( 'SITE_sURL', urlencode('http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

			$SITE_TITLE = ($get_option['site_title'] == "") ? get_bloginfo('name') : $get_option['site_title'];

			define( 'SITE_TITLE', $SITE_TITLE);
			define( 'SITE_DESCRIPTION', get_bloginfo('description'));
			define( 'PINGBACK_URL', get_bloginfo('pingback_url'));
			define( 'STYLESHEET_URL', get_bloginfo('stylesheet_url'));

			define( 'WORDPRESS_VERSION', get_bloginfo('version'));


			define( 'MAILER_SMTP_EMAIL_ADDRESS', 'info@crowdisland.lk');
			define( 'MAILER_SMTP_EMAIL_PASSWORD', 'Crowd@116');

			define( 'MAILER_DEV_EMAIL', 'kasun@amplifyn.com');

			define( 'MAILER_TO_NAME', 'Kasun Harshana');
			define( 'MAILER_TO_EMAIL', 'kasun@amplifyn.com');

			define( 'MAILER_FROM_NAME', 'CrowdIsland');
			define( 'MAILER_FROM_EMAIL', 'info@crowdisland.lk');

			define( 'THEME_NAME', 'Karapincha Starter Theme' );
			define( 'THEME_SLUG', get_template() );
			define( 'THEME_VERSION', '2.0' );
			define( 'THEME_AUTHOR', 'Kasun Harshana');
			define( 'THEME_URI', get_template_directory_uri() );
			define( 'THEME_DIR', get_template_directory() );
			define( 'THEME_ASSETS_URI', THEME_URI . '/assets' );
			define( 'THEME_ASSETS_DIR', THEME_DIR . '/assets' );

			define( 'THEME_VENDORS_URI', THEME_URI . '/vendors' );
			define( 'THEME_VENDORS_DIR', THEME_DIR . '/vendors' );
			define( 'THEME_LIB_DIR', THEME_DIR . '/vendors' );
			define( 'THEME_LIB_URL', THEME_URI . '/vendors' );
			define( 'THEME_FUNCTIONS', THEME_DIR . '/inc' );
			define( 'THEME_IMAGES', THEME_ASSETS_URI . '/images' );
			define( 'THEME_ICONS', THEME_ASSETS_URI . '/icons' );
			define( 'THEME_SHORTCODES', THEME_FUNCTIONS . '/shortcodes' );
			define( 'THEME_WIDGETS', THEME_FUNCTIONS . '/widgets' );
			define( 'THEME_STYLES_DIR', THEME_ASSETS_DIR . '/css' );
			define( 'THEME_STYLES_URI', THEME_ASSETS_URI . '/css' );
			define( 'THEME_JS_URI', THEME_ASSETS_URI . '/js' );
			define( 'THEME_FONTS_URI', THEME_ASSETS_URI . '/fonts' );

			define( 'FRAMEWORK_VERSION', '2.0' );
			define( 'FRAMEWORK_ASSETS', THEME_URI . '/inc/assets' );
			define( 'FRAMEWORK_IMAGES', THEME_URI . '/inc/assets/images' );

			define( 'DEMO_URL', 'http://www.amplifyn.com/karapincha' );
			define( 'SUPPORT_URL', DEMO_URL . '/support' );
			define( 'CREDITS_URL', SUPPORT_URL . '/credits' );
			define( 'DOCUMENTATION_URL', THEME_URI . '/documentation' );
			define( 'DEVELOPER_NAME', THEME_AUTHOR);

			define( 'PREFIX', 'kar' );
			define( 'TEXTDOMAIN', 'karapincha' );

			# Admin Theme
			define( 'THEME_ADMIN', THEME_URI . '/inc/admin' );
			define( 'THEME_ADMIN_URI', THEME_URI . '/inc/admin' );
			define( 'THEME_ADMIN_DIR', THEME_DIR . '/inc/admin' );
			define( 'THEME_ADMIN_JS_DIR', THEME_ADMIN . '/js' );
			define( 'THEME_ADMIN_CSS_DIR', THEME_ADMIN . '/styles/css' );
			define( 'THEME_ADMIN_IMG_DIR', THEME_ADMIN . '/img' );
			define( 'THEME_ADMIN_STYLESHEET', THEME_ADMIN . '/styles/css/admin.css' );

			# Admin Panel Settings
			define( 'ADMIN_PANEL_URL', admin_url() );

			# Additional
			define( 'CURRENT_YEAR', date("Y"));
			define( 'ADMIN_COPYRIGHTS', '&copy; ' . CURRENT_YEAR . ' - ' . THEME_NAME );

			// define( 'CURRENT_LANG', pll_current_language());
		}

		# get theme functions
		public static function theme_functions() {
			
			// require_once get_parent_theme_file_path( '/inc/custom-header.php' );
			// require_once get_parent_theme_file_path( '/inc/template-tags.php' );
			// require_once get_parent_theme_file_path( '/inc/template-functions.php' );
			// require_once get_parent_theme_file_path( '/inc/customizer.php' );
			// require_once get_parent_theme_file_path( '/inc/icon-functions.php' );
			require_once( THEME_FUNCTIONS . '/navigation-menus.php' );
			require_once( THEME_FUNCTIONS . '/metaflow/cs-framework.php' );
			require_once( THEME_FUNCTIONS . '/media-supports.php' );
			require_once( THEME_FUNCTIONS . '/get-percentage.php' );
			require_once( THEME_FUNCTIONS . '/limit-words.php' );
			require_once( THEME_FUNCTIONS . '/alter-excerpt.php' );
			// require_once( THEME_FUNCTIONS . '/fonts.php' );
			// require_once( THEME_FUNCTIONS . '/content-width.php' );
			// require_once( THEME_FUNCTIONS . '/resource-hints.php' );
			// require_once( THEME_FUNCTIONS . '/pingback-header.php' );
			// require_once( THEME_FUNCTIONS . '/excerpt-more.php' );
			// require_once( THEME_FUNCTIONS . '/colors-css-wrap.php' );
			// require_once( THEME_FUNCTIONS . '/content-image-sizes-attr.php' );
			// require_once( THEME_FUNCTIONS . '/header-image-tag.php' );
			// require_once( THEME_FUNCTIONS . '/post-thumbnail-sizes-attr.php' );
			// require_once( THEME_FUNCTIONS . '/front-page-template.php' );
			// require_once( THEME_FUNCTIONS . '/custom-logo.php' );
			// require_once( THEME_FUNCTIONS . '/widgets/widgets.php' );
			// require_once( THEME_FUNCTIONS . '/polylang-support.php' );
			// require_once( THEME_FUNCTIONS . '/load-more.php' );
			// require_once( THEME_FUNCTIONS . '/ajax-search.php' );
			// require_once( THEME_FUNCTIONS . '/posts-by-category.php' );
			// require_once( THEME_FUNCTIONS . '/modify-post-content.php' );
			require_once( THEME_FUNCTIONS . '/custom-posts.php' );
			require_once( THEME_FUNCTIONS . '/dns-prefetch.php' );

			/* Mailer functions */
			require_once( THEME_FUNCTIONS . '/mail/startupsFormSubmit.php' );
			require_once( THEME_FUNCTIONS . '/mail/investorsFormSubmit.php' );

			/* Plugins */
			// require_once THEME_VENDORS_DIR . '/cmb2/init.php';
			// require_once THEME_LIB_DIR . '/cmb2-attached-posts/cmb2-attached-posts-field.php';
			// require_once THEME_LIB_DIR . '/cmb2-metatabs-options/cmb2_metatabs_options.php';
			// require_once THEME_LIB_DIR . '/cmb2-tabs/plugin.php';
			// require_once THEME_LIB_DIR . '/cmb2-post-search-field/cmb2_post_search_field.php';
			// require_once THEME_LIB_DIR . '/radio-buttons-for-taxonomies/radio-buttons-for-taxonomies.php';

			/* Functions */
			// require_once( THEME_FUNCTIONS . '/core.php' ); // Core functions
			// require_once( THEME_FUNCTIONS . '/settings.php' ); // Settings Page
			// require_once( THEME_FUNCTIONS . '/customizer/customizer.php' ); // Settings Page
			// require_once( THEME_FUNCTIONS . '/widgets.php' ); // Widgets
			// require_once( THEME_FUNCTIONS . '/custom-post-types/custom-post-types.php' );
			// require_once( THEME_FUNCTIONS . '/custom-post-types/custom-post-fields.php' );
			// require_once( THEME_FUNCTIONS . '/custom-fields.php' );
		}

		# enqueue scripts
		public static function theme_scripts() {
			require_once( THEME_FUNCTIONS . '/theme-scripts.php' ); // Theme Scripts
		}

		# enqueue styles
		public static function theme_styles() {
			require_once( THEME_FUNCTIONS . '/theme-styles.php' ); // Theme Styles
		}

		# enqueue fonts
		public static function theme_fonts() {
			require_once( THEME_FUNCTIONS . '/theme-fonts.php' ); // Theme Styles
		}

		# setup theme actions
		public static function theme_actions() {

			remove_action('wp_head', 'feed_links');
			remove_action('wp_head', 'feed_links_extra');
			remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
			remove_action('wp_head', 'wp_generator');
			remove_action('wp_head', 'wp_shortlink_wp_head');
			remove_action('wp_head', 'rest_output_link_wp_head');

			// feed
			remove_action( 'wp_head', 'feed_links_extra', 3 );
			remove_action( 'wp_head', 'feed_links', 2 );
			remove_action( 'wp_head', '_wp_render_title_tag', 1 );
			remove_action( 'wp_head', 'wp_resource_hints', 2 );
			
			// all actions related to emojis
			remove_action( 'admin_print_styles', 'print_emoji_styles' );
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

			// filter to remove TinyMCE emojis
			// add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
		}

		# setup theme filters
		public static function theme_filters() {

			// Add filters
			add_filter( 'the_content', 'wpautop' );

			// remove_filter( 'the_content', 'wpautop' );
			// remove_filter( 'the_excerpt', 'wpautop' );
		}
		
		# setup theme supports
		public static function theme_support() {
			add_theme_support( 'title-tag' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'menus' );
			add_theme_support( 'widgets' );
			add_theme_support( 'widget-customizer' );
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'karapincha-featured-image', 2880, 500, true );
			add_image_size( 'karapincha-thumbnail-avatar', 100, 100, true );
			set_post_thumbnail_size( 1900, 9999 );
			add_theme_support( 'automatic-feed-links' );		
			add_theme_support( 'bbpress' );
			add_theme_support( 'custom-background' );
			add_theme_support( 'woocommerce' );
			add_theme_support( 'customize-selective-refresh-widgets' );
			add_theme_support('html5', array( 
				'caption', 
				'comment-form', 
				'comment-list', 
				'gallery', 
				'search-form') 
			);
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			));
			add_theme_support( 'custom-logo', array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			));
		}
	}
}
