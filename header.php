<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ifsa2019
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container"><div class="row">

		<div class="col-md-12">
			<div class="top-menu clearfix">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->		
			</div>
		</div>

		<div class="col-md-12">
			<div class="head-area">
				<div class="row d-flex">
					<div class="d-flex col-sm-2 col-6">
						<div class="site-branding d-flex align-self-center ">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding -->
					</div>

					<div class="d-sm-flex align-content-center col-sm-7 col-12 d-none">
						<a class="course-route" href="#">
							<h4>online course <span>Certified Courses </span></h4>
						</a>
						<a class="course-route" href="#">
							<h4>Classroom courses <span>Sought after Courses </span></h4>
						</a>
					</div>

					<?php if ( ! is_user_logged_in() ){  ?>
					<div class="d-flex col-sm-3 col-6 justify-content-end ml-auto">
						 <div class="align-self-center "> <a class="head-login" href="<?php echo home_url()?>/login">Sign in</a> </div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
		</div></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
