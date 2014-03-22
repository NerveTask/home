<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Nervetask
 */

get_header(); ?>

<div class="container">
		
	<div class="row">

		<section id="primary" class="content-area col-lg-8">
			
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php nervetask_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
			
		</section><!-- #primary -->
		
		<?php get_sidebar(); ?>
			
	</div>
		
</div>

<?php get_footer(); ?>