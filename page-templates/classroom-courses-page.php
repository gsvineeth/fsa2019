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
 Template name:Classroom Courses
 * @package ifsa2019
 */

get_header();
?>

	<div class="content-area">
		<main id="main" class="site-main ifsa-cp">

		<div id="homepage" class="homepage">
        <div class="wrapper-home">
            <section class="spotlight">
                <div class="container">
					<div class="row">
                    <div class="col-md-6">
                        <h1>Building </br> careers in </br> fitness</h1>
                        <p> <strong>IFSA is the Fastest Growing Fitness Academy in India. <br> </strong> Join the team of 2000+ Successful IFSA Certified Fitness Professionals. Leverage your Career in Fitness Industry to the next level.</p>
                        <ul class="stats">
                        <li> 
                            <span>2000+ </span>
                            <br>Students certified
						</li>
						<li><span>8</span>
                                <br>Cities - Courses</li>
                        <li><span>ISO 9001:2005</span>
                                <br>Certified</li>

                        </ul>

                    </div>
                    <div class="col-md-6">

					</div>
					</div>
                </div>
            </section>

            <section class="courses-intro">
                <div class="container">
                    <h2 class="heading center"><span>Classroom Programs</span></h2>
					<div class="row"> 
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-inner">
                                <hgroup>
                                    <h1 class="heading2">Certified </BR>Fitness Coach</h1>
<!--                                     <h3> <span>3 Months  -</span> <span>NEXT COURSE START BY JAN 2016</span> </h3> -->
                                </hgroup>
                                <p> IFSA CFC is one of the most sought for certification in all the major gym chains across India. The course covers everything personal trainer should know – from anatomy, kinesiology, exercise techniques, client assessment and training programming to basic nutrition and supplementation.




                                    <ul class="feat-list">
                                        <li>18 Lecutres</li>
                                        <li>14 Practical Sessions</li>
                                    </ul>


                                </p>

                                <a href="http://ifsacourse.com/certified-fitness-coach/" class="cta-reverse">Enroll Now</a>

                            </div>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-inner">
                                <hgroup>
                                    <h1 class="heading2">Certified </BR>Nutrition Coach</h1>
<!--                                     <h3> <span>3 Months  -</span> <span>NEXT COURSE START BY JAN 2016</span> </h3> -->
                                </hgroup>
                                <p>
                                    Nutrition is the key to delivering results to your clients. Certified Nutrition Coach (CNC) course bridges the gap between knowledge and application in Nutrition coaching. The behavioral coaching based approach is developed by Sveta Bhassin,MSc through her 25+ years of experience as a nutrition coach. IFSA CFC program is arguably the most comprehensive Sports Nutriton Certification in India.

                                    <ul class="feat-list">
                                        <li>18 Lecutres</li>
                                    </ul>


                                </p>

                                <a href="http://ifsacourse.com/certified-nutrition-coach/" class="cta-reverse">Enroll Now</a>

                            </div>
                        </div>
                    </div>

					</div>
                </div>
            </section>




            <section class="book-overview">
                <div class="container">
					<div class="row"> 
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-inner">
                                <hgroup>
                                    <h1 class="heading">India's most comprehensive</BR>Personal Training Manual</h1>
                                </hgroup>
                                <p>
                                    <ul class="feat-list">
                                        <li>Ultimate Resource for Personal Trainers</li>
                                        <li>Simple , easy to understand format</li>
                                        <li>Compiles cutting edge science and decades of experience</li>
                                        <li>Exclusive Module for new-trainers to get industry ready and successful</li>
                                    </ul>

                                </p>


                            </div>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ifsabooks.png" alt="laptop image" />


                    </div>

					</div>
                </div>
            </section>

        </div>
        <!-- close .container -->
    </div>
    <!-- close .main-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
