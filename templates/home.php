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

				<div class="header-wrap">
					<div class="header-wrap-color"></div>
					<div>
						<section id="header" class="center-vertically">
							<div class="grid">
								<div id="h1-wrapper" class="center-vertically" style="margin-top: 35px;">
									<h1>Project management with WordPress.</h1>
									<div id="header-left-content">
										<div class="signup-form untouched">
											<h3>Coming May 2014</h3>
											<?php echo do_shortcode( '[mc4wp_form]' ); ?>
											<p>Developers can try it today and <a href="http://github.com/NerveTask/nervetask">contribute on Github</a>.</p>
										</div>
									</div>
								</div>
								<div id="header-right-content">
									<script type="text/javascript" charset="utf-8" src="http://static.polldaddy.com/p/7889353.js"></script>
									<noscript><a href="http://polldaddy.com/poll/7889353/">How do you want to manage projects?</a></noscript>
								</div>
							</div>
						</section>
					</div>
				</div>

				<section class="paragraph-grid-two-up top-border">
					<div class="grid">
						<h2>NerveTask is comprised of two parts</h2>
						<ul>
							<li>
								<div class="center-vertically">
									<h3>Plugin</h3>
									<p class="large-type"><strong>NerveTask</strong> is a free, open-source plugin that can add project management features to WordPress.</p>
									<p class="light-type">
										NerveTask is easy to contribute to. <a class="navigational" href="http://github.com/NerveTask/nervetask">Join in on Github</a>
									</p>
								</div>
							</li>
							<li>
								<div class="center-vertically">
									<h3>Theme</h3>
									<p class="large-type">While project management features are great you want them to be easy to interact with. That's why you need a NerveTask-compatible theme.</p>
									<p class="light-type">
										Browse the available NerveTask-compatible themes. <a class="navigational" href="#">Browse Themes</a>
									</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="single-testimonial twitter color-subtle_bg centered narrow">
				</section>
				
				<section class="no-border-bg left-pull-visual top-border">
					<div class="grid">
						<div class="center-vertically">
							<h3>NerveTask, like WordPress, is open-source which means that everyone can make it better all the time.</h3>
							<p class="large-type">Open-source projects benefit from their community of users because their users can help to actually build the product and add features as seen necessary to project management.</p>
							<p class="light-type">
								NerveTask is easy to contribute to. <a class="navigational" href="http://github.com/NerveTask/nervetask">Join in on Github</a>
							</p>
						</div>
						<div class="pull" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-screenshot-500x973.png');"></div>
					</div>
				</section>
				<section class="single-testimonial twitter color-subtle_bg centered narrow">
				</section>
				
				<section class="right-pull-visual">
					<div class="grid">
						<div class="center-vertically">
							<h3>Your data is your data.</h3>
							<p class="large-type">Project management data is important and should you ever choose to use a another platform you can take your data with you using a native WordPress export.</p>
							<p class="light-type">
								Never locked in. <a class="navigational" href="#">Learn more</a>
							</p>
						</div>
						<div class="pull" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-screenshot-500x973.png');"></div>
					</div>
				</section>
				<section class="single-testimonial facebook color-subtle_bg centered narrow">
				</section>
				
				<section class="no-border-bg left-pull-visual top-border">
					<div class="grid">
						<div class="pull" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-screenshot-500x973.png');"></div>
						<div class="center-vertically">
							<h3>Prefer a different look? Skin NerveTask however you want.</h3>
							<p class="large-type">NerveTask is an open-source plugin and easy for WordPress theme developers to create unique themes around. Or you can outfit an existing theme with a few steps.</p>
							<p class="light-type">
								Project management has many different looks. <a class="navigational" href="">Checkout the themes</a>
							</p>
						</div>
					</div>
				</section>
				<section class="single-testimonial twitter color-subtle_bg centered narrow">
				</section>
				
				<section class="no-border-bg right-pull-visual top-border flush-bottom">
					<div class="grid">
						<div class="pull" style="background: url('/wp-content/themes/nervetask/assets/images/nervetask-screenshot-500x973.png');"></div>
						<div class="center-vertically">
							<h3>Secure. NerveTask is built with WordPress VIP coding standards.</h3>
							<p class="large-type">Quality code is no after-thought here. Security is important to your and your clients, so we've adhered to standards set forth by WordPress VIP, an Automattic company for enterprises.</p>
							<p class="light-type">
								Security and coding standards. <a class="navigational" href="">Learn more</a>
							</p>
						</div>
					</div>
				</section>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>