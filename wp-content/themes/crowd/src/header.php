<?php
if (is_home() || is_archive()) {
	$page_banner = meta_get_option('homepage_banner_img');
} else if(is_single()) {
	$page_banner = '';
} else {
	$page_banner = get_the_post_thumbnail_url();
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js ie6 oldie"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js ie7 oldie"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js ie8 oldie"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta charset="utf-8">
	   	<meta name="description" content="Keywords">
	    <meta name="author" content="Name">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	    <title>Project #CrowdIsland</title>
		
		<!-- Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
		<link rel="apple-touch-icon-precomposed" href="">
	    <link rel="shortcut icon" href="favicon.png">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<script type="text/javascript">
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		</script>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Body wrapper -->
		<div class="blokk-body-wrapper">
			