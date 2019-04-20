<?php
/**
 * Template for displaying header of single course popup.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/header.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
?>

<div id="course-item-content-header">

    <div class="course-item-search">
        <form>
            <input type="text" placeholder="<?php esc_attr_e( 'Search item', 'learnpress' ); ?>"/>
            <button type="button"></button>
        </form>
    </div>

    <form class="lp-form form-button lp-button-back" method="post" action="<?php echo $course->get_permalink(); ?>">
        <button class="lp-button button"> <img src="<?php echo get_template_directory_uri().'/img/delete.png' ?>" /> </button>
    </form>

    <a class="toggle-content-item" href=""></a>

 


</div>
