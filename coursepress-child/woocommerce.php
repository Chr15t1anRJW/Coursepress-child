<?php
/*
Template Name: WooCommerce Shop Page With Unique Sidebar
*/

/**
 *
 *
 * RJW Added:
 * 1. Manually changed the layout of the page to pull from a Widgetizeable sidebar.
 *
 *NOTE: If you don't want this layout delete this template page from the theme
 */

get_header(); ?>

<?php
global $post;
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main woo-main" style="width:72%;float:left;" role="main">

			<?php woocommerce_content(); ?>
			
		</main><!-- #main -->
		<?php get_sidebar( 'woo-sidebar' ); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
