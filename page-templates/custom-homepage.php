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
 Template name:Custom Homepage
 * @package ifsa2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ifsa-cp">

		<div class="container"><div class="row">
			
			<div class="col-md-6">
				<a href="#">
				<div class="homecbox olc-box d-flex align-items-center justify-content-center active">
					<div class="homebox-entry">
						<h2>Online Courses</h2>
						<p> Visit our online course</p>
						<span class="arrow"> </span>
					</div>					
				</div>
				</a>
			</div>
			
			<div class="col-md-6">
				<a href="#">
				<div class="homecbox crc-box d-flex align-items-center justify-content-center">
					<div class="homebox-entry">
						<h2>Classroom Courses</h2>
						<p> Checkout the course details </p>
						<span class="arrow"> </span>
					</div>
				</div>
				</a>
			</div>
		</div></div>

	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
