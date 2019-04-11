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

		<div class="row">
    <div class="spotlight-landing">
      <div class="col-md-12"><h1>
BUILDING <br>
CAREERS <br>
IN FITNESS
      </h1></div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-6">
      <a href="http://ifsacourse.com/online-courses/" class="cta-online">
	      <span class="label-comingsoon">1 free course available</span>
        <p>Online
<br>Courses</p>
      </a>
    </div>

    <div class="col-md-6">
      <a href="classroom-courses" class="cta-classroom">
        <p>Classroom
<br>Courses</p> 
      </a>
    </div>


    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
	        <ul class="features-listing">
          <li> Get Certified and boost your Credentials      </li>
          <li>   Bring life-changing results to your clients   </li>
          <li>    Start earning over Rs.50,000 per month</li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-10 col-md-offset-1 col-centered">
      <p>Master the art of Fitness and Nutrition Coaching with Intellectual Fitness and Sports Academy (IFSA). With over 2000+ certified professionals across India, IFSA is India’s fastest growing fitness Academy. Our application based approach towards coaching makes our certified professionals effective and successful coaches.



</p>
<p class="accr">
	<img style="margin:30px 0;" src="<?php echo get_template_directory_uri(); ?>/splash-images/accr.png"/>
</p>
    </div>

  </div>


</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
