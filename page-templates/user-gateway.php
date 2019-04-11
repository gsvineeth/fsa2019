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
 Template name:User Gateway
 * @package ifsa2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ifsa-cp">

			<div class="container"> <div class="row d-flex justify-content-center"> 
				<div class="col-md-6">
					<div class="user-gateway">
					<!-- <div id="ifsa-login-box" class="gateway-box">
								<h3> Login with your Site Account</h3>
								<div class="gateway-form"> <?php //echo do_shortcode('[wppb-login]') ?></div>
								<p class="text-center"> Not a member yet? <a class="show-register" href=""> Register now</a> | <a class="recover-pass" href="">Forgot password?</a></p>
						</div>
						<div id="ifsa-register-box" class="gateway-box">
								<h3> Register a new Account</h3>
								<div class="gateway-form"> <?php //echo do_shortcode('[wppb-register]') ?> </div>
								<p class="text-center"> Already a member? <a class="show-login" href="">Login now</a> </p>
						</div>
						<div id="ifsa-recover-password" class="gateway-box">
							<h3> Recover your password</h3>
							<div class="gateway-form"> <?php //echo do_shortcode('[wppb-recover-password]');?></div>
							<p class="text-center"> Cancel and go back to <a class="show-login" href="">Login</a> </p>
						</div> -->

						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'page' );
						endwhile; // End of the loop.
						?>

					</div>
				</div>
			</div></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
