<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 Template name:Custom Course Page
 * @package ifsa2019
 */

get_header();
?>
 <?php 
	 $courseId = get_post_meta(get_the_ID(), 'my_course_id',true); 
	 $course = get_post($courseId);
 ?> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main ifsa-cp">
		<div class="container"> <div class="row"> 

		<div class="col-md-12">
			<?php $featured_img_url = get_the_post_thumbnail_url($courseId,'full');?>
			<img src="<?php echo $featured_img_url;?>">
		</div>

		<?php //var_dump($course) ?>

		<div class="col-md-8"> 
			<h1> <?php echo $course->post_title ?> </h1>
			<?php echo $course->post_content?>
			<?php echo do_shortcode( '[learn_press_course_curriculum id=" '.$courseId.' "]' );?>
		</div>
		<div class="col-md-4">
			<?php echo do_shortcode('[learn_press_button_course id="'.$courseId.'"]')?>
			<?php echo get_post_meta($courseId, '_lp_duration',true);  ?>
		</div>




		</div></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
