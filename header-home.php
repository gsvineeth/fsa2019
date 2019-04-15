<?php
/**
 * The header for our theme homepage
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
<div id="page" class="site ifsa-cp">

	<header id="home-masthead" class="site-header">
		<div class="container"><div class="row">
			<div class="col-md-12">
					<a href="<?php echo home_url();?>">
						<img src="<?php echo get_template_directory_uri()?>/img/ifsa-logo-mono.png" />
						<h1>Intellectual Fitness & Sports Academy</h1>
					</a>
			</div>	
		</div></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
