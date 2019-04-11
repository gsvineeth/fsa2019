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
 Template name:Online courses
 * @package ifsa2019
 */

get_header();
?>

	<div class="content-area ">
		<main id="main" class="site-main ifsa-cp">
			<div class="main-content online-course-wrapper">
				<div class="container">
					<div class="row">
						<div id="content" class="main-content-inner col-sm-12 col-md-12">
							<div id="fsa-courses">

								<div class="fsa-course">
									<div class="row">
										<div class="col-md-6 ">
											<div class="fsa-course-entry">
												<div class="fsa-course-title">
													<span class="label free"> free </span>
													<h2>Strength Training Tutorial</h2>
												</div>

												<p> The most comprehensive Strength Training tutorial series available on the internet </p>

												<ul>
													<li>- 60+ Movements explained in crisp and clear format </li>
													<li>- Exercised performed by the top athlets in India</li>
													<li>- Curated by Parag Parulekar and Vishnu Venugopal</li>
													<li>- The entire course is available FREE.</li>

												</ul>
												<p><a href="http://ifsacourse.com/course/exercise-video-tutorial/" class="btn"> Watch Free Course </a></p>
											</div>
										</div>
										<div class="col-md-6 hidden-xs">
											<div class="fsa-course-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/online-c1.jpg" alt="">
											</div>
										</div>
									</div>
								</div>

								<div class="fsa-course">
									<div class="row">
										<div class="col-md-6 ">
											<div class="fsa-course-entry">
												<div class="fsa-course-title">
													<span class="label soon">coming soon </span>
													<h2>Certified Nutriton Course</h2>
												</div>

												<p> The most comprehensive Strength Training tutorial series available on the internet </p>

												<ul>
													<li>- India’s most comprehensive Nutrition Manual </li>
													<li>- 12 Week Online Program </li>
													<li>- Lectures Delivered Online </li>
													<li>- Access to your tutor over email </li>
													<li>- Boost your credentials </li>

												</ul>
												<p>Get notified about this course  </p>
												<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="https://ifsacourse.us17.list-manage.com/subscribe/post?u=088b0389808fed5eb6305a0a2&amp;id=0d2b8abaa5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address here" required>
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_088b0389808fed5eb6305a0a2_0d2b8abaa5" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="xbutton btn"></div>
				</div>
			</form>
			</div>

			<!--End mc_embed_signup-->
			<!-- 									<?php echo do_shortcode('[contact-form-7 id="379" title="Notify me"]');?> -->
												
			<style>
				#mc_embed_signup{
					margin-top: -10px;
				}
				#mc_embed_signup form{
					padding:0!important;
				}
			</style>
											</div>
										</div>
										<div class="col-md-6 hidden-xs">
											<div class="fsa-course-img">
												<img src="<?php echo get_template_directory_uri(); ?>/img/online-c2.jpg" alt="">
											</div>
										</div>
									</div>
								</div>

							</div>
						</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
					</div><!-- close .row -->
				</div><!-- close .container -->
			</div><!-- close .main-content -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
