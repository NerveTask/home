<?php
/**
 * Template Name: Home
 *
 * @package Nervetask
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="section-separators">

				<section class="section" id="intro">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 center-vertically">
								<h1>Project management with WordPress.</h1>
								<div class="signup-form">
									<h3>Coming May 2014</h3>
									<?php echo do_shortcode( '[mc4wp_form]' ); ?>
									<p>Developers can try it today and <a href="http://github.com/NerveTask/nervetask">contribute on Github</a>.</p>
								</div>
							</div>
							<div class="col-lg-5 col-lg-offset-1 center-vertically">
								<script type="text/javascript" charset="utf-8" src="http://static.polldaddy.com/p/7889353.js"></script>
								<noscript><a href="http://polldaddy.com/poll/7889353/">How do you want to manage projects?</a></noscript>
							</div>
						</div>
					</div>
				</section>

				<section class="section" id="nervetask-two-parts">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-center">NerveTask is comprised of two parts</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">

								<h3>Plugin <a class="btn btn-default" href="http://github.com/NerveTask/nervetask">1) Download the free plugin</a></h3>
								<p><strong>NerveTask</strong> is a free, open-source plugin that can add project management features to WordPress.
									<br>Add the functionality, then add the skin &rarr;</p>
							</div>
	
							<div class="col-lg-6">
								<h3>Theme <a class="btn btn-default" href="/themes/">2) Browse the themes</a></h3>
								<p>While project management features are great you want them to be easy to interact with. That's why you need a NerveTask-compatible theme.</p>
							</div>
						</div>
					</div>
				</section>
				
				<section class="section separator"></section>
				
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 center-vertically">
								<h3>NerveTask, like WordPress, is open-source.</h3>
								<p>Open-source projects benefit from their community of users because their users can help build the product.</p>
								<p>
									NerveTask is easy to contribute to. <a class="navigational" href="http://github.com/NerveTask/nervetask">Join in on Github</a>
								</p>
							</div>
							<div class="col-lg-7 col-lg-offset-1 responsive-background" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-open-source.png');"></div>
						</div>
					</div>
				</section>
				
				<section class="section separator"></section>
				
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 responsive-background" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-data-portability.png');"></div>
							<div class="col-lg-4 col-lg-offset-1 center-vertically">
								<h3>Your data is your data.</h3>
								<p>Project management data is important and should you ever choose to use a another platform you can take your data with you using a native WordPress export.</p>
								<p>
									Never locked in. <a class="navigational" href="<?php echo esc_url( home_url( '/docs/data-portability/' ) ); ?>">Data portability</a>
								</p>
							</div>
						</div>
					</div>
				</section>
				
				<section class="section separator"></section>
				
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 center-vertically">
								<h3>Skin NerveTask however you want.</h3>
								<p>NerveTask is an open-source plugin and easy for WordPress theme developers to create unique themes around. Or you can outfit an existing theme with a few steps.</p>
								<p>
									Project management has many different looks. <a class="navigational" href="<?php echo esc_url( home_url( '/themes/' ) ); ?>">Checkout the themes</a>
								</p>
							</div>
							<div class="col-lg-7 col-lg-offset-1 responsive-background" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-themes.png');"></div>
						</div>
					</div>
				</section>
				
				<section class="section separator"></section>
				
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 responsive-background" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-secure.png');"></div>
							<div class="col-lg-4 col-lg-offset-1 center-vertically">
								<h3>Secure. NerveTask is built with strict coding standards.</h3>
								<p>Quality code is not an after-thought. Security is important no matter what, so we adhere to strict coding standards.</p>
								<p>
									Open-source &amp; secured by the people. <a class="navigational" href="<?php echo esc_url( home_url( '/docs/coding-standards/' ) ); ?>">Coding standards &amp; security</a>
								</p>
							</div>
						</div>
					</div>
				</section>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>