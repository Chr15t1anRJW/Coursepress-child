<?php
/**
 * For page that iframes in the one page checkout
 *
 * @package CoursePress
 
 
 
 *RJW Added:
 * 1. Script that is commented out is used to dynamically set the height of the iframe to the inherit sites scroll height.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	<!-- Script used to auto generate height for iframe 
	Code should be commented out unless being used
	Unbounce has issues with the auto height
	Add this tag to the end of the  iframe:
	
	onload='resizeIframe(this)'
	
	ex.
	<iframe src="#" width="100%" scrolling="no" style="overflow-y:hidden;border:none;" onload='resizeIframe(this)'></iframe>
	
	-->
<!--
<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
-->
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->