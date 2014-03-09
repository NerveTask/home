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
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class('index stock header-left reveal'); ?>>
<div id="page" class="hfeed site">

	<div id="header-wrap" class="header-wrap">
		<div class="header-wrap-color"></div>
		<div>
			<header id="main-nav" class="nav">
				<div class="grid">
					<div class="site-title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h1 class="menu-toggle"><?php _e( 'Menu', 'nervetask' ); ?></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'nervetask' ); ?></a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header>
			<section id="header" class="center-vertically">
				<div class="grid">
					<div id="h1-wrapper" class="center-vertically" style="margin-top: 35px;">
						<h1>Project management with WordPress.</h1>
						<div id="header-left-content">
							<div class="signup-form untouched">
								<h3>Coming May 2014</h3>
								<?php echo do_shortcode( '[mc4wp_form]' ); ?>
								<p>Developers can try it today and <a href="">contribute on Github</a>.</p>
							</div>
						</div>
					</div>
					<div id="header-right-content">
						<a class="play-video"><img src="http://placehold.it/611x343"></a>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div id="content" class="site-content">
