<?php
/*
Template Name: One-Page with Cart/Checkout
*/

/**
 * The template for displaying pages without titles.
 *
 *
 *
 * @package CoursePress
 *
 *
 *
 *RJW Added:
 * 1. Removed default page template call
 * 2. Added call to onepage for the page that you <iframe> in
 */

get_header(); ?>

<?php
global $post;
?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'onepage' ); ?>

			<?php endwhile; // end of the loop. ?>
<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?> 