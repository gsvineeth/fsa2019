<?php
/**
 * Template for displaying content of landing course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/content-landing.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php
/**
 * @deprecated
 */
do_action( 'learn_press_before_content_landing' );
?>

<div class="course-landing-summary">

	<?php
	/**
	 * @deprecated
	 */
	do_action( 'learn_press_content_landing_summary' );

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/content-landing-summary' );
	?>




</div>
<div class="row">
	<?php 
		$courseID = get_the_ID();
		$course = get_post($courseID); 
	?>

	<div class="col-sm-8"> 
		<?php echo $course->post_content?>		
	</div>

	<div class="col-sm-4">
		<div class="course-page-price-action d-flex flex-column"> 
			<?php do_action('ifsa_course_price')?>
			<?php do_action('ifsa_course_buttons')?>
		</div>
	</div>
	<div class="col-sm-12">	
		<div class="course-page-curriculum"> 	
			<?php echo do_shortcode( '[learn_press_course_curriculum id=" '.$courseID.' "]' );?>
		</div>
	</div>
</div>

<?php
/**
 * @deprecated
 */
do_action( 'learn_press_after_content_landing' );
?>
