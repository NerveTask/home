<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Nervetask
 */

get_header(); ?>

<div class="container">
		
	<div class="row">

		<section id="primary" class="content-area col-lg-8">
			
			<main id="main" class="site-main grid" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
			
		</section><!-- #primary -->
		
		<?php get_sidebar(); ?>
			
	</div>
		
</div>

<?php get_footer(); ?>
