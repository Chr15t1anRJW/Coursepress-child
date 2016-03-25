<?php
/*
Template Name: No-Title
*/

/**
 * The template for displaying pages without titles.
 *
 *
 *
 * @package CoursePress
 *
 *
 *RJW Added:
 * 1. removed default call to normal page template
 * 2. Added call to no-title content to remove titles
 */

get_header(); ?>

<?php
global $post;
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'no-title' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( ( comments_open() || '0' != get_comments_number() ) && $post->comment_status !== 'closed' ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
