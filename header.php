<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<meta name="theme-color" content="#000">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->
</head>

<body <?php body_class(); ?>>

	<!-- The Navigation Station -->
	<nav id="navigation">
		<section class="clearfix" data-aos="fade-in">
			<!-- Main Menu Area -->
			<div class="menu-container">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
			</div>
		</section>
	</nav>

	<!-- Mobile Menu -->
	<div class="hamburgler-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container_class' => 'mobile-menu' ) ); ?>
	</div>

	<div id="hamburgler" class="hamburgler-icon-wrapper">
			<span class="hamburgler-icon"></span>
	</div>
