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
		<div class="container">	<div class="row">
		
			<div class=" col-md-12 mobile-menu">
			<div class="mobile-menu-box">
				<div class="close-button"> <img src="<?php echo get_template_directory_uri().'/img/close.png'?>"/></div>
				<div class="top-course-box"> 
					<?php 
					$online_page_link = get_theme_mod( 'online_course_page', '' );
					$nutrition_course_id = get_theme_mod( 'nutrition_course_id', '' ); 
					?>
					<?php if( is_user_logged_in() ) { ?>
					<a class="top-course-route" href="<?php echo get_permalink($nutrition_course_id); ?>">
					<?php } else { ?>
					<a class="top-course-route" href="<?php echo get_permalink($online_page_link); ?>">
					<?php } ?>
						<h4>Online Course <span>Certified Nutrition coach </span></h4>							
					</a>
				</div>

				<div class="top-course-box"> 					
						<a class="top-course-route top-course-trigger" href="#">
							<h4>Classroom courses <span>Sought after Courses </span></h4>
						</a>
						<span class="caret"></span>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'classroom-menu',
							) );
						?>
				</div>

				<div class="mobile-menu-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div>
			</div>
			
		</div>	

		<div class="col-md-12">
			<div class="top-menu clearfix d-flex justify-content-end align-items-center">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->	
			<div class="social-links">
				<ul class="clearfix">
					<li> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.png" alt="facebook"/></a> </li>
					<li> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/twitter.png" alt="twitter"/></a> </li>
					<li> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.png" alt="youtube"/></a> </li>
					<li> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.png" alt="instagram"/></a> </li>
					<li class="menu-trigger"> <img src="<?php echo get_template_directory_uri() ?>/img/menu.png"/> </li>
				</ul>
			</div>	
			</div>
		</div>

		<div class="col-md-12">
			<div class="head-area">
				<div class="row d-flex">
					<div class="d-flex col-md-2 col-6">
						<div class="site-branding d-flex align-self-center ">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding -->
					</div>

					<div class="d-md-flex align-content-center col-md-7 col-12 d-none">
						<div class="course-route">
							<?php 
								$online_page_link = get_theme_mod( 'online_course_page', '' ); 
								$nutrition_course_id = get_theme_mod( 'nutrition_course_id', '' );
							?>
							<?php if( is_user_logged_in() ) { ?>
								<a href="<?php echo get_permalink($nutrition_course_id); ?>">
							<?php } else { ?>
								<a class="course-route" href="<?php echo get_permalink($online_page_link); ?>">
							<?php } ?>
								<h4>Online course <span> Certified Nutrition coach </span></h4>							
							</a>
						</div>

						<div class="course-route classmenu-trigger">
							<?php $classroom_page_link = get_theme_mod( 'classroom_course_page', '' ); ?>						
							<a class="classroom-menu-trigger" href="#">
								<h4>Classroom courses <span> Sought after Courses </span></h4>
							</a>
							<span class="caret"></span>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-3',
									'menu_id'        => 'classroom-menu',
								) );
							?>
						</div>

					</div>


					<div class="d-flex col-md-3 col-6 justify-content-end ml-auto">
					<?php if ( ! is_user_logged_in() ){  ?>
						 <div class="align-self-center "> <a class="head-login" href="<?php echo home_url()?>/login">Sign in</a> </div>
						 <?php } else { ?>
							<?php $myaccount_page_link = get_theme_mod( 'my_account_page', '' );?>
							<div class="align-self-center "> <a class="head-login" href="<?php echo get_permalink($myaccount_page_link); ?>">My Account</a> </div>
						 <?php } ?>
					</div>
					

				</div>
			</div>
		</div>
		</div></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
