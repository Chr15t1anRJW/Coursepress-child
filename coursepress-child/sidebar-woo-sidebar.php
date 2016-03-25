<?php
/**
 * The Sidebar containing the main widget areas.
 *
 *RJW Added:
 * 1. Removed Default settings
 * 2. Added dynamic widget to woocommerce
 */
?>
	<?php if ( is_active_sidebar( 'woo-sidebar' ) ) : ?>
			<div id="secondary-woo" class="sidebar-container-woo" role="complementary">
				<div class="widget-area" style="list-style:none;float:right;">
					<?php dynamic_sidebar( 'woo-sidebar' ); ?>
				</div><!-- .widget-area -->
			</div><!-- #secondary -->
	<?php endif; ?>