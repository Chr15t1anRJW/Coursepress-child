<?php
/**
 * For the actual cart/checkout page
 *
 * @package CoursePress
 *
 *
 *
 *
 *RJW Added:
 * 1. Adds Style CSS to the cart page specifically used for one page checkout
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<style>
/*Hides Header because we don't want a user to see it in an iFrame*/
.site-header{
display:none;
}
/*Hides Footer because we don't want a user to see it in an iFrame*/
.site-footer{
display:none;
}
/*Hides Extra data because we don't want a user to see it in an iFrame*/
.push{
display:none;
}

/*Hides woocommerce Additional notes section*/
.woocommerce-shipping-fields {
    display: none;
}
/*Extend billing section to full width*/
.woocommerce-billing-fields {
    width: 200%;
}

/*Removes Subtotal section from cart section*/
.cart-subtotal {
    display: none;
}

.custom-background {
    background: transparent!important;
}

#content {
    border: none;
}

/****************
*
*700px
*
*****************/
@media (max-width:700px){
	/*Extend billing section to full width*/
	.woocommerce-billing-fields {
    		width: 100%;
	}

}
/************End 700px Mobile Styling***************/


</style>
</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->