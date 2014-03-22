<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nervetask
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,600,800' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="header-wrap" class="wrap">
		<div class="container">
			<header id="main-nav" class="nav row">
				<div class="col-sm-4">
					<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nervetask-logo.png" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div class="col-sm-8">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h1 class="menu-toggle"><?php _e( 'Menu', 'nervetask' ); ?></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'nervetask' ); ?></a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header>
		</div>
	</div>
	
	<div id="content-wrap">
		<div id="content" class="site-content">
