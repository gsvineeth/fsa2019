<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ifsa2019
 */

if ( ! is_active_sidebar( 'course-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'course-sidebar' ); ?>
</aside><!-- #secondary -->
