<?php
/*
Template Name: One Page Checkout Page ( with sidebar )
*/

/**
 * The template for displaying all full pages.
 *
 *
 * RJW Added
 * 1. Removed call to default Page Template
 * 2. Added call to opc-page for the One Page Checkout
 */

get_header(); ?>

	<div id="primary" class="content-area content-side-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'opc-page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>