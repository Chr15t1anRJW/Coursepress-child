<?php
/**
 * @package CoursePress
 *
 *
 *
 *
 *
 *RJW Added:
 * 1. Commented out Instructor Content
 * 2. Commented out Course Purchase information that was not needed
 * 3. Removed section that calls in a bunch of instructor information we don't use
 * 4. Removed footer links for meta data that we didn't want.
 *
 *
 *
 **/
?>
<?php
$course = new Course( get_the_ID() );

$course_category_id	 = $course->details->course_category;
$course_category	 = get_term_by( 'ID', $course_category_id, 'course_category' );

$course_language = $course->details->course_language;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <!--Remove instructor Area
        <div class="instructors-content">
			<?php echo do_shortcode( '[course_instructors list="true" link="true"]' ); ?>
        </div>
        -->
    </header><!-- .entry-header -->

    <section id="course-summary">


		<?php
		$course_media	 = do_shortcode( '[course_media]' );
		if ( $course_media !== '' ) {
			?>
			<div class="course-video">
				<?php
				// Show course media
				echo $course_media;
				?>
			</div>
		<?php } ?>

        <div class="entry-content-excerpt <?php echo ($course_media == '' ? 'entry-content-excerpt-right' : '' ); ?>">
			<?php the_excerpt();   ?>
            <div class="course-box">
				<!-- Removed Course Purchase list items -->
				<?php //echo do_shortcode( '[course_dates show_alt_display="yes"]' ); //change to yes for 'Open-ended' ?>
				<?php //echo do_shortcode( '[course_enrollment_dates show_alt_display="no"]' ); //change to yes for 'Open-ended' ?>
				<?php //echo do_shortcode( '[course_class_size]' ); ?>
				<?php //echo do_shortcode( '[course_enrollment_type label="'.__('Who can Enroll: ', 'cp').'"]' ); ?>
				<?php echo do_shortcode( '[course_language]' ); ?>				
				<?php echo do_shortcode( '[course_cost]' ); ?>	

            </div><!--course-box-->
            <div class="quick-course-info">
				<?php //echo do_shortcode('[course_details field="button"]'); ?>
				<?php echo do_shortcode( '[course_join_button]' ); ?>
            </div>
        </div>
    </section>

    <section id="additional-summary">
        <div class="social-shares">
            <span><?php _e( 'SHARE', 'cp' ); ?></span>
            <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][0]=&p[title]=<?php the_title(); ?>&p[summary]=<?php echo urlencode( strip_tags( get_the_excerpt() ) ); ?>" class="facebook-share" target="_blank"></a>
            <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" class="twitter-share" target="_blank"></a>
            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="google-share" target="_blank"></a>
            <a href="mailto:?subject=<?php the_title(); ?>&body=<?php echo strip_tags( get_the_excerpt() ); ?>" target="_top" class="email-share"></a>
        </div><!--social shares-->
    </section>

    <br clear="all" />

    <div class="entry-content <?php echo( count( $instructors ) > 0 ? 'left-content' : '' ); ?>">
        <?php the_content(); ?>
		<?php if ( $course->details->course_structure_options == 'on' ) { ?>
			<h1 class = "h1-about-course"><?php
				_e( 'Course Structure', 'cp' );
				?></h1>
			<?php
			// $course->course_structure_front();
			echo do_shortcode( '[course_structure label="" show_title="no" show_divider="yes"]' );
		}
		?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'cp' ),
			'after'	 => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

    	<?php edit_post_link( __( 'Edit', 'cp' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->